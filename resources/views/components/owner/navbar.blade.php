<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <img src="{{ asset('assets/frontend/image/logo.svg') }}" alt="logo"
                                style="width: 130px; height: auto;">
                        </div>
                        <div class="header-top-right">
                            <div class="dropdown">
                                <a href="#" id="topbarUserDropdown"
                                    class="user-dropdown d-flex align-items-center dropend dropdown-toggle "
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2">
                                        <img src="./assets/compiled/jpg/1.jpg" alt="Avatar">
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">{{ Auth::user()->name }}</h6>
                                        <p class="user-dropdown-status text-sm text-muted">Owner</p>
                                    </div>
                                </a>
                            </div>

                            <!-- Burger button responsive -->
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar">
                    <div class="container">
                        <ul>
                            <li class="menu-item">
                                <a href="{{ route('owner.dashboard') }}" class='menu-link'>
                                    <span><i class="bi bi-grid-fill"></i> Dashboard</span>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="{{ route('owner.waralaba') }}" class='menu-link'>
                                    <span><i class="fas fa-store"></i> Waralaba</span>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="{{ route('owner.transactions') }}" class='menu-link'>
                                    <span><i class="fas fa-exchange-alt"></i> Transaksi</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('owner.career') }}" class='menu-link'>
                                    <span><i class="iconly-boldAdd-User"></i> Pekerjaan</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <form id="logoutForm" action="{{ url('logout') }}" method="POST" style="display: none;">
                                    @csrf 
                                </form>
                                <a href="#"
                                    onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"
                                    class='menu-link'>
                                    <span><i class="fas fa-sign-out-alt"></i> Logout</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </header>
        </div>
    </div>

    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/static/js/pages/horizontal-layout.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/compiled/js/app.js"></script>
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/static/js/pages/dashboard.js"></script>
</body>

</html>