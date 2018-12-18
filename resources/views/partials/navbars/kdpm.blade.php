<li>
    <a href="{{route('user.list')}}">
        <i class="material-icons">account_circle</i> Akun
    </a>
</li>

<li>
    <a href="{{route('hasil.persebaran')}}">
        <i class="material-icons">bar_chart</i> Persebaran
    </a>
</li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="material-icons">view_carousel</i> Kegiatan
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu dropdown-with-icons">
        <li>
            <a href="{{route('kegiatan.list')}}">
                <i class="material-icons">nature_people</i> Kelola Kegiatan
            </a>
        </li>
        <li>
            <a href="{{route('maba.nilai.kegiatan.list',1)}}">
                <i class="material-icons">assignment</i>Kelola Nilai Kegiatan
            </a>
        </li>
    </ul>
</li>

<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="material-icons">view_carousel</i> Perilaku
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu dropdown-with-icons">
        <li>
            <a href="{{route('perilaku.list')}}">
                <i class="material-icons">directions_run</i> Kelola Perilaku
            </a>
        </li>
        <li>
            <a href="{{route('maba.nilai.perilaku.list',1)}}">
                <i class="material-icons">assignment</i>Kelola Nilai Perilaku
            </a>
        </li>
    </ul>
</li>

<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="material-icons">view_carousel</i> Kurikulum
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu dropdown-with-icons">
        <li>
            <a href="{{route('wawasan.list')}}">
                <i class="material-icons">star</i>Kelola Wawasan
            </a>
        </li>
        <li>
            <a href="{{route('output.list')}}">
                <i class="material-icons">star_border</i>Kelola Output
            </a>
        </li>
    </ul>
</li>

        <li>
            <a href="{{route('logout')}}">
                    <i class="fa fa-sign-out fa-fw"></i>Logout
            </a>
        </li>

