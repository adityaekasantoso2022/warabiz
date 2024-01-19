<nav class="navbar navbar-expand-lg navbar-light position-fixed top-0 w-100 py-lg-3">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/frontend/image/logo.svg') }}" class="mb-1" alt="logo-skillshop">
        </a>

        @guest
            <!-- Display when the user is a guest -->
            <div class="navbar-nav d-lg-flex d-none">
                <a href="{{ route('login') }}" class="btn text-decoration-none login me-3 shadow-none">Masuk</a>
                <a href="{{ route('register') }}" class="btn btn-signup bgTheme text-white shadow-none">Daftar</a>
            </div>
        @else
            <!-- Display when the user is authenticated -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <a class="nav-link me-4 {{ $active == 'home' ? 'active' : '' }}"
                        href="{{ route('home.index') }}">Home</a>
                    <a class="nav-link me-4 {{ $active == 'waraedu' ? 'active' : '' }}"
                        href="{{ route('waraedu') }}">WaraEdu</a>
                     <a class="nav-link me-4 {{ $active == 'waracareer' ? 'active' : '' }}"
                        href="{{ route('waracareer') }}">WaraCareer</a>
                    <a class="nav-link me-4 {{ $active == 'warapartner' ? 'active' : '' }}"
                        href="{{ route('warapartner') }}">WaraPartner</a>

                    <a class="nav-link me-4 {{ $active == 'bantuan' ? 'active' : '' }}"
                        href="{{ route('bantuan') }}">Bantuan</a>
                </div>
                <div class="navbar-nav">
                    <div class="dropdown mt-1">
                        <button class="btn fw-bold text-white d-flex align-items-center p-0 shadow-none drdwn nav-link dropdown-toggle"
                                type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            <p class="profil-name">{{ Str::limit(Auth::user()->name, 20, '') }}</p>
                        </button>

                        <ul class="dropdown-menu p-0 m-0 border-0 rounded-12 shadow overflow-hidden mt-3" aria-labelledby="dropdownMenu2">
    <li>
        <a href="{{ url('transaksi') }}" class="dropdown-item bg-white btn baseColor rounded-0 fw-bold text-white d-flex align-items-center m-0 py-3 shadow-none">
            <p class="me-3"><i class="fas fa-history"></i></p>
            <p class="text-sm">Riwayat Transaksi</p>
        </a>
    </li>
    <li>
        <form action="{{ url('logout') }}" method="post">
            @csrf
            <button class="dropdown-item bg-white btn baseColor rounded-0 fw-bold text-white d-flex align-items-center m-0 py-3 shadow-none" type="submit">
                <p class="me-3"><i class="fas fa-sign-out-alt"></i></p>
                <p class="text-sm">Logout</p>
            </button>
        </form>
    </li>
</ul>
                    </div>
                </div>
            </div>
        @endguest
    </div>
</nav>
