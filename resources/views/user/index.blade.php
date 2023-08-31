@extends('layouts.master2')

@section('judul', 'Shop')

@section('shop')

    {{-- Start Card --}}
    <section class="py-5">

        <div class="container px-4 px-lg-5 mt-5">
            {{-- Pencarian --}}
            <div class="row align-items-center mb-3">
                <div class="col-auto ">
                    <form action="/" method="GET">
                        <div class="input-group">
                            <input type="search" name="search" class="form-control bg-light border-0 small"
                                placeholder="Pencarian" aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- Kembali --}}
                <div class="col-auto mt-3">
                    <a href="/" type="button" class="btn btn-danger mb-3">Kembali</a>
                </div>
            </div>

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-left">

                @foreach ($barang as $user)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Gambar Barang-->
                            <img class="card-img-top" src="{{ asset('fotobarang/' . $user->foto_brg) }}"
                                alt="{{ $user->nama_brg }}">
                            <!-- Detail Barang-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Nama Barang-->
                                    <h5 class="fw-bolder">{{ $user->nama_brg }}</h5>
                                    <!-- Deskripsi Barang-->
                                    <p class="card-text">
                                        {{ Str::limit(strip_tags($user->deskripsi_brg), 70) }}
                                        @if (strlen(strip_tags($user->deskripsi_brg)) > 70)
                                            ... <a href="/pesan/{{ $user->id }}" class="">Read More</a>
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <!-- Tombol Pesan-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a href="/pesan/{{ $user->id }}" class="btn btn-primary">
                                        <i class="bi bi-cart-plus-fill"></i>
                                        Pesan
                                    </a>
                                </div>
                            </div>
                            {{-- Format Update --}}
                            <div class="card-footer">
                                <small class="text-muted">{{ $user->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            {{ $barang->links() }}
        </div>
    </section>
    {{-- End Card --}}

@endsection
