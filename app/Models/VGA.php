<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VGA extends Model
{
    use HasFactory;

    protected $table = 'vga'; // Pastikan nama tabelnya sesuai
    protected $primaryKey = 'id'; // Default Laravel 'id', tapi Anda pakai 'ID' di DB
                                  // Meskipun pakai DB::table(), ini good practice
    public $timestamps = false; // Karena tabel VGA tidak ada created_at dan updated_at
                                // Pastikan ini diatur agar Laravel tidak mencari kolom tersebut

    // Jika Anda ingin mengizinkan mass assignment, meskipun Query Builder tidak selalu memerlukannya
    // Ini lebih relevan jika Anda mulai menggunakan VGA::create() atau VGA::update()
    // protected $fillable = [
    //     'merkVGA',
    //     'hargaVGA',
    //     'tersedia',
    //     'berat',
    // ];
    // Atau
    // protected $guarded = []; // Untuk mengizinkan semua field
}
