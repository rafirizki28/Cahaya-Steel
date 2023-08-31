@extends('layouts.master2')

@section('judul', 'Selesai')

@section('shop')

    <section class="py-5">
        <div class="container-fluid">
            <div class="container ">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('gifs/correct.gif') }}" class="card-img-fluid" alt="..."
                                style="width: 30%;">
                            <div class="card-body">
                                <p class="card-text">
                                    Pemesanan anda sudah saya terima<br> 
                                    Mohon di tunggun sebentar<br>
                                    Kami akan hubungi anda.<br>
                                </p>
                            </div>
                            {{-- Tombol --}}
                        <a href="{{ route('home') }}" type="submit" class="btn btn-danger"> Kembali </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
