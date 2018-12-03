<li>
        <a href="{{route('hasil.persebaran')}}">
            <i class="material-icons">bar_chart</i> Persebaran
        </a>
    </li>
    <li>
        <a href="{{route('maba.nilai.kegiatan.list',1)}}">
                <i class="material-icons">assignment</i>Kelola Nilai Kegiatan
        </a>
    </li>
    <li>
        <a href="{{route('maba.nilai.perilaku.list',1)}}">
                <i class="material-icons">assignment</i>Kelola Nilai Perilaku
        </a>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="material-icons">view_carousel</i> Lain-lain
            <b class="caret"></b>
        </a>
        <ul class="dropdown-menu dropdown-with-icons">
            <li>
                <a href="{{route('logout')}}">
                    <i class="fa fa-sign-out fa-fw"></i>Logout
                </a>
            </li>
        </ul>
    </li>
