@@ -1,49 +0,0 @@
@extends('layouts.master')

@section('title')
    Tambah Perilaku
@endsection

@section('body')
<div class="container">
    <div style="margin-top:90px;display:flex;align-items:stretch">
        <div class="col-md-2">
            @include('layouts.sidebar-datadiri')
        </div>
        <div class="col-md-10">
            <div class="card card-nav-tabs">
                <div class="header header-primary" >
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <h3><b>Tambah Perilaku</b></h3>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="tab-content">
                        <form role="form">
                            <div class="form-group label-floating">
                                <label class="control-label">Nama Perilaku</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Bobot Perilaku</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Deskripsi Perilaku</label>
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </form>
                        <div class="row">
                                <div class="col-md-10 col-md-offset-2">
                                    <button class="btn btn-primary btn-round" style="background-color:#CD5C5C; color:black;display:inline-block;float:right;">Batal<i class="fa fa-remove fa-fw"></i></button>
                                    <button class="btn btn-primary btn-round" style="background-color:black;display:inline-block;float:right; ">Simpan<i class="fa fa-angle-right fa-fw"></i></button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection
