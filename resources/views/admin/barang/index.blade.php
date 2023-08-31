@extends('layouts.master')

@section('judul', 'Table Data Barang')

@section('sabar')
    <h1 class="text-center mb-4">Data Barang</h1>
    <div class="container">
        {{-- Tombol Tambah Data Admin --}}
        <a href="{{ route('tambah-barang') }}" type="button" class="btn btn-success mb-3">Tambah +</a>

        {{-- Pencarian --}}
        <div class="row g-3 align-items-center mb-3">
            <div class="col-auto ">
                <form action="/barang" method="GET">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control bg-light border-0 small"
                            placeholder="Pencarian" aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

            </div>

            {{-- Kembali --}}
            <div class="col-auto mt-3">
                <a href="/barang" type="button" class="btn btn-danger mb-3">Kembali</a>
            </div>
        </div>

        <div class="row">
            {{-- Peringatan --}}
            @if (Session::has('status'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif

            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        // Urutan nomor id
                        $no = 1;
                        
                    @endphp
                    @foreach ($barang as $index => $admin)
                        <tr class="text-center">
                            <th scope="row">{{ $index + $barang->firstItem() }}</th>
                            <td>{{ $admin->nama_brg }}</td>
                            <td>
                                <img src="{{ asset('fotobarang/' . $admin->foto_brg) }}" alt="" style="width: 50px">
                            </td>
                            <td class="text-left">{!! Str::limit($admin->deskripsi_brg, 100) !!}</td>
                            <td class="col-2">
                                {{-- Tombol Image Admin --}}
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#modal-image{{ $admin->id }}">
                                    <i class="fa fa-image" aria-hidden="true"></i>
                                </button>
                                {{-- Start Modal --}}
                                <div class="modal fade" id="modal-image{{ $admin->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Gambar</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body table-responsive">
                                                <img src="{{ asset('fotobarang/' . $admin->foto_brg) }}" alt="" style="width: 100%">
                                            </div>
                                            <div class="modal-footer justify-content-end">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->

                                {{-- Tombol Detail Admin --}}
                                <button type="button" class="btn btn-info" data-toggle="modal"
                                    data-target="#modal-default{{ $admin->id }}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                                {{-- Start Modal --}}
                                <div class="modal fade" id="modal-default{{ $admin->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body table-responsive">
                                                <table class="table table-bordered no-margin">
                                                    <tbody>
                                                        <tr>
                                                            <th>Nama</th>
                                                            <th>{{ $admin->nama_brg }}</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Deskripsi</th>
                                                            <th>{!! $admin->deskripsi_brg !!}</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer justify-content-end">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->

                                {{-- Tombol Edit Admin --}}
                                <a href="/tampil-barang/{{ $admin->id }}" class="btn btn-primary"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $barang->links() }}
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.slim.js"
        integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@endsection
