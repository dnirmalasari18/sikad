@extends('layouts.master')

@section('title')
    Halaman Utama
@endsection

@section('background-change')
style="background-color:#8eaebd;"
@endsection

@section('body')
    <div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login102 p-t-190 p-b-30">
                    <div class="rotating-card-container">
                        <div class="card card-rotate">
                            <div class="front card-pricing">
                                <div class="card-content">
                                    <h6 class="category text-gray">Halo ((NAMA))</h6>
                                    <div class="icon icon-info">
                                        <i class="material-icons">people</i>
                                    </div>
                                    <h5 class="card-title">((NRP))</h5>
                                    <p class="card-description">
                                        ((Peran))<br>
                                        Stay Positive and happy
                                    </p>
                                </div>
                            </div>

                            <div class="back">
                                <div class="card-content">
                                    <div style=""><img style="height:150px;width:auto;"src="{!! asset('assets/img/logo-hmtc.jpg') !!}">
                                    </div><br>
                                    <h5 class="card-title"><b>HMTC ITS</b></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
		</div>
	</div>
@endsection
