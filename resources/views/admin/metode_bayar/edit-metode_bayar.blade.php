@extends('layouts.master')

@section('judul', 'Edit Metode Pembayaran')

@section('sabar')

    <body>

        <h1 class="text-center mb-4">Edit Metode Pembayaran</h1>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            {{-- Tempat form barang --}}
                            <form action="/update-metode_bayar/{{ $pembayaran->id }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                {{-- Kode --}}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kode</label>
                                    <input type="text" name="kode"
                                        class="form-control @error('kode') is-invalid @enderror"
                                        value="{{ old('kode', $pembayaran->kd_pby) }}">
                                    {{-- Pesan --}}
                                    @error('kode')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Metode Pembayaran --}}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Metode Bayar</label>
                                    <input type="text" name="metode_bayar"
                                        class="form-control @error('metode_bayar') is-invalid @enderror"
                                        value="{{ old('metode_bayar', $pembayaran->metode_bayar_pby) }}">
                                    {{-- Pesan --}}
                                    @error('metode_bayar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Kirim</button>
                                <a href="/metode_bayar" class="btn btn-danger">Kembali</a>
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
