@extends('layouts.master')

@section('title')
    Main Page
@endsection

@section('background-change')
style="background-color:#8eaebd;"
@endsection

@section('body')
<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100 p-t-190 p-b-30">
            <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                    <span class="login100-form-title p-t-20 p-b-45"style="margin-bottom:10px;color:#031424">
                            <img src="{!! asset('assets/img/logo-hmtc.jpg') !!}">
                    </span>
					<span class="login100-form-title p-t-20 p-b-45"style="margin-bottom:10px;color:#031424;font-size:18pxl">
                        <b>SELAMAT DATANG di<br>
                        Sistem Informasi KDPM</b>
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "NRP is required">
						<input class="input100" type="text" name="username" placeholder="NRP">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<a href="#" class="txt1" style="color:#031424; font-size:12pt">
							Lupa Password?
						</a>
					</div>


				</form>
			</div>
		</div>
	</div>


        </form>
    </div>
</div>
@endsection
