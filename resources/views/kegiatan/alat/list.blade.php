@extends('layouts.master')

@section('title')
    List Alat
@endsection

@section('body')
    <div class="col-md-12" style="margin-top:100px;">
        <div class="card card-nav-tabs">
            <div class="header header-primary" >
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" data-tabs="tabs">
                            <h3><b>List Alat Kegiatan X</b></h3>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-content" >
                <div class="tab-content">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{route('kegiatan.alat.tambah',1)}}">
                                <button class="btn btn-primary btn-round"style="background-color:#328cc1; color:black;display:inline-block;float:right;">
                                    <i class="material-icons">add</i> <b>Tambah Alat</b>
                                </button>
                            </a>
                        </div>
                    </div>
                    <table class="table table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th class="text-center"><b>#</b></th>
                                <th><b>Nama</b></th>
                                <th><b>Wawasan</b></th>
                                <th><b>Deskripsi</b></th>
                                <th><b>Bobot</b></th>
                                <th class="text-center"><b>Actions</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Absensi</td>
                                <td>Wawasan 1</td>
                                <td>Deskripsi wawasan 1</td>
                                <td>0.12893798</td>
                                <td class="td-actions text-center">
                                    <button type="button" rel="tooltip" class="btn btn-info btn-simple">
                                        <i class="material-icons">person</i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-success btn-simple">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                        <i class="material-icons">close</i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Tugas X</td>
                                <td>Wawasan 2</td>
                                <td>Deskripsi wawasan 2</td>
                                <td>0.12893798</td>
                                <td class="td-actions text-center">
                                    <button type="button" rel="tooltip" class="btn btn-info btn-simple">
                                        <i class="material-icons">person</i>
                                    </button>
                                    <a href="{{route('user.ubah',1)}}">
                                        <button type="button" rel="tooltip" class="btn btn-success btn-simple">
                                            <i class="material-icons">edit</i>
                                        </button>
                                    </a>
                                    <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                        <i class="material-icons">close</i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Alat 3</td>
                                <td>Wawasan 3</td>
                                <td>Deskripsi wawasan 3</td>
                                <td>0.12893798</td>
                                <td class="td-actions text-center">
                                    <button type="button" rel="tooltip" class="btn btn-info btn-simple">
                                        <i class="material-icons">person</i>
                                    </button>
                                    <a href="{{route('user.ubah',1)}}">
                                        <button type="button" rel="tooltip" class="btn btn-success btn-simple">
                                            <i class="material-icons">edit</i>
                                        </button>
                                    </a>
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
@endsection
