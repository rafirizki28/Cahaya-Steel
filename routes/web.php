<?php


use App\Models\Pembayaran;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController; 
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PembelianbahanbakuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/p', function () {
//     return view('layouts.master(salin)');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//---------------------------------------------------------------------------------------------------------->

//{User}
//View-user (Barang)
Route::get('/', [BarangController::class, 'barang'])->name('home');

//About (Barang)
Route::get('/about', [BarangController::class, 'about'])->name('about');

//View-user 2 (Barang)
Route::get('/pesan/{id}', [BarangController::class, 'pesan'])->name('pesan');

// View-user (History)
Route::get('/pesan-user-barang', [PemesananController::class, 'pesanuser'])->name('pesan-user')->middleware('auth');

// Form Pemesanan {User}
Route::get('/pemesanan/{id}', [PemesananController::class, 'create'])->name('pemesanan')->middleware('auth');
Route::post('/tambah-pemesanan', [PemesananController::class, 'store'])->name('tambah-pemesanan');

//View (Pemesanan Selesai)
Route::get('/pesan-selesai', [PemesananController::class, 'selesai'])->name('pesan-selesai');
//---------------------------------------------------------------------------------------------------------->

//{Admin}
//Dashboard (Admin)
Route::get('/dashboard', [BarangController::class, 'dashboard'])->name('dashboard')->middleware('is_admin');

//View (Barang)
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
//Create (Barang)
Route::get('/tambah-barang', [BarangController::class, 'create'])->name('tambah-barang');
Route::post('/tambah-barang', [BarangController::class, 'store'])->name('tambah-barang');
//Update (Barang)
Route::get('/tampil-barang/{id}', [BarangController::class, 'edit'])->name('edit-barang');
Route::post('/update-barang/{id}', [BarangController::class, 'update'])->name('update-barang');
//Delete (Barang)
Route::get('/hapus-barang/{id}', [BarangController::class, 'destroy'])->name('delete-barang');

//View (Bahan Baku)
Route::get('/bahan_baku', [PembelianbahanbakuController::class, 'index'])->name('bahan_baku');
//Create (Bahan Baku)
Route::get('/tambah-bahan_baku', [PembelianbahanbakuController::class, 'create'])->name('tambah-bahan_baku');
Route::post('/tambah-bahan_baku', [PembelianbahanbakuController::class, 'store'])->name('tambah-bahan_baku');
//Update (Bahan Baku)
Route::get('/tampil-bahan_baku/{id}', [PembelianbahanbakuController::class, 'edit'])->name('edit-bahan_baku');
Route::post('/update-bahan_baku/{id}', [PembelianbahanbakuController::class, 'update'])->name('update-bahan_baku');
//Delete (Bahan Baku)
Route::get('/hapus-bahan_baku/{id}', [PembelianbahanbakuController::class, 'destroy'])->name('delete-bahan_baku');
//Export PDF (Bahan Baku)
Route::get('/exportpdf-bahanbaku', [PembelianbahanbakuController::class, 'exportpdf'])->name('exportpdf-barang');

//View (Metode Pembayaran)
Route::get('/metode_bayar', [PembayaranController::class, 'index'])->name('metode_bayar');
//Create (Metode Pembayaran)
Route::get('/tambah-metode_bayar', [PembayaranController::class, 'create'])->name('tambah-metode_bayar');
Route::post('/tambah-metode_bayar', [PembayaranController::class, 'store'])->name('tambah-metode_bayar');
//Update (Metode Pembayaran)
Route::get('/tampil-metode_bayar/{id}', [PembayaranController::class, 'edit'])->name('edit-metode_bayar');
Route::post('/update-metode_bayar/{id}', [PembayaranController::class, 'update'])->name('update-metode_bayar');
//Delete (Metode Pembayaran)
Route::get('/hapus-metode_bayar/{id}', [PembayaranController::class, 'destroy'])->name('delete-metode_bayar');

//View (Pemesanan)
Route::get('/pesan-user', [PemesananController::class, 'index'])->name('pesan-user');
//Update (Pemesanan)
Route::get('/tampil-pesan.user/{id}', [PemesananController::class, 'edit'])->name('edit-pesan.user');
Route::post('/update-pesan.user/{id}', [PemesananController::class, 'update'])->name('update-pesan.user');
//Delete (Pemesanan)
Route::get('/hapus-pesan.user/{id}', [PemesananController::class, 'destroy'])->name('delete-pesan.user');
//---------------------------------------------------------------------------------------------------------->