@extends('layouts.master')

@section('judul', 'Edit Barang')

@section('sabar')

    <body>

        <h1 class="text-center mb-4">Edit Barang</h1>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            {{-- Tempat form barang --}}
                            <form action="/update-barang/{{ $barang->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- Nama Barang --}}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                                    <input type="text" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        value="{{ old('nama', $barang->nama_brg) }}">

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
                                        value="{{ old('deskripsi', $barang->deskripsi_brg) }}">
                                    <trix-editor input="deskripsi">
                                    </trix-editor>
                                </div>
                                {{-- Foto Barang --}}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Masukan Foto</label>
                                    <input type="file" name="foto" class="form-control "
                                        value="{{ $barang->foto_brg }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                                <a href="/barang" class="btn btn-danger">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

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
