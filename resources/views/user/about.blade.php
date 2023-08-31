@extends('layouts.master2')

@section('judul', 'About')

@section('shop')


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
        <link rel="stylesheet" href="{{ asset('about.css') }}">
    </head>

    <body>

        <section class=" py-5">
            <div class="container">

                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="{{ asset('image/cahaya steel.png') }}" class="img-fluid rounded- img" alt=""
                            width="300px">
                    </div>
                    <div class="col-lg-6 content d-flex flex-column justify-content-center about">
                        <h2 class="text-center">About</h2>
                        <p class="fst-italic py-1">
                            Bengkel Las "Cahaya Steel" adalah sebuah usaha kecil menengah yang berfokus pada penyediaan jasa
                            layanan las profesional. Didirikan pada tahun 2005, bengkel las ini telah menjadi salah satu
                            pilihan
                            utama di kota ini untuk berbagai kebutuhan penyambungan logam. Dengan tim ahli yang
                            berpengalaman
                            dan peralatan modern, Bengkel Las "Cahaya Steel" mampu melayani berbagai industri dan kebutuhan
                            pelanggan.
                        </p>
                    </div>
                </div>


            </div>
        </section><!-- End About Section -->

    </body>

    </html>
@endsection
