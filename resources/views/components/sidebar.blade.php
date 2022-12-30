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

        <li class="nav-item {{ $title === 'Home' ? 'active' : '' }}">
            <a class="nav-link" href="/admin/home">
                <i class="fas fa-fw fa-home"></i>
                <span>Home</span>
            </a>
        </li>

        <li class="nav-item {{ $title === 'Semua Kategori' ? 'active' : '' }}">
            <a class="nav-link" href="/admin/kategori">
                <img class="fas fa-fw icon-sidebar" src="{{ asset('img/sidebar/kategori.svg') }}"></img>
                <span>Kategori</span>
            </a>
        </li>


        <li class="nav-item {{ $title === 'Surat Masuk' ? 'active' : '' }}">
            <a class="nav-link" href="/admin/surat-masuk">
                <img class="fas fa-fw icon-sidebar" src="{{ asset('img/sidebar/mail-in.svg') }}"></img>
                <span>Surat Masuk</span></a>
        </li>

        <li class="nav-item {{ $title === 'Surat Keluar' ? 'active' : '' }}">
            <a class="nav-link" href="/admin/surat-keluar">
                <img class="fas fa-fw icon-sidebar" src="{{ asset('img/sidebar/mail-out.svg') }}"></img>
                <span>Surat Keluar</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <li class="nav-item" style="bottom: 0;position:absolute">
            <form action="/admin/logout" method="post">
                @csrf
                <button class="nav-link border-0 bg-transparent" type="submit">
                    <img class="fas fa-fw icon-sidebar" src="{{ asset('img/sidebar/logout.svg') }}"></img>
                    <span>Log out</span>
                </button>
            </form>
        </li>
    </ul>
</div>
