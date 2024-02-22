<div id="sidebar" class="active fixed-top">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                <img src="{{ asset('assets/frontend/image/logo.svg') }}" alt="logo" style="width: 150px; height: auto;">
                <div class="theme-toggle d-flex gap-2 align-items-center">
                    <!-- Jika ada elemen yang ingin Anda tambahkan di sini -->
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu list-unstyled">
                <li class="sidebar-title"> Selamat Datang, <br><b>{{ Auth::user()->name }}</b></li>
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item {{ $active == 'dashboard' ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="sidebar-link d-flex align-items-center">
                        <i class="bi bi-grid-1x2-fill me-2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'user' ? 'active' : '' }}">
                    <a href="{{ route('admin.user') }}" class="sidebar-link d-flex align-items-center">
                        <i class="fas fa-user me-2"></i>
                        <span>Pengguna</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'waralaba' ? 'active' : '' }}">
                    <a href="{{ route('admin.waralaba') }}" class="sidebar-link d-flex align-items-center">
                        <i class="fas fa-store me-2"></i>
                        <span>Waralaba</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'transaksi' ? 'active' : '' }}">
                    <a href="{{ route('admin.transactions') }}" class="sidebar-link d-flex align-items-center">
                        <i class="fas fa-exchange-alt me-2"></i>
                        <span>Transaksi</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'articel' ? 'active' : '' }}">
                    <a href="{{ route('admin.artikel') }}" class="sidebar-link d-flex align-items-center">
                        <i class="fas fa-newspaper me-2"></i>
                        <span>Artikel</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'career' ? 'active' : '' }}">
                    <a href="{{ route('admin.career') }}" class="sidebar-link d-flex align-items-center">
                        <i class="fas fa-briefcase me-2"></i>
                        <span>Pekerjaan</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'lamaran pekerjaan' ? 'active' : '' }}">
                    <a href="{{ route('admin.jobApp') }}" class="sidebar-link d-flex align-items-center">
                        <i class="fas fa-file-alt me-2"></i>
                        <span>Lamaran Pekerjaan</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'bantuan' ? 'active' : '' }}">
                    <a href="{{ route('admin.bantuan') }}" class="sidebar-link d-flex align-items-center">
                        <i class="fas fa-question-circle me-2"></i>
                        <span>Bantuan</span>
                    </a>
                </li>
                <li class="sidebar-title">Lainnya</li>
                <li class="sidebar-item {{ $active == 'home' ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class="sidebar-link d-flex align-items-center">
                        <i class="fas fa-home me-2"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <form id="logout-form" action="{{ url('logout') }}" method="POST" class="sidebar-link d-flex align-items-center">
                        @csrf
                        <button type="submit" style="background: none; border: none;">
                            <i class="bi bi-box-arrow-right me-2"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
