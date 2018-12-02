<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WawasanController extends Controller
{
    //
    public function list(){
        return view('wawasan.list');
    }

    public function lihat(){
        return view('wawasan.lihat');
    }

    public function tambah(){
        return view('wawasan.tambah');
    }

    public function doTambah(){

    }

    public function ubah(){
        return view('wawasan.ubah');
    }

    public function doUbah(){

    }

    public function doHapus(){

    }

    // poin
    public function poinTambah(){
        return view('wawasan.poin.tambah');
    }

    public function poinDoTambah(){

    }

    public function poinUbah(){
        return view('wawasan.poin.ubah');
    }

    public function poinDoUbah(){

    }

    public function poinDoHapus(){

    }
}
