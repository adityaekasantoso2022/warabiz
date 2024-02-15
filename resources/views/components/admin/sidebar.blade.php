<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <img src="{{ asset('assets/frontend/image/logo.svg') }}" alt="logo" class="mt-auto mb-auto">
                <div class="theme-toggle d-flex gap-2 align-items-center">
                    <!-- Icons and theme toggle -->
                </div>
                <div class="sidebar-toggler x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item {{ $active == 'dashboard' ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="sidebar-link">
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'waralaba' ? 'active' : '' }}">
                    <a href="{{ route('admin.waralaba') }}" class="sidebar-link">
                        <i class="bi bi-people"></i>
                        <span>Waralaba</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'transaksi' ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-clipboard-fill"></i>
                        <span>Transaksi</span>
                    </a>
                </li>
                <li class="sidebar-item {{ $active == 'articel' ? 'active' : '' }}">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-newspaper"></i>
                        <span>Artikel</span>
                    </a>
                </li>
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
