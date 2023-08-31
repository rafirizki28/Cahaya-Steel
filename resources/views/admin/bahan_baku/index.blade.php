@extends('layouts.master')

@section('judul', 'Table Data Bahan Baku')

@section('sabar')
    <h1 class="text-center mb-4">Data Pembelian Bahan Baku</h1>
    <div class="container">
        {{-- Tombol Tambah Data Admin --}}
        <a href="{{ route('tambah-bahan_baku') }}" type="button" class="btn btn-success mb-3">Tambah +</a>

        {{-- Pencarian --}}
        <div class="row g-3 align-items-center mb-3">
            <div class="col-auto ">
                <form action="/bahan_baku" method="GET">
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
                <a href="/bahan_baku" type="button" class="btn btn-danger mb-3">Kembali</a>
            </div>

            {{-- Export PDF --}}
            <div class="col-auto mt-3">
                <a href="/exportpdf-bahanbaku" type="button" class="btn btn-info mb-3">Export PDF</a>
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
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        // Urutan nomor id
                        $no = 1;
                        
                    @endphp
                    @foreach ($data as $index => $admin2)
                        <tr class="text-center">
                            <th scope="row">{{ $index + $data->firstItem() }}</th>
                            <td>{{ $admin2->nama_pbb }}</td>
                            <td>
                                <img src="{{ asset('fotobahan_baku/' . $admin2->foto_pbb) }}" alt=""
                                    style="width: 50px">
                            </td>
                            <td>{{ date_format(date_create($admin2->tanggal_pbb), 'd-M-Y') }}</td>
                            <td>{{ $admin2->jumlah_pbb }}</td>
                            <td>{{ $admin2->formatRupiah('harga_pbb') }}</td>
                            <td class="col-2">
                                {{-- Tombol Image Admin --}}
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#modal-image{{ $admin2->id }}">
                                    <i class="fa fa-image" aria-hidden="true"></i>
                                </button>
                                {{-- Start Modal --}}
                                <div class="modal fade" id="modal-image{{ $admin2->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Gambar</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body table-responsive">
                                                <img src="{{ asset('fotobahan_baku/' . $admin2->foto_pbb) }}" alt=""
                                                    style="width: 100%">
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
                                    data-target="#modal-default{{ $admin2->id }}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                                {{-- Start Modal --}}
                                <div class="modal fade" id="modal-default{{ $admin2->id }}" tabindex="-1"
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
                                                            <th>{{ $admin2->nama_pbb }}</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Tanggal</th>
                                                            <th>{{ date_format(date_create($admin2->tanggal_pbb), 'd-M-Y') }}</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Jumlah</th>
                                                            <th>{{ $admin2->jumlah_pbb }}</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Harga</th>
                                                            <th>{{ $admin2->formatRupiah('harga_pbb') }}</th>
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
                                
                                {{-- Tombol Edit Admin2 --}}
                                <a href="tampil-bahan_baku/{{ $admin2->id }}" class="btn btn-primary"><i
                                        class="fa fa-edit" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.slim.js"
        integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@endsection
