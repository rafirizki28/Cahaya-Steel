@extends('layouts.master')

@section('judul', 'Table Data Metode Pembayaran')

@section('sabar')
    <h1 class="text-center mb-4">Data Metode Pembayaran</h1>
    <div class="container">
        {{-- Tombol Tambah Data Admin --}}
        <a href="{{ route('tambah-metode_bayar') }}" type="button" class="btn btn-success mb-3">Tambah +</a>

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
                        <th scope="col">Kode</th>
                        <th scope="col">Metode Pembayaran</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        // Urutan nomor id
                        $no = 1;
                        
                    @endphp
                    @foreach ($pembayaran as $admin3)
                    
                        <tr class="text-center">
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $admin3->kd_pby }}</td>
                            <td class="text-left col-6">{{ $admin3->metode_bayar_pby }}</td>
                            <td class="col-2">
                                {{-- Tombol Detail Admin --}}
                                <button type="button" class="btn btn-info" data-toggle="modal"
                                    data-target="#modal-default{{ $admin3->id }}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                                {{-- Start Modal --}}
                                <div class="modal fade" id="modal-default{{ $admin3->id }}" tabindex="-1"
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
                                                            <th>Kode</th>
                                                            <th>{{ $admin3->kd_pby }}</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Metode Pembayaran</th>
                                                            <th>{{ $admin3->metode_bayar_pby }}</th>
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
                                <a href="/tampil-metode_bayar/{{ $admin3->id }}" class="btn btn-primary"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.slim.js"
        integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@endsection
