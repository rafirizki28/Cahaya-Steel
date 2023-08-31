@extends('layouts.master2')

@section('judul', 'Barang')

@section('shop')

    {{-- Start Card --}}
    <section class="py-2">
        <div class="container px-4 px-lg-5 my-5">
            {{-- Kembali --}}
            <div class="col-md-12">
                <a href="{{ route('home') }}" class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                    Kembali</a>
            </div>
            {{-- Breadcrumb --}}
            <nav class="col-md-12 mt-2"
                style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $barang->nama_brg }}</li>
                </ol>
            </nav>
            <!-- Detail Barang-->
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                        src="{{ asset('fotobarang/' . $barang->foto_brg) }}" alt="{{ $barang->nama_brg }}"></div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{{ $barang->nama_brg }}</h1>
                    <div class="fs-5 mb-5">
                    </div>
                    <p class="lead">{!! $barang->deskripsi_brg !!}</p>
                    <div class="d-flex">
                        <a href="/pemesanan/{{ $barang->id }}" class="btn btn-primary flex-shrink-0" type="button">
                            <i class="bi bi-cart-plus-fill"></i>
                            Pesan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Card --}}

@endsection
