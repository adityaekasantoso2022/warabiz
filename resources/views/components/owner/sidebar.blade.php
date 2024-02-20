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
                <li class="sidebar-title"> Selamat Datang, <br><b>{{ Auth::user()->name }}</b></li>
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item {{ $active == 'dashboard' ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="sidebar-link">
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'waralaba' ? 'active' : '' }}">
                    <a href="" class="sidebar-link">
                        <i class="fas fa-store"></i>
                        <span>Waralaba</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'transaksi' ? 'active' : '' }}">
                    <a href="" class="sidebar-link">
                        <i class="fas fa-exchange-alt"></i>
                        <span>Transaksi</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'career' ? 'active' : '' }}">
                    <a href="" class="sidebar-link">
                        <i class="fas fa-briefcase"></i>
                        <span>Pekerjaan</span>
                    </a>
                </li>
                <li class="sidebar-title">Lainnya</li>
                <li class="sidebar-item">
                    <form id="logout-form" action="{{ url('logout') }}" method="POST" class="sidebar-link">
                        @csrf
                        <button type="submit" style="background: none; border: none;">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>