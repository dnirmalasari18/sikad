<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutputController extends Controller
{
    //
    public function list(){
        return view('output.list');
    }

    public function lihat(){
        return view('output.lihat');
    }

    public function tambah(){
        return view('output.tambah');
    }

    public function doTambah(){

    }

    public function ubah(){
        return view('output.ubah');
    }

    public function doUbah(){

    }

    public function doHapus(){

    }
}
