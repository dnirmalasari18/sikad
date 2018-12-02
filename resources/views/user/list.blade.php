@extends('layouts.master')

@section('title')
    List akun
@endsection

@section('body')
    <div class="col-md-12" style="margin-top:100px;">
        <div class="card card-nav-tabs">
            <div class="header header-primary" >
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" data-tabs="tabs">
                            <h3><b>List akun</b></h3>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-content" >
                <div class="tab-content">
                    <table class="table table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Nama</th>
                                <th>NRP</th>
                                <th>Peran</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Alex Mike</td>
                                <td>05111640000097</td>
                                <td>Mahasiswa Baru</td>
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
                                <td>Twingky</td>
                                <td>05110040000098</td>
                                <td>Kakak Pendamping</td>
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
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection