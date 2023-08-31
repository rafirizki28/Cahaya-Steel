@extends('layouts.master2')

@section('judul', 'Pemesanan')

@section('shop')

    <section class="py-5">
        <div class="container-fluid">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/tambah-pemesanan">
                            @csrf
                            {{-- Table Barang --}}
                            <fieldset disabled>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Nama Barang</label>
                                    <input type="text" id="disabledTextInput" class="form-control"
                                        value="{{ $barang->nama_brg }}" name="nama_brg" placeholder="Disabled input">
                                </div>
                            </fieldset>
                            <input type="text" class="form-control" hidden name="barang_id" value="{{ $barang->id }}"
                                id="exampleInputEmail1">

                            {{-- Table User --}}
                            <fieldset disabled>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Nama</label>
                                    <input type="text" id="disabledTextInput" class="form-control" name="nama"
                                        value="{{ auth()->user()->name }}" placeholder="Disabled input">
                                </div>
                            </fieldset>
                            {{-- ------------------------------------------------------------------------- --}}
                            {{-- Phone Number / Whatsapp --}}
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Phone Number / Whatsapp</label>
                                <input type="number" class="form-control @error('no_hp') is-invalid @enderror"
                                    value="{{ old('no_hp') }}" name="no_hp">
                                {{-- Pesan --}}
                                @error('no_hp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Alamat --}}
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                    value="{{ old('alamat') }}" name="alamat">
                                {{-- Pesan --}}
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- ------------------------------------------------------------------------- --}}
                            {{-- Table Pembayaran --}}
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Metode Pembayaran</label>
                                <select class="form-control" name="metode_pembayaran" required autofocus>
                                    <option selected > {{-- Kosong --}} </option>
                                    @foreach ($pembayaran as $data)
                                        @if (old('metode_pembayaran') == $data->id)
                                            <option value="{{ $data->id }}" selected>{{ $data->kd_pby }} -
                                                {{ $data->metode_bayar_pby }}</option>
                                        @else
                                            <option value="{{ $data->id }}">{{ $data->kd_pby }} -
                                                {{ $data->metode_bayar_pby }}</option>
                                        @endif
                                        
                                    @endforeach
                                </select>
                            </div>

                            {{-- ------------------------------------------------------------------------- --}}
                            {{-- Jumlah Pemesanan --}}
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jumlah Pemesanan</label>
                                <input type="number" class="form-control @error('jumlah') is-invalid @enderror"
                                    value="{{ old('jumlah') }}" name="jumlah">
                                {{-- Pesan --}}
                                @error('jumlah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Tombol --}}
                            <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"
                                    aria-hidden="true"></i> Pesan</button>
                            <a href="{{ route('home') }}" type="submit" class="btn btn-danger"> Kembali </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
