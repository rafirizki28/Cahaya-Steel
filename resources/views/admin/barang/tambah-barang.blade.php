@extends('layouts.master')

@section('judul', 'Tambah Barang')

@section('sabar')

    <body>

        <h1 class="text-center mb-4">Tambah Barang</h1>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            {{-- Tempat form barang --}}
                            <form action="{{ route('tambah-barang') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- Nama Barang --}}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                                    <input type="text" name="nama"
                                        class="form-control  @error('nama') is-invalid @enderror"
                                        value="{{ old('nama') }}">
                                    {{-- Pesan --}}
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- Deskripsi Barang --}}
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1">Deskripsi Barang</label>
                                    {{-- Pesan --}}
                                    @error('deskripsi')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <input id="deskripsi" type="hidden" name="deskripsi"
                                        class="form-control  @error('deskripsi') is-invalid @enderror"
                                        value="{{ old('deskripsi') }}">
                                    <trix-editor input="deskripsi"></trix-editor>
                                </div>
                                {{-- Foto Barang --}}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Masukan Foto</label>
                                    <img class="img-preview img-fluid">
                                    <input type="file" name="foto" id="foto"
                                        class="form-control @error('foto') is-invalid @enderror">
                                    {{-- Pesan --}}
                                    @error('foto')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Kirim</button>
                                <a href="/barang" class="btn btn-danger">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
    @push('css')
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
        <style>
            trix-toolbar [data-trix-button-group="file-tools"] {
                display: none;
            }
        </style>
    @endpush

    @push('js')
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
        <script>
            document.addEventListener('trix-file-accept', function(e) {
                e.preventDefault();
            })
        </script>
    @endpush
