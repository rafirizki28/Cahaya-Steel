@extends('layouts.master')

@section('judul', 'Tambah Bahan Baku')

@section('sabar')

    <body>

        <h1 class="text-center mb-4">Tambah Pembelian Bahan Baku</h1>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            {{-- Tempat form Bahan Baku --}}
                            <form action="{{ route('tambah-bahan_baku') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- Nama Bahan Baku --}}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                                    <input type="text" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        value="{{ old('nama') }}">
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
                                        value="{{ old('tanggal') }}">
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
                                        value="{{ old('jumlah') }}">
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
                                        value="{{ old('harga') }}">
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
                                    <input type="file" name="foto"
                                        class="form-control @error('foto') is-invalid @enderror">
                                    {{-- Pesan --}}
                                    @error('foto')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                                <a href="/bahan_baku" class="btn btn-danger">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
    </body>

@endsection

</html>
