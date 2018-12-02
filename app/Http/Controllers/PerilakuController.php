<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerilakuController extends Controller
{
    //
    public function list(){
        return view('perilaku.list');
    }

    public function lihat(){
        return view('perilaku.lihat');
    }

    public function tambah(){
        return view('perilaku.tambah');
    }

    public function doTambah(){

    }

    public function ubah(){
        return view('perilaku.ubah');
    }

    public function doUbah(){

    }

    public function doHapus(){

    }
}
