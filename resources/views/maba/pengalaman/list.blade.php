@extends('layouts.master')

@section('title')
    Pengalaman
@endsection

@section('body')
    <div class="hiho" style="margin-top:90px;display:flex;align-items:stretch">
        <div class="col-md-2" id="hihoho"style="padding:0;background-color:#1d2731;">
            @include('layouts.sidebar-datadiri')
        </div>
        <div class="col-md-10">
            <div class="card card-nav-tabs">
                <div class="header header-primary" >
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <h3><b>Pengalaman</b></h3>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="tab-content">
                        <div class="row">
                                <div class="col-md-12">
                                    <a href="{{route('maba.pengalaman.tambah',1)}}">
                                        <button class="btn btn-primary btn-round"style="background-color:#328cc1; color:black;display:inline-block;float:right;">
                                            <i class="material-icons">add</i> <b>Tambah Pengalaman</b>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <table class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="text-center"><b>#</b></th>
                                        <th><b>Nama</b></th>
                                        <th><b>Kategori</b></th>
                                        <th><b>Deskripsi</b></th>
                                        <th class="text-center"><b>Actions</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Organisasi a</td>
                                        <td>Organisasi</td>
                                        <td>Deskripsi kebutuhan 1</td>
                                        <td class="td-actions text-center">
                                            <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Lomba b</td>
                                        <td>Lomba</td>
                                        <td>Deskripsi pengalaman 2</td>
                                        <td class="td-actions text-center">
                                            <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>Kepanitiaan x</td>
                                        <td>Kepanitiaan</td>
                                        <td>Deskripsi pengalaman 3</td>
                                        <td class="td-actions text-center">
                                            <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
