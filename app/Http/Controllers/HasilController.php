<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HasilController extends Controller
{
    //
    public function persebaran(){
        return view('hasil.persebaran');
    }

    public function perkembangan(){
        return view('hasil.perkembangan');
    }

    public function nilaiPerilakuList(){
        return view('hasil.nilai.perilaku.list');
    }

    public function nilaiPerilakuLihat(){
        return view('hasil.nilai.perilaku.lihat');
    }

    public function nilaiPerilakuTambah(){
        return view('hasil.nilai.perilaku.tambah');
    }

    public function nilaiPerilakuDoTambah(){

    }

    public function nilaiPerilakuUbah(){
        return view('hasil.nilai.perilaku.ubah');
    }

    public function nilaiPerilakuDoUbah(){

    }

    public function nilaiPerilakuDoHapus(){

    }

    // Kegiatan
    public function nilaiKegiatanList(){
        return view('hasil.nilai.kegiatan.list');
    }

    public function nilaiKegiatanLihat(){
        return view('hasil.nilai.kegiatan.lihat');
    }

    public function nilaiKegiatanTambah(){
        return view('hasil.nilai.kegiatan.tambah');
    }

    public function nilaiKegiatanDoTambah(){

    }

    public function nilaiKegiatanUbah(){
        return view('hasil.nilai.kegiatan.ubah');
    }

    public function nilaiKegiatanDoUbah(){

    }

    public function nilaiKegiatanDoHapus(){

    }
}
