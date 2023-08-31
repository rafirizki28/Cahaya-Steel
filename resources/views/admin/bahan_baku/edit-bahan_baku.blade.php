@extends('layouts.master')

@section('judul', 'Edit Bahan Baku')

@section('sabar')

    <body>

        <h1 class="text-center mb-4">Edit Pembelian Bahan Baku</h1>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            {{-- Tempat form Bahan Baku --}}
                            <form action="/update-bahan_baku/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- Nama Bahan Baku --}}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                                    <input type="text" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        value="{{ old('nama', $data->nama_pbb) }}">
                                    {{-- Pesan --}}
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Tanggal Bahan Baku --}}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                    <input type="date" name="tanggal"
                                        class="form-control @error('tanggal') is-invalid @enderror"
                                        value="{{ old('tanggal', $data->tanggal_pbb) }}">
                                    {{-- Pesan --}}
                                    @error('tanggal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Jumlah Bahan Baku --}}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Jumlah</label>
                                    <input type="number" name="jumlah"
                                        class="form-control @error('jumlah') is-invalid @enderror"
                                        value="{{ old('jumlah', $data->jumlah_pbb) }}">
                                    {{-- Pesan --}}
                                    @error('jumlah')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Harga Bahan Baku --}}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Harga</label>
                                    <input type="text" name="harga"
                                        class="form-control @error('harga') is-invalid @enderror"
                                        value="{{ old('harga', $data->harga_pbb) }}">
                                    {{-- Pesan --}}
                                    @error('harga')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Foto Bahan Baku --}}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Masukan Foto</label>
                                    <input type="file" name="foto" class="form-control" value="{{ $data->foto_pbb }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                                <a href="/bahan_baku" class="btn btn-danger">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

@endsection
