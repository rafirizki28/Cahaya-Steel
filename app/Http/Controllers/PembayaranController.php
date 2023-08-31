<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembayaran = Pembayaran::orderBy('id', 'desc')->get();
        return view('admin.metode_bayar.index', compact('pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pembayaran = Pembayaran::all();
        return view('admin.metode_bayar.tambah-metode_bayar', compact('pembayaran'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pembayaran = $request->validate([
            'kode' => 'required',
            'metode_bayar' => 'required',
        ], [
            'kode.required' => 'Kode Harus Di Isi Tidak Boleh Kosong',
            'metode_bayar.required' => 'Metode Pembayaran Harus Di Isi Tidak Boleh Kosong',
        ]);
        
        $pembayaran = new Pembayaran;
        //Database    ||   Data Dari Nama Form
        $pembayaran->kd_pby = $request->kode;
        $pembayaran->metode_bayar_pby = $request->metode_bayar;

        if ($pembayaran) {
            Session::flash('status', 'success');
            Session::flash('message', 'Tambah Data Berhasil!');
        }

        $pembayaran->save();

        return redirect('/metode_bayar');
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
        $pembayaran = Pembayaran::find($id);
        return view('admin.metode_bayar.edit-metode_bayar', compact('pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pembayaran = $request->validate([
            'kode' => 'required',
            'metode_bayar' => 'required',
        ], [
            'kode.required' => 'Kode Harus Di Isi Tidak Boleh Kosong',
            'metode_bayar.required' => 'Metode Pembayaran Harus Di Isi Tidak Boleh Kosong',
        ]);
        
        $pembayaran = Pembayaran::find($id);
        //Database    ||   Data Dari Nama Form
        $pembayaran->kd_pby = $request->kode;
        $pembayaran->metode_bayar_pby = $request->metode_bayar;

        if ($pembayaran) {
            Session::flash('status', 'success');
            Session::flash('message', 'Edit Data Berhasil!');
        }

        $pembayaran->save();

        return redirect('/metode_bayar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pembayaran = Pembayaran::find($id);
        $pembayaran->delete();

        return redirect('/metode_bayar');
    }
}
