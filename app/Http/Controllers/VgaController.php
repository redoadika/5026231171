<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Pastikan ini ada
// use App\Models\VGA; // Ini tidak diperlukan jika semua pakai DB::table()

class VgaController extends Controller
{
    public function index()
    {
        // mengambil data dari table VGA dengan pagination
        $vga = DB::table('vga')->paginate(5); // 5 data per halaman

        // mengirim data VGA ke view index2vga
        return view('index2vga', ['vga' => $vga]);
    }

    // method untuk menampilkan view form tambah VGA
    public function tambah()
    {
        // memanggil view vga_tambah
        return view('tambahvga');
    }

    // method untuk insert data ke table VGA
    public function store(Request $request)
    {
        // Validasi input (penting walaupun pakai DB::table)
        $request->validate([
            'merkVGA' => 'required|string|max:25',
            'hargaVGA' => 'required|integer|min:0',
            'tersedia' => 'required|boolean', // Pastikan input ini mengirim 0 atau 1
            'berat' => 'required|numeric|min:0',
        ]);

        // insert data ke table VGA
        DB::table('vga')->insert([
            'merkVGA' => $request->merkVGA,
            'hargaVGA' => $request->hargaVGA,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman VGA
        return redirect('/vga')->with('success', 'Data VGA berhasil ditambahkan!');
    }

    // method untuk edit data VGA
    public function edit($id)
    {
        // mengambil data VGA berdasarkan id yang dipilih
        $vga = DB::table('vga')->where('ID', $id)->get(); // Kolom ID bukan id
        // passing data VGA yang didapat ke view vga_edit.blade.php
        return view('editvga', ['vga' => $vga]); // Ambil elemen pertama dari koleksi karena get() mengembalikan koleksi
    }

    // update data VGA
    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'merkVGA' => 'required|string|max:25',
            'hargaVGA' => 'required|integer|min:0',
            'tersedia' => 'required|boolean',
            'berat' => 'required|numeric|min:0',
        ]);

        // update data VGA
        DB::table('vga')->where('ID', $request->ID)->update([ // Kolom ID bukan id
            'merkVGA' => $request->merkVGA,
            'hargaVGA' => $request->hargaVGA,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman VGA
        return redirect('/vga')->with('success', 'Data VGA berhasil diperbarui!');
    }

    // method untuk hapus data VGA
    public function hapus($id)
    {
        // menghapus data VGA berdasarkan id yang dipilih
        DB::table('vga')->where('ID', $id)->delete(); // Kolom ID bukan id

        // alihkan halaman ke halaman VGA
        return redirect('/vga')->with('success', 'Data VGA berhasil dihapus!');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table VGA sesuai pencarian data
        $vga = DB::table('vga')
            ->where('merkVGA', 'like', "%" . $cari . "%")
            ->orWhere('ID', 'like', "%" . $cari . "%") // Tambahkan pencarian berdasarkan ID juga
            ->paginate(5); // Pagination untuk hasil pencarian

        // mengirim data VGA ke view index2vga
        return view('index2vga', ['vga' => $vga, 'cari' => $cari]);
    }
}
