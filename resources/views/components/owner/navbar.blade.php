<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <!-- Tambahkan link CSS eksternal di sini jika diperlukan -->
    <style>
    .menu-toggle {
        width: 30px;
        height: 24px;
        background: transparent;
        border: none;
        padding: 5px;
        /* menambahkan padding untuk membuat tombol lebih besar */
        cursor: pointer;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }

    .burger-bar {
        display: block;
        width: 20px;
        height: 2px;
        background-color: #333;
        margin: 4px auto;
        /* Mengatur jarak antara garis */
        transition: all 0.3s ease;
        /* Animasi saat diubah */
    }

    .menu-toggle.active .burger-bar:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
        /* Mengatur rotasi dan translasi untuk garis 1 */
    }

    .menu-toggle.active .burger-bar:nth-child(2) {
        opacity: 0;
        /* Menyembunyikan garis 2 */
    }

    .menu-toggle.active .burger-bar:nth-child(3) {
        transform: rotate(-45deg) translate(5px, -5px);
        /* Mengatur rotasi dan translasi untuk garis 3 */
    }

    .user-dropdown {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .user-dropdown-text {
        text-align: left;
        margin-right: 1rem;
    }

    @media only screen and (max-width: 600px) {
        .main-navbar {
            display: none;
            /* menyembunyikan navbar pada tampilan seluler */
        }

        .menu-toggle {
            display: block;
            /* menampilkan toggle menu pada tampilan seluler */
            position: absolute;
            top: 0;
            right: 0;
        }

        .menu-item {
            display: block;
            /* menampilkan setiap item menu dalam tampilan seluler */
        }

        .user-dropdown-name,
        .user-dropdown-status,
        .avatar {
            display: none;
            /* menyembunyikan avatar, nama, dan status pada tampilan seluler */
        }

        .user-dropdown {
            text-align: left;
        }
    }

    @media only screen and (min-width: 601px) {
        .menu-toggle {
            display: none;
            /* menyembunyikan toggle menu pada tampilan laptop */
        }

        .main-navbar {
            display: block;
            /* menampilkan navbar pada tampilan laptop */
        }

        /* Menampilkan elemen-elemen yang sebelumnya disembunyikan pada tampilan seluler */
        .user-dropdown-name,
        .user-dropdown-status,
        .avatar {
            display: block;
        }
    }
    </style>
</head>

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
                        <div class="user-dropdown d-flex align-items-center dropend " data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <button class="menu-toggle" onclick="toggleMenu()">
                                <span class="burger-bar"></span>
                                <span class="burger-bar"></span>
                                <span class="burger-bar"></span>
                            </button>
                            <div class="avatar avatar-md2">
                                <a href="{{ route('owner.profile') }}">
                                    <div class="avatar" style="background-color: #0089A3; margin-right: 0.75rem;">
                                        <span
                                            class="avatar-content">{{ strtoupper(substr(Auth::user()->name, 0, 2)) }}</span>
                                    </div>
                                </a>
                            </div>
                            <div class="user-dropdown-text">
                                <a href="{{ route('owner.profile') }}">
                                    <h6 class="user-dropdown-name">{{ Auth::user()->name }}</h6>
                                </a>
                                <p class="user-dropdown-status text-sm text-muted">Owner</p>
                            </div>
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
                        </ul>
                    </div>
                </nav>
            </header>
        </div>
    </div>

    <!-- tambahkan tombol toggle menu untuk tampilan seluler -->
    <script>
    function toggleMenu() {
        var menu = document.querySelector('.main-navbar');
        if (menu.style.display === 'block') {
            menu.style.display = 'none';
        } else {
            menu.style.display = 'block';
        }
    }
    </script>

    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/static/js/pages/horizontal-layout.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/compiled/js/app.js"></script>
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/static/js/pages/dashboard.js"></script>
</body>

</html>