<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Pembelianbahanbaku;
use Illuminate\Support\Facades\Session;

class PembelianbahanbakuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = Pembelianbahanbaku::where('nama_pbb', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Pembelianbahanbaku::orderBy('id', 'desc')->paginate(5);
        }
        return view('admin.bahan_baku.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.bahan_baku.tambah-bahan_baku');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'foto' => 'required',
        ], [
            'nama.required' => 'Nama Harus Di Isi Tidak Boleh Kosong',
            'tanggal.required' => 'Tanggal Harus Di Isi Tidak Boleh Kosong',
            'jumlah.required' => 'Jumlah Harus Di Isi Tidak Boleh Kosong',
            'harga.required' => 'Harga Harus Di Isi Tidak Boleh Kosong',
            'foto.required' => 'Foto Harus Di Isi Tidak Boleh Kosong',
        ]);

        $data = new Pembelianbahanbaku;
        //Database    ||   Data Dari Nama Form
        $data->nama_pbb = $request->nama;
        $data->tanggal_pbb = $request->tanggal;
        $data->jumlah_pbb = $request->jumlah;
        $data->harga_pbb = $request->harga;
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotobahan_baku/', $request->file('foto')->getClientOriginalName());
            $data->foto_pbb = $request->file('foto')->getClientOriginalName();
        }

        if ($data) {
            Session::flash('status', 'success');
            Session::flash('message', 'Tambah Data Berhasil!');
        }

        $data->save();

        return redirect('/bahan_baku');
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
        $data = Pembelianbahanbaku::find($id);
        return view('admin.bahan_baku.edit-bahan_baku', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data= $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
        ], [
            'nama.required' => 'Nama Harus Di Isi Tidak Boleh Kosong',
            'tanggal.required' => 'Tanggal Harus Di Isi Tidak Boleh Kosong',
            'jumlah.required' => 'Jumlah Harus Di Isi Tidak Boleh Kosong',
            'harga.required' => 'Harga Harus Di Isi Tidak Boleh Kosong',
        ]);

        $data = Pembelianbahanbaku::find($id);
        //Database    ||   Data Dari Nama Form
        $data->nama_pbb = $request->nama;
        $data->tanggal_pbb = $request->tanggal;
        $data->jumlah_pbb = $request->jumlah;
        $data->harga_pbb = $request->harga;
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotobahan_baku/', $request->file('foto')->getClientOriginalName());
            $data->foto_pbb = $request->file('foto')->getClientOriginalName();
        }

        if ($data) {
            Session::flash('status', 'success');
            Session::flash('message', 'Edit Data Berhasil!');
        }

        $data->save();

        return redirect('/bahan_baku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Pembelianbahanbaku::find($id);
        $data->delete();

        return redirect('/bahan_baku');
    }

    public function exportpdf()
    {
        $data = Pembelianbahanbaku::all();

        view()->share('data', $data);
        $pdf = PDF::loadView('admin.bahan_baku.databahanbaku-pdf');
        return $pdf->download('Data Pembelian Bahan Baku.pdf');
    }
}