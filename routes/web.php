<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('login'));
});

Auth::routes();

Route::group(['middleware'=>'auth'],function(){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('DataDiri', function(){
        return view('Maba.formDataDiri');
    });

    Route::get('hasil/persebaran',function(){
        return view('hasil.persebaran');
    });

    Route::get('hasil/perkembangan/{mabaid}',function($mabaid){
        return view('hasil.perkembangan');
    });

    Route::prefix('users')->name('user.')->group(function(){
        Route::get('','UserController@list')->name('list');
        Route::get('tambah','UserController@tambah')->name('tambah');
        Route::post('tambah','UserController@doTambah');
        Route::get('ubah/{id}','UserController@ubah')->name('ubah');
        Route::post('ubah/{id}','UserController@doUbah');
        Route::post('hapus/{id}','UserController@doHapus')->name('hapus');
        Route::get('{id}','UserController@lihat')->name('lihat');
    });

    Route::prefix('maba/{id}')->name('maba.')->group(function(){
        Route::get('','MabaController@home')->name('home');

        Route::get('biodata','MabaController@biodataLihat')->name('biodata.lihat');
        Route::get('biodata/tambah','MabaController@biodataTambah')->name('biodata.tambah');
        Route::post('biodata/tambah','MabaController@biodataDoTambah');

        Route::get('pengalaman','MabaController@pengalamanList')->name('pengalaman.list');
        Route::get('pengalaman/tambah','MabaController@pengalamanTambah')->name('pengalaman.tambah');
        Route::post('pengalaman/tambah','MabaController@pengalamanDoTambah');
        Route::post('pengalaman/hapus/{exid}','MabaController@pengalamanDoHapus')->name('pengalaman.hapus');

        Route::get('harapan','MabaController@harapanList')->name('harapan.list');
        Route::get('harapan/tambah','MabaController@harapanTambah')->name('harapan.tambah');
        Route::post('harapan/tambah','MabaController@harapanDoTambah');
        Route::post('harapan/hapus/{exid}','MabaController@harapanDoHapus')->name('harapan.hapus');

        Route::get('kebutuhan','MabaController@kebutuhanList')->name('kebutuhan.list');
        Route::get('kebutuhan/{kebid}','MabaController@kebutuhanLihat')->name('kebutuhan.lihat');
        Route::get('kebutuhan/tambah','MabaController@kebutuhanTambah')->name('kebutuhan.tambah');
        Route::post('kebutuhan/tambah','MabaController@kebutuhanDoTambah');
        Route::post('kebutuhan/hapus/{exid}','MabaController@kebutuhanDoHapus')->name('kebutuhan.hapus');

        Route::get('kepribadian','MabaController@kepribadianLihat')->name('kepribadian.lihat');
        Route::get('kepribadian/tes','MabaController@kepribadianTes')->name('kepribadian.tes');
        Route::post('kepribadian/tes','MabaController@kepribadianDoTes');

        Route::prefix('nilai')->name('nilai.')->group(function(){
            Route::prefix('perilaku')->name('perilaku.')->group(function(){
                Route::get('','HasilController@nilaiPerilakuList')->name('list');
                Route::get('{perilakuid}','HasilController@nilaiPerilakuTambah')->name('lihat');
                Route::get('{perilakuid}/tambah','HasilController@nilaiPerilakuTambah')->name('tambah');
                Route::post('{perilakuid}/tambah','HasilController@nilaiPerilakuDoTambah');
                Route::get('{perilakuid}/ubah','HasilController@nilaiPerilakuUbah')->name('ubah');
                Route::post('{perilakuid}/ubah','HasilController@nilaiPerilakuDoUbah');
                Route::post('{perilakuid}/hapus','HasilController@nilaiPerilakuDoHapus')->name('hapus');
            });

            Route::prefix('kegiatan')->name('kegiatan.')->group(function(){
                Route::get('','HasilController@nilaiKegiatanList')->name('list');
                Route::get('{kegiatanid}','HasilController@nilaiKegiatanTambah')->name('lihat');
                Route::get('{kegiatanid}/tambah','HasilController@nilaiKegiatanTambah')->name('tambah');
                Route::post('{kegiatanid}/tambah','HasilController@nilaiKegiatanDoTambah');
                Route::get('{kegiatanid}/ubah','HasilController@nilaiKegiatanUbah')->name('ubah');
                Route::post('{kegiatanid}/ubah','HasilController@nilaiKegiatanDoUbah');
                Route::post('{kegiatanid}/hapus','HasilController@nilaiKegiatanDoHapus')->name('hapus');
            });
        });
    });

    Route::prefix('wawasan')->name('wawasan.')->group(function(){
        Route::get('','WawasanController@list')->name('list');
        Route::get('tambah','WawasanController@tambah')->name('tambah');
        Route::post('tambah','WawasanController@doTambah');
        Route::get('ubah/{id}','WawasanController@ubah')->name('ubah');
        Route::post('ubah/{id}','WawasanController@doUbah');
        Route::post('hapus/{id}','WawasanController@doHapus')->name('hapus');
        Route::get('{id}','WawasanController@lihat')->name('lihat');

        Route::prefix('{id}/poin')->name('poin.')->group(function(){
            Route::get('tambah','WawasanController@poinTambah')->name('tambah');
            Route::post('tambah','WawasanController@poinDoTambah');
            Route::get('ubah/{poinid}','WawasanController@poinUbah')->name('ubah');
            Route::post('ubah/{poinid}','WawasanController@poinUbah');
            Route::post('hapus/{poinid}','WawasanController@poinDoHapus')->name('hapus');
        });
    });

    Route::prefix('output')->name('output.')->group(function(){
        Route::get('','OutputController@list')->name('list');
        Route::get('tambah','OutputController@tambah')->name('tambah');
        Route::post('tambah','OutputController@doTambah');
        Route::get('ubah/{id}','OutputController@ubah')->name('ubah');
        Route::post('ubah/{id}','OutputController@doUbah');
        Route::post('hapus/{id}','OutputController@doHapus')->name('hapus');
        Route::get('{id}','OutputController@lihat')->name('lihat');
    });

    Route::prefix('perilaku')->name('perilaku.')->group(function(){
        Route::get('','PerilakuController@list')->name('list');
        Route::get('tambah','PerilakuController@tambah')->name('tambah');
        Route::post('tambah','PerilakuController@doTambah');
        Route::get('ubah/{id}','PerilakuController@ubah')->name('ubah');
        Route::post('ubah/{id}','PerilakuController@doUbah');
        Route::post('hapus/{id}','PerilakuController@doHapus')->name('hapus');
        Route::get('{id}','PerilakuController@lihat')->name('lihat');
    });

    Route::prefix('kegiatan')->name('kegiatan.')->group(function(){
        Route::get('','KegiatanController@list')->name('list');
        Route::get('tambah','KegiatanController@tambah')->name('tambah');
        Route::post('tambah','KegiatanController@doTambah');
        Route::get('ubah/{id}','KegiatanController@ubah')->name('ubah');
        Route::post('ubah/{id}','KegiatanController@doUbah');
        Route::post('hapus/{id}','KegiatanController@doHapus')->name('hapus');
        Route::get('{id}','KegiatanController@lihat')->name('lihat');
        Route::prefix('{id}/alat')->name('alat.')->group(function(){
            Route::get('','KegiatanController@alatList')->name('list');
            Route::get('tambah','KegiatanController@alatTambah')->name('tambah');
            Route::post('tambah','KegiatanController@alatDoTambah');
            Route::get('ubah/{alatid}','KegiatanController@alatUbah')->name('ubah');
            Route::post('ubah/{alatid}','KegiatanController@alatUbah');
            Route::post('hapus/{alatid}','KegiatanController@alatDoHapus')->name('hapus');
        });
    });

    Route::get('logout',function(){
        Auth::logout();
        return redirect('/home');
    });

});
