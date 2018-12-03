<div class="navbar-default sidebar" role="navigation" >
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ route('maba.biodata.lihat',1) }}"
                @if (\Request::is('*/biodata*'))
                    style="background-color:#196c9c; color:whitesmoke"
                @endif
                ><i class="fa fa-user fa-fw"></i> Data Diri</a>
            </li>
            <li>
                <a href="{{ route('maba.pengalaman.list',1) }}"
                @if (\Request::is('*/pengalaman*'))
                    style="background-color:#196c9c; color:whitesmoke"
                @endif
                ><i class="fa fa-trophy fa-fw"></i> Pengalaman</a>
            </li>
            <li>
                <a href="{{ route('maba.harapan.list',1) }}"
                @if (\Request::is('*/harapan*'))
                    style="background-color:#196c9c; color:whitesmoke"
                @endif
                ><i class="fa fa-star fa-fw"></i>Harapan</a>
            </li>
            <li>
                <a href="{{ route('maba.kebutuhan.list',1) }}"
                @if (\Request::is('*/kebutuhan*'))
                    style="background-color:#196c9c; color:whitesmoke"
                @endif
                ><i class="fa fa-money fa-fw"></i>Kebutuhan</a>
            </li>
            <li>
                <a href="{{ url('maba.finalisasi') }}"
                @if (\Request::is('*/finalisasi*'))
                    style="background-color:#196c9c; color:whitesmoke"
                @endif
                ><i class="fa fa-lock fa-fw"></i>Finalisasi</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
