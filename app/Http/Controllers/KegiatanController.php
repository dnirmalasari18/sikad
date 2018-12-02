<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    //
    public function list(){
        return view('kegiatan.list');
    }

    public function lihat(){
        return view('kegiatan.lihat');
    }

    public function tambah(){
        return view('kegiatan.tambah');
    }

    public function doTambah(){

    }

    public function ubah(){
        return view('kegiatan.ubah');
    }

    public function doUbah(){

    }

    public function doHapus(){

    }

    // alat
    public function alatList(){
        return view('kegiatan.alat.list');
    }

    public function alatTambah(){
        return view('kegiatan.alat.tambah');
    }

    public function alatDoTambah(){

    }

    public function alatUbah(){
        return view('kegiatan.alat.ubah');
    }

    public function alatDoUbah(){

    }

    public function alatDoHapus(){

    }
}
