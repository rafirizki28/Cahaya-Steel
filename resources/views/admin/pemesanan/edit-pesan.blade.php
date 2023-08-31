@extends('layouts.master')

@section('judul', 'Status Pemesanan')

@section('sabar')

    <body>

        <h1 class="text-center mb-4">Status Pemesanan</h1>
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            {{-- Tempat form Pemesanan --}}
                            <form method="POST" action="/update-pesan.user/{{ $pemesanan->id}}">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Status</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status"
                                            id="flexRadioDefault1" value="Belum Konfirmasi">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Belum Konfirmasi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status"
                                            id="flexRadioDefault2" value="Terima Konfirmasi">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Terima Konfirmasi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status"
                                            id="flexRadioDefault2" value="Sedang Dikerjakan">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Sedang Dikerjakan
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status"
                                            id="flexRadioDefault2" value="Pemasangan">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Pemasangan
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status"
                                            id="flexRadioDefault2" value="Selesai">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Selesai
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                                <a href="/pesan-user" class="btn btn-danger">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

@endsection
