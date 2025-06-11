<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Pastikan ini di-import karena kita akan pakai Query Builder

class VgaController extends Controller
{
    public function index()
    {
        // Mengambil data dari tabel 'vga' dengan pagination
        $vga = DB::table('vga')->paginate(5); // Menampilkan 5 data per halaman

        // Mengirim data VGA ke view index2vga
        return view('index2vga', ['vga' => $vga]);
    }

    // Method untuk menampilkan view form tambah VGA
    public function tambah()
    {
        // Memanggil view tambahvga
        return view('tambahvga');
    }

    // Method untuk insert data ke table VGA
    public function store(Request $request)
    {
        // Validasi input (sangat disarankan tetap ada)
        $request->validate([
            'merkVGA' => 'required|string|max:25',
            'hargaVGA' => 'required|integer|min:0',
            'tersedia' => 'required|boolean',
            'berat' => 'required|numeric|min:0',
        ]);

        // Insert data ke tabel 'vga' menggunakan Query Builder
        DB::table('vga')->insert([
            'merkVGA' => $request->merkVGA,
            'hargaVGA' => $request->hargaVGA,
            'tersedia' => $request->tersedia, // Laravel akan mengonversi boolean ke 0/1 untuk DB
            'berat' => $request->berat
        ]);

        // Alihkan halaman ke halaman VGA dengan pesan sukses
        return redirect('/vga')->with('success', 'Data VGA berhasil ditambahkan!');
    }

    // Method untuk edit data VGA
    public function edit($id)
    {
        // Mengambil data VGA berdasarkan ID yang dipilih menggunakan Query Builder
        $vga = DB::table('vga')->where('ID', $id)->get(); // 'ID' adalah primary key tabel VGA

        // Passing data VGA yang didapat ke view editvga.blade.php
        // Karena get() mengembalikan koleksi, kita ambil elemen pertamanya ([0])
        // agar di view bisa langsung `$vga->properti` tanpa foreach
        return view('editvga', ['vga' => $vga[0]]);
    }

    // Update data VGA
    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'merkVGA' => 'required|string|max:25',
            'hargaVGA' => 'required|integer|min:0',
            'tersedia' => 'required|boolean',
            'berat' => 'required|numeric|min:0',
        ]);

        // Update data VGA menggunakan Query Builder
        DB::table('vga')->where('ID', $request->ID)->update([ // 'ID' adalah primary key dari form hidden
            'merkVGA' => $request->merkVGA,
            'hargaVGA' => $request->hargaVGA,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        // Alihkan halaman ke halaman VGA dengan pesan sukses
        return redirect('/vga')->with('success', 'Data VGA berhasil diperbarui!');
    }

    // Method untuk hapus data VGA
    public function hapus($id)
    {
        // Menghapus data VGA berdasarkan ID yang dipilih menggunakan Query Builder
        DB::table('vga')->where('ID', $id)->delete(); // 'ID' adalah primary key tabel VGA

        // Alihkan halaman ke halaman VGA dengan pesan sukses
        return redirect('/vga')->with('success', 'Data VGA berhasil dihapus!');
    }

    // Mencari data VGA
    public function cari(Request $request)
    {
        // Menangkap data pencarian
        $cari = $request->cari;

        // Mengambil data dari tabel 'vga' sesuai pencarian data menggunakan Query Builder
        $vga = DB::table('vga')
            ->where('merkVGA', 'like', "%" . $cari . "%")
            ->orWhere('ID', 'like', "%" . $cari . "%") // Tambahkan pencarian berdasarkan ID juga
            ->paginate(5); // Pagination untuk hasil pencarian

        // Mengirim data VGA ke view index2vga
        return view('index2vga', ['vga' => $vga, 'cari' => $cari]);
    }
}
