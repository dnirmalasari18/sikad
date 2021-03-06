<nav class="navbar navbar-primary navbar-fixed-top" id="sectionsNav">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}"><img src="{!! asset('assets/img/logo-hmtc.jpg') !!}" height="32" ></a>
            <a class="navbar-brand" href="{{route('home')}}" >SIKAD</a>
        </div>

        <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    @if (!empty(Auth::user()))
                        @if (Auth::user()->role == "KDPM")
                            @include('partials.navbars.kdpm')
                        @elseif(Auth::user()->role == "KP")
                            @include('partials.navbars.kp')
                        @elseif(Auth::user()->role == "Mahasiswa Baru")
                            @include('partials.navbars.maba')
                        @endif
                    @endif
                    @if(isset($user))
                    <li class="button-container">
                        <a href="http://www.creative-tim.com/buy/material-kit-pro?ref=presentation" class="btn btn-white btn-round">
                                Masuk
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
    </div>
</nav>
