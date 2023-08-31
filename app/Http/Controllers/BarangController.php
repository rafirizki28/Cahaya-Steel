<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $barang = Barang::where('nama_brg', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $barang = Barang::orderBy('id', 'desc')->paginate(5);
        }
        return view('admin.barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.barang.tambah-barang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $barang = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required',
        ], [
            'nama.required' => 'Nama Harus Di Isi Tidak Boleh Kosong',
            'deskripsi.required' => 'Deskripsi Harus Di Isi Tidak Boleh Kosong',
            'foto.required' => 'Foto Harus Di Isi Tidak Boleh Kosong'
        ]);

        $barang = new Barang;
        //Database    ||   Data Dari Nama Form
        $barang->nama_brg = $request->nama;
        $barang->deskripsi_brg = $request->deskripsi;
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotobarang/', $request->file('foto')->getClientOriginalName());
            $barang->foto_brg = $request->file('foto')->getClientOriginalName();
        }

        if ($barang) {
            Session::flash('status', 'success');
            Session::flash('message', 'Tambah Data Berhasil!');
        }



        $barang->save();

        return redirect('/barang');
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
        $barang = Barang::find($id);
        return view('admin.barang.edit-barang', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barang = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ], [
            'nama.required' => 'Nama Harus Di Isi Tidak Boleh Kosong',
            'deskripsi.required' => 'Deskripsi Harus Di Isi Tidak Boleh Kosong',
        ]);

        $barang = Barang::find($id);
        //Database    ||   Data Dari Nama Form
        $barang->nama_brg = $request->nama;
        $barang->deskripsi_brg = $request->deskripsi;
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotobarang/', $request->file('foto')->getClientOriginalName());
            $barang->foto_brg = $request->file('foto')->getClientOriginalName();
        }

        if ($barang) {
            Session::flash('status', 'success');
            Session::flash('message', 'Edit Data Berhasil!');
        }

        $barang->save();

        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return redirect('/barang');
    }

    //Dashboard {Admin}
    public function dashboard()
    {
        return view('admin.dashboard-admin');
    }

    public function barang(Request $request)
    {
        if ($request->has('search')) {
            $barang = Barang::where('nama_brg', 'LIKE', '%' . $request->search . '%')->paginate(20);
        } else {
            $barang = Barang::orderBy('id', 'desc')->paginate(20);
        }
        return view('user.index', compact('barang'));
    }

    public function about()
    {
        return view('user.about');
    }

    public function pesan($id)
    {
        $barang = Barang::where('id', $id)->first();
        return view('user.tampil_barang', compact('barang'));
    }
}