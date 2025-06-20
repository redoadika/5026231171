<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link ;
use App\Http\Controllers\Pegawai2Controller ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\VgaController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\NilaiController;

// import java.io :
// System.out.println() :

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Link::class,'helloword'] );

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('index', function () {
	return view('index');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

Route::get('latihanlayout', function () {
	return view('latihanlayout');
});

Route::get('template1', function () {
	return view('template1');
});

Route::get('tugaslinktree', function () {
	return view('tugaslinktree');
});

Route::get('dosen', [Link::class,'index'] );

//Route::get('/pegawai/{nama}', [PegawaiController::class,'index'] );

Route::get('/formulir', [Pegawai2Controller::class,'formulir'] );
Route::post('/formulir/proses', [Pegawai2Controller::class,'proses'] );

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud pegawai
Route::get('/pegawai',[PegawaiController::class, 'index']);
Route::get('/pegawai/tambah',[PegawaiController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiController::class, 'cari']);

//crud vga
Route::get('/vga', [VgaController::class, 'index']);            // Menampilkan daftar VGA
Route::get('/vga/tambah', [VgaController::class, 'tambah']);    // Menampilkan form tambah
Route::post('/vga/store', [VgaController::class, 'store']);    // Menyimpan data baru
Route::get('/vga/edit/{id}', [VgaController::class, 'edit']);  // Menampilkan form edit
Route::post('/vga/update', [VgaController::class, 'update']);  // Memperbarui data
Route::get('/vga/hapus/{id}', [VgaController::class, 'hapus']); // Menghapus data
Route::get('/vga/cari', [VgaController::class, 'cari']);       // Mencari data VGA

//crud karyawan
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/hapus/{kodepegawai}', [KaryawanController::class, 'hapus']);

//crud keranjangbelanja
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/tambah', [KeranjangBelanjaController::class, 'tambah']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaController::class, 'store']);
Route::get('/keranjangbelanja/hapus/{id}', [KeranjangBelanjaController::class, 'hapus']);

//crud nilai
Route::get('/eas', [NilaiController::class, 'index']);
Route::get('/eas/tambah', [NilaiController::class, 'tambah']);
Route::post('/eas/store', [NilaiController::class, 'store']);
Route::get('/eas/hapus/{id}', [NilaiController::class, 'hapus']);
