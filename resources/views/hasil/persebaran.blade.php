@extends('layouts.master')

@section('title')
    Persebaran
@endsection

@section('unique-css')
<link href="{!! asset('assets/morrisjs/morris.css') !!}" rel="stylesheet">
@endsection

@section('body')
    <div class="col-md-12" style="margin-top:100px;">
        <div class="card card-nav-tabs">
            <div class="header header-primary" >
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" data-tabs="tabs">
                            <h3><b>Persebaran Mahasiswa Baru</b></h3>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-content" >
                <div class="tab-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel2 panel-default2">
                                <div class="panel-heading" style="text-align:center;font-size:15pt;">
                                    <b>Wawasan<b>
                                </div>
                                <div class="panel-body">
                                    <div id="morris-bar-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-lg-12">
                                <div class="panel2 panel-default2">
                                    <div class="panel-heading"style="text-align:center;font-size:15pt;">
                                        <b>Output<b>
                                    </div>
                                    <div class="panel-body">
                                        <div id="morris-line-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('unique-js')
    <script src="{!! asset('assets/raphael/raphael.min.js') !!}"></script>
    <script src="{!! asset('assets/morrisjs/morris.min.js') !!}"></script>
    <script src="{!! asset('assets/data/morris-data.js') !!}"></script>
    <script>
        new Morris.Bar({
            element: 'morris-bar-chart',
            data: [
                { parameter: 'Tidak Paham', wawasan1: 20,wawasan2: 40,wawasan3: 60,wawasan4: 30,wawasan5: 50,wawasan6: 80 },
                { parameter: 'Paham', wawasan1: 110,wawasan2: 90,wawasan3: 70,wawasan4: 100,wawasan5: 80,wawasan6: 50 },
            ],
            xkey: 'parameter',
            ykeys: ['wawasan1', 'wawasan2', 'wawasan3', 'wawasan4', 'wawasan5', 'wawasan6'],
            labels: ['wawasan1','wawasan2','wawasan3','wawasan4','wawasan5','wawasan6'],
        });
        new Morris.Line({
            element: 'morris-line-chart',
            data: [
                { parameter: 'Tidak Paham', output1: 70,output2: 40,output3: 60,output4: 30,output5: 50 },
                { parameter: 'Paham', output1: 60,output2: 90,output3: 70,output4: 100,output5: 80 },
            ],
            xkey: 'parameter',
            parseTime:false,
            ykeys: ['output1', 'output2', 'output3', 'output4', 'output5'],
            
            labels: ['output1','output2','output3','output4','output5'],
        });
    </script>
@endsection