<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Link extends Controller
{
    //
    public function helloword()
    {
        return view('blog');
    }

    public function index(){
        $nama = "Diki Alfarabi Hadi";
        $umur = 35;
        $alamat = "Surabaya";
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    	return view('biodata',['nama'=>$nama,'usia'=>$umur,'alamat'=>$alamat,'matkul'=>$pelajaran]);
    }
}
