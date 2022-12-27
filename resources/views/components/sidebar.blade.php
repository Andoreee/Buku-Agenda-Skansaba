<div id="tooglesidebar" style="display: block">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="display: block">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" id="brand" href="/home">
            <div>
                <img src="{{ asset('img/logo-smk.png') }}" class="logosmk">
            </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        {{-- <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a> style="width:170px"
        </li> --}}

        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item active">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-home"></i>
                <span>Home</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/surat-masuk">
                <img class="fas fa-fw icon-sidebar" src="{{ asset('img/sidebar/mail-in.svg') }}"></img>
                <span>Surat Masuk</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/surat-keluar">
                <img class="fas fa-fw icon-sidebar" src="{{ asset('img/sidebar/mail-out.svg') }}"></img>
                <span>Surat Keluar</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <li class="nav-item" style="bottom: 0;position:absolute">
            <a class="nav-link" href="#">
                <img class="fas fa-fw icon-sidebar" src="{{ asset('img/sidebar/logout.svg') }}"></img>
                <span>Log out</span>
            </a>
        </li>
    </ul>
</div>
