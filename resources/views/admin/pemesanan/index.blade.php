@extends('layouts.master')

@section('judul', 'Table Data Pemesanan')

@section('sabar')
    <h1 class="text-center mb-4">Data Pemesanan</h1>
    <div class="container">

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
                        <th scope="col">Nama Barang</th>
                        <th scope="col">No Telepon/WA</th>
                        <th scope="col">Tanggal Di Pesan</th>
                        <th scope="col">Metode Bayar</th>
                        <th scope="col">Jumlah Di Pesan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        // Urutan nomor id
                        $no = 1;
                        
                    @endphp
                    @foreach ($pemesanan as $admin4)
                        <tr class="text-center">
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $admin4->users->name }}</td>
                            <td>{{ $admin4->barangs->nama_brg }}</td>
                            <td>{{ $admin4->phone_number_pms }}</td>
                            <td>{{ $admin4->tgl_pms }}</td>
                            <td>{{ $admin4->pembayarans->metode_bayar_pby }}</td>
                            <td>{{ $admin4->jumlah_pms }}</td>
                            <td>{{ $admin4->status_pms }}</td>
                            <td class="col-2">
                                {{-- Tombol Detail Admin --}}
                                <button type="button" class="btn btn-info" data-toggle="modal"
                                    data-target="#modal-default{{ $admin4->id }}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                                {{-- Start Modal --}}
                                <div class="modal fade" id="modal-default{{ $admin4->id }}" tabindex="-1"
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
                                                            <th>{{ $admin4->users->name }}</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Nama Barang</th>
                                                            <th>{{ $admin4->barangs->nama_brg }}</th>
                                                        </tr>
                                                        <tr>
                                                            <th>No Telepon/WA</th>
                                                            <th>{{ $admin4->phone_number_pms }}</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Tanggal Di Pesan</th>
                                                            <th>{{ $admin4->tgl_pms }}</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Metode Bayar</th>
                                                            <th>{{ $admin4->pembayarans->metode_bayar_pby }}</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Jumlah Di Pesan</th>
                                                            <th>{{ $admin4->jumlah_pms }}</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Status</th>
                                                            <th>{{ $admin4->status_pms }}</th>
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
                                <a href="/tampil-pesan.user/{{ $admin4->id }}" class="btn btn-primary"><i
                                        class="fa fa-edit" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $pemesanan->links() }}
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.slim.js"
        integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@endsection
