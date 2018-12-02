@extends('layouts.master')

@section('title')
    List Perilaku
@endsection

@section('body')
    <div class="col-md-12" style="margin-top:100px;">
        <div class="card card-nav-tabs">
            <div class="header header-primary" >
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" data-tabs="tabs">
                            <h3><b>List Perilaku</b></h3>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-content" >
                <div class="tab-content">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{route('perilaku.tambah')}}">
                                <button class="btn btn-primary btn-round"style="background-color:#328cc1; color:black;display:inline-block;float:right;">
                                    <i class="material-icons">add</i> <b>Tambah Perilaku</b>
                                </button>
                            </a>
                        </div>
                    </div>
                    <table class="table table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th class="text-center"><b>#</b></th>
                                <th><b>Nama</b></th>
                                <th><b>Output</b></th>
                                <th><b>Deskripsi</b></th>
                                <th><b>Bobot</b></th>
                                <th class="text-center"><b>Actions</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Perilaku 1</td>
                                <td>Output 1</td>
                                <td>Deskripsi perilaku 1</td>
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
                                <td class="text-center">2</td>
                                <td>Perilaku 2</td>
                                <td>Output 2</td>
                                <td>Deskripsi perilaku 2</td>
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
                                <td>Perilaku 3</td>
                                <td>Output 3</td>
                                <td>Deskripsi perilaku 3</td>
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
