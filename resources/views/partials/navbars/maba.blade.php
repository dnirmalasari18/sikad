<li>
    <a href="{{route('maba.biodata.lihat',1)}}">
        <i class="material-icons">apps</i> Data diri
    </a>
</li>
<li>
    <a href="{{route('maba.kepribadian.lihat',1)}}">
        <i class="material-icons">apps</i> Tes Kepribadian
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
