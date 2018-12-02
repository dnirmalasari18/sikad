<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function list(){
        return view('user.list');
    }

    public function lihat(){
        return view('user.lihat');
    }

    public function tambah(){
        return view('user.tambah');
    }

    public function doTambah(){

    }

    public function ubah(){
        return view('user.ubah');
    }

    public function doUbah(){

    }

    public function doHapus(){

    }
}
