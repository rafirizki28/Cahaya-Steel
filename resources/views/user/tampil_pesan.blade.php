@extends('layouts.master2')

@section('judul', 'Table Data Barang')

@section('shop')
    <div class="py-3">
        <h1 class="text-center mb-3">History</h1>
        <div class="container">
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
                    <li class="breadcrumb-item active" aria-current="page">History</li>
                </ol>
            </nav>

            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Tanggal Di Pesan</th>
                        <th scope="col">Metode Bayar</th>
                        <th scope="col">Jumlah Di Pesan</th>
                        <th scope="col">Status</th>
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
                            <td>{{ $admin4->barangs->nama_brg }}</td>
                            <td>{{ $admin4->tgl_pms }}</td>
                            <td>{{ $admin4->pembayarans->metode_bayar_pby }}</td>
                            <td>{{ $admin4->jumlah_pms }}</td>
                            <td>{{ $admin4->status_pms }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $pemesanan->links() }}
        </div>
    </div>

@endsection
