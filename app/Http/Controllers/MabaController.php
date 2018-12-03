<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MabaController extends Controller
{
    public function home(){

    }

    //
    public function biodataLihat(){
        return view('maba.biodata.lihat');
    }

    public function biodataTambah(){
        return view('maba.biodata.tambah');
    }

    public function biodataDoTambah(){

    }

    // Pengalaman
    public function pengalamanList(){
        return view('maba.pengalaman.list');
    }

    public function pengalamanTambah(){
        return view('maba.pengalaman.tambah');
    }

    public function pengalamanDoTambah(){

    }

    public function pengalamanDoHapus(){

    }

    // Harapan
    public function harapanList(){
        return view('maba.harapan.list');
    }

    public function harapanTambah(){
        return view('maba.harapan.tambah');
    }

    public function harapanDoTambah(){

    }

    public function harapanDoHapus(){

    }

    // Kebutuhan
    public function kebutuhanList(){
        return view('maba.kebutuhan.list');
    }

    public function kebutuhanLihat(){
        return view('maba.kebutuhan.lihat');
    }

    public function kebutuhanTambah(){
        return view('maba.kebutuhan.tambah');
    }

    public function kebutuhanDoTambah(){

    }

    public function kebutuhanDoHapus(){

    }

    // Kepribadian
    public function kepribadianLihat(){
        return view('maba.kepribadian.lihat');
    }

    public function kepribadianTes(){
        return view('maba.kepribadian.tes');
    }
}
