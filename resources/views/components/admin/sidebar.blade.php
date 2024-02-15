<div id="sidebar" class="active fixed-top">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                <img src="{{ asset('assets/frontend/image/logo.svg') }}" alt="logo" style="width: 150px; height: auto;">
                <div class="theme-toggle d-flex gap-2 align-items-center">
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title"> Selamat Datang, <br><b>{{ Auth::user()->name }}!</b></li>
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item {{ $active == 'dashboard' ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="sidebar-link">
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'user' ? 'active' : '' }}">
                    <a href="{{ route('admin.user') }}" class="sidebar-link">
                        <i class="fas fa-user"></i>
                        <span>Pengguna</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'waralaba' ? 'active' : '' }}">
                    <a href="{{ route('admin.waralaba') }}" class="sidebar-link">
                        <i class="fas fa-store"></i>
                        <span>Waralaba</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'transaksi' ? 'active' : '' }}">
                    <a href="{{ route('admin.transaksi') }}" class="sidebar-link">
                        <i class="fas fa-exchange-alt"></i>
                        <span>Transaksi</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'articel' ? 'active' : '' }}">
                    <a href="{{ route('admin.artikel') }}" class="sidebar-link">
                        <i class="fas fa-newspaper"></i>
                        <span>Artikel</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'career' ? 'active' : '' }}">
                    <a href="{{ route('admin.career') }}" class="sidebar-link">
                        <i class="fas fa-briefcase"></i>
                        <span>Pekerjaan</span>
                    </a>
                </li>
                <li class="sidebar-item dropdown {{ $active == 'lainnya' ? 'active' : '' }}">
                    <a class="sidebar-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                        <span>Lainnya</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li class="sidebar-item {{ $active == 'home' ? 'active' : '' }}">
                            <a href="{{ route('home') }}" class="sidebar-link">
                                <i class="fas fa-home"></i>
                                <span> Halaman Home</span>
                            </a>
                        </li>
                        <li>
                            <form id="logout-form" action="{{ url('logout') }}" method="POST" class="dropdown-item">
                                @csrf
                                <button type="submit" style="background: none; border: none;">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span style="margin-left: 5px;">Logout</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
