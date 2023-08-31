<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use App\Models\Pemesanan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        $pemesanan = Pemesanan::orderBy('id', 'desc')->paginate(5);
        return view('admin.pemesanan.index', compact('pemesanan', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $barang = Barang::find($request->id);
        $pembayaran = Pembayaran::all();
        return view('user.pemesanan.tambah_pemesanan', compact('barang', 'pembayaran'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pemesanan = $request->validate([
            'no_hp' => 'required',
            'alamat' => 'required',
            'metode_pembayaran' => 'required',
            'jumlah' => 'required',
        ], [
            'no_hp.required' => 'Nomor HP Harus Di Isi Tidak Boleh Kosong',
            'alamat.required' => 'Alamat Harus Di Isi Tidak Boleh Kosong',
            'metode_pembayaran.required' => 'Metode Pembayaran Harus Di Isi Tidak Boleh Kosong',
            'jumlah.required' => 'Jumlah Harus Di Isi Tidak Boleh Kosong',
        ]);

        $pemesanan = new Pemesanan;
        //Database    ||   Data Dari Nama Form
        $pemesanan->barangs_id = $request->barang_id;
        $pemesanan->users_id = auth()->user()->id;
        $pemesanan->phone_number_pms = $request->no_hp;
        $pemesanan->alamat_pms = $request->alamat;
        $pemesanan->tgl_pms = date('d-M-Y');
        $pemesanan->pembayarans_id = $request->metode_pembayaran;
        $pemesanan->jumlah_pms = $request->jumlah;
        $pemesanan->status_pms = "Belum Konfirmasi";

        $pemesanan->save();

        return redirect('/pesan-selesai');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pemesanan = Pemesanan::find($id);
        $barang = Barang::all();
        $pembayaran = Pembayaran::all();
        return view('admin.pemesanan.edit-pesan', compact('barang', 'pembayaran', 'pemesanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pemesanan = Pemesanan::find($id);
        //Database    ||   Data Dari Nama Form
        $pemesanan->status_pms = $request->status;

        if ($pemesanan) {
            Session::flash('status', 'success');
            Session::flash('message', 'Tambah Status Sudah Berhasil!');
        }


        $pemesanan->save();

        return redirect('/pesan-user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pemesanan = Pemesanan::find($id);
        $pemesanan->delete();

        return redirect('/pesan-user');
    }

    public function pesanuser()
    {
        $pemesanan = Pemesanan::where('users_id', Auth::user()->id)->orderBy('id', 'DESC')->paginate(5);
        return view('user.tampil_pesan', compact('pemesanan'));
    }

    public function selesai()
    {
        $pemesanan = Pemesanan::all();
        return view('user.pemesanan.selesai', compact('pemesanan'));
    }

}