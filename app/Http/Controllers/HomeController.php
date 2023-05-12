<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function pengguna(){
        return view('Pengguna');
    }

    public function pegawai(){
        return view('Pegawai');
    }

    public function katalog(){
        return view('katalog');
    }

    public function Pesanan(){
        return view('Pesanan');
    }

    public function katalogpengguna(){
        return view('katalogpengguna');
    }
}
