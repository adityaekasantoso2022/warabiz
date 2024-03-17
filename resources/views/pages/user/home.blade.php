<x-user-layout title="Warabiz-Home" active="Warabiz">
    @push('addonStyle')
    <style>
    body {
        background: #ffffff !important;
    }

    .testimonial-section {
        padding: 70px 0;
        background-color: #ECF8F9;
    }

    .testimonial-section h1 {
        margin-bottom: 40px;
    }

    .testimonial-section img {
        border-radius: 10px;
    }

    .contact-section form button:hover {
        background-color: #25d366;
    }

    .benefit {
        padding: 30px 0;
        background-size: cover;
        background-position: center;
        color: #fff;
    }

    .card-benefit {
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
        margin-bottom: 20px;
    }

    .card-benefit:hover {
        transform: scale(1.05);
    }

    .card-benefit .card-title,
    .card-benefit .card-text {
        font-weight: normal;
        text-align: left;

    }

    .card-benefit .card-title {
        font-size: 20px;
        line-height: 130%;
        color: #000;
    }

    .card-benefit .card-text {
        font-size: 15px;
        line-height: 150%;
        color: #000;
    }

    .card-benefit .card-more {
        font-weight: 500;
        color: #3ECAB0;
    }


    .navbar .navbar-nav a:hover.btn-signup {
        color: white !important;
    }

    .navbar .navbar-nav a:hover {
        color: #131313 !important;
    }

    .navbar .navbar-nav .active {
        color: #131313 !important;
    }

    .profil-name {
        color: #131313;
    }

    .hero {
        background: none !important;
        height: 80vh !important;
    }

    .text-success {
        color: #0098B4;
    }

    .hero p {
        font-weight: 400;
        font-size: 16px;
        color: rgba(19, 19, 19, 0.8);
    }

    .hero .btn-cta {
        background: #FF823C;
        border-radius: 12px;
        color: white;
        font-weight: 500;
        font-size: 16px;
        line-height: 150%;
        padding: 12px 32px;
    }

    .img-header {
        position: absolute;
        top: 1;
        right: 0px;
        z-index: -1;
    }

    .navbar-expand-lg {
        background-color: white !important;
        box-shadow: -1.5px 4px 16px rgb(118 126 148 / 20%);
        transition: background-color 200ms linear;
    }

    .benefit {
        background: #03173C;
        padding: 20px 0px;
    }

    .hero .hero-text {
        color: #34364a;
        font-size: 43px;
        font-weight: 700;
        line-height: 78px;
    }

    @media (min-width: 1280px) {
        .hero .hero-text {
            color: #34364a;
            font-size: 56px;
            font-weight: 700;
            line-height: 73px;
        }
    }

    @media (min-width: 767px) {
        .benefit {
            padding: 60px 0px;
        }

        .hero {
            background: none !important;
            margin-top: 75px;
            margin-bottom: -33px !important;
            height: 80vh !important;
        }
    }

    .logo-waralaba {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
    }

    .logo-waralaba img {
        margin-right: 10px;
    }

    .card-benefit .card-more>span {
        margin-left: 5px;
    }

    .benefit .row {
        margin-top: 90px;
    }

    #testimonial-section-v3 {
        background-color: #ffffff;
        height: auto;
        overflow: hidden;
    }


    #testimonial-section-v3 .header-title {
        font-size: 32px;
        font-weight: 700;
        line-height: 48px !important;
        margin-top: 10px;
    }

    #testimonial-section-v3 .subtitle {
        color: #a9a4bc;
        font-size: 16px;
        font-weight: 400;
        line-height: 32px;
        margin-top: 10px;
    }

    .card-container {
        width: 90%;
        margin: 0 auto;
        position: relative;
        top: -20px;
        background-color: #fff;
        padding: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        z-index: 2;
    }

    .card-container h3 {
        margin-top: 0;
        font-size: 20px;
        color: #333;
        font-weight: bold;
    }

    .card-container hr {
        margin-top: 20px;
        margin-bottom: 10px;
        border: none;
        border-top: 1px solid #A4A4A4;
    }


    @media only screen and (max-width: 768px) {
        .banner-container {
            height: 150px;
            top: 50px;
        }

        .card-container {
            height: auto;
            top: -10px;
        }

        .search-column {
            width: 100%;
            margin-bottom: 10px;
        }

        .search-box,
        .search-waralaba {
            padding: 8px;
            height: 35px;
        }


        .card-container h3 {
            font-size: 16px;
        }

        .search-label {
            font-size: 14px;
        }
    }

    .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .cardwaralaba .card-img-top {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 5px;
        color: black
    }


    .card.card-home {
        min-height: 320px;
        transition: 0.3s;
        background: #fff;
        border: 1px;
        border-radius: 10px;
        color: #34364a;
        flex-direction: column;
        height: 100px;
        width: 240px;
        padding: 14px;
        position: relative;
        row-gap: 16px;
        margin-top: 5px;
        box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
    }

    .card.card-populer {
        transition: 0.3s;
        background: #fff;
        border: 1px;
        border-radius: 10px;
        color: #34364a;
        height: 90px;
        width: 240px;
        padding-left: 14px;
        position: relative;
        row-gap: 16px;
        box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
    }


    .card .small-circle-img {
        width: 40px;
        height: 40px;
        object-fit: contain;
        border-radius: 60%;
        overflow: hidden;
        margin-top: 18px;
    }

    .card .d-flex.flex-column {
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .card .d-flex.flex-column p {
        font-size: 13px
    }

    .card .d-flex.flex-column h6 {
        margin-top: 20px;
        margin-bottom: 2px;
        font-size: 16px
    }

    .card .waralaba-footer .star-rating {
        align-items: flex-start;
        display: flex;
        flex-wrap: wrap;
        gap: 2px;

    }

    .card .waralaba-footer .star-rating img {
        width: 16px;
        margin-top: 10px;

    }

    .waralaba-responsive {
        display: block;
        height: 150px;
        overflow: hidden;
        padding: 0;
        position: relative;
        width: 100% !important;
    }

    .waralaba-responsive iframe {
        border-radius: 14px;
        width: 100%;
        height: 100%;
    }

    .cardwaralaba {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
    }

    .card .badge {
        font-size: 10px;
        padding: 6px 8px;
        margin: 0;
        border-radius: 4px;
    }

    .sold-count {
        font-size: 12px;
        color: #6c757d;
        margin-left: 5px;
        margin-top: 12px;
    }

    .row-cols-md-5 .col {
        flex: 0 0 50%;
        max-width: 50%;
    }

    @media only screen and (max-width: 768px) {
        .row-cols-md-5 .col {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    @media only screen and (min-width: 768px) {
        .row-cols-lg-5 .col {
            flex: 0 0 20%;
            max-width: 20%;
        }
    }

    @media only screen and (max-width: 768px) {
        .row-cols-lg-5 .col {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    .waralaba-price {
        font-size: 16px;
        font-weight: bold;
        color: #333;
        margin-top: 14px;
    }

    .badge-container {
        position: absolute;
        top: 10px;
        left: 10px;
        z-index: 1;
    }

    .card-home {
        display: block;
        width: 240px;
        margin-right: 15px;
    }

    @media only screen and (max-width: 768px) {
        .card.card-home {
            min-height: 250px;
            transition: 0.3s;
            background: #fff;
            border: 1px;
            border-radius: 10px;
            color: #34364a;
            height: 100px;
            width: calc(100% - 2px);
            margin: 0 2px 2px 0;
            padding: 10px;
            position: relative;
            row-gap: 10px;
            margin-top: 5px;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
        }

        .card .d-flex.flex-column {
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .card .d-flex.flex-column p {
            font-size: 13px
        }

        .card .d-flex.flex-column h6 {
            margin-bottom: 2px;
            font-size: 16px
        }

        .card .waralaba-footer .star-rating {
            align-items: flex-start;
            display: flex;
            flex-wrap: wrap;
            gap: 2px;

        }

        .card .waralaba-footer .star-rating img {
            width: 16px;

        }

        .cardwaralaba .card-img-top {
            width: 100%;
            height: 100px;
            /* Ubah ketinggian sesuai kebutuhan */
            object-fit: cover;
        }

        .waralaba-responsive {
            display: block;
            height: 80px;
            overflow: hidden;
            padding: 0;
            position: relative;
            width: 100% !important;
        }

        .card.card-populer {
            background: #fff;
            border: 1px;
            border-radius: 6px;
            color: #34364a;
            height: 80px;
            width: 180px;
            position: relative;
            row-gap: 10px;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
        }

    }

    .card-home.hidden {
        display: none;
    }

    .waralaba-name {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        color: black
    }

    .two-column-flexbox {
        display: flex;
    }

    .two-column-flexbox .card-column {
        flex: 1;
    }

    .two-column-flexbox .card-column:last-child {
        margin-right: 0;
    }

    .card-column {
        flex: 1;
    }

    .category-carousel {
        display: flex;
        overflow-x: auto;
    }

    .category-item {
        flex: 0 0 auto;
        margin-right: 0px;
        overflow: hidden;
    }

    .category-item img {
        width: 122px;
        height: auto;
        display: block;
    }

    .search-column .search-box {
        border: none;
    }

    .search-column .search-box:focus {
        outline: none;
    }

    .custom-color {
        color: #04B2C2;
        font-weight: 700;
    }

    .card-img-top {
        height: 400px;
        object-fit: cover;
    }

    .card {
        position: relative;
    }

    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 20%;
        backdrop-filter: blur(3px) brightness(0.7);
    }

    .card-body {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        color: white;
        text-align: center;
        z-index: 1;
    }

    .logo-container {
        width: 50px;/ height: 50px;
        border-radius: 50%;
        overflow: hidden;
        margin-right: 16px;
    }

    .logo {
        width: 100%;
        height: auto;
    }

    @media only screen and (max-width: 768px) {
        /* Adjustments for smaller screens */

        .hero {
            padding: 50px 0 !important;
        }

        .hero .container {
            padding: 0 15px;
        }

        .col-lg-6.col-12.pb-5 {
            padding-bottom: 30px !important;
        }

        .carousel-item img {
            height: auto;
        }

        .carousel-item .logo-container {
            margin-top: 10px;
        }

        .carousel-item .row.w-100 .col-6 {
            flex: 1 1 50%;
            max-width: 50%;
        }

        .carousel-item .row.w-100 .col-12 {
            margin-top: 10px;
        }

        .card-container {
            width: 100%;
            padding: 20px;
        }

        .card.card-home {
            width: 100%;
            margin-right: 0;
        }

        .testimonial-section .container {
            padding: 50px 15px !important;
        }

        .mb-4 .container-scrollable {
            padding: 0 15px;
        }
    }
    </style>
    @endpush
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 pb-5 d-flex flex-column justify-content-center align-items-start">
                    <h1 class="fw-bold hero-text mb-4">
                        Cara mudah untuk memiliki <span class="custom-color">waralaba keinginanmu</span>
                    </h1>
                    <p>Solusi untuk memiliki waralaba yang sesuai dengan diri Anda, dengan waralaba yang terpercaya di
                        Indonesia.</p>
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('register') }}" class="btn btn-cta btn-block mt-4 me-2">
                                Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 pb-5 d-flex justify-content-end">
                    <div class="d-none d-md-block">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($waralabas as $key => $waralaba)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <div class="card position-relative" style="width: 30rem;">
                                        <img src="{{ $waralaba->image_url_1 }}" class="card-img-top"
                                            alt="Waralaba Image" style="margin-top: 50px;">
                                        <div class="overlay"></div>
                                        <div class="position-absolute bottom-0 start-0 p-3 d-flex align-items-center">
                                            <div class="logo-container mr-3">
                                                <img src="{{ $waralaba->logo }}" class="logo" alt="Logo">
                                            </div>
                                            <div class="row w-100">
                                                <div class="col-6">
                                                    <h6 class="waralaba-name text-white mb-0">
                                                        <b>{{ substr($waralaba->waralaba_name, 0, 19) }}</b>
                                                    </h6>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <div class="text-white" style="font-size: 17px; font-weight: bold;">
                                                        Rp. {{ number_format(floatval($waralaba->price), 0, ',', '.') }}
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <p class="text-white mb-0">{{ $waralaba->concept }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="testimonial-section-v3">
        <div class="container">
            <div class="row d-flex justify-content-start align-items-center gx-0">
                <div class="col-lg-5 col-12">
                    <img src="{{ asset('assets/frontend/image/section2.png') }}" alt="Deskripsi Gambar"
                        class="img-fluid" style="width: 80%;">
                </div>
                <div class="col-lg-6 col-12">
                    <h1 class="header-title mb-0 text-black">
                        Bergabung dan bertumbuh bersama kami
                    </h1>
                    <p class="subtitle text-black">
                        Bergabunglah dan rasakan pengalaman berbisnis waralaba luar biasa dengan lebih dari 200 waralaba
                        terpercaya. Dukungan dan solusi terbaik kami membantu Anda mencapai kesuksesan.
                    </p>
                    <div class="col-lg-7 mt-3">
                        <div class="logo-waralaba">
                            <img src="{{ asset('assets/frontend/image/logo/gacoan.png') }}" alt="Gacoan" width="90">
                            <img src="assets/frontend/image/logo/tehdesa.png" alt="Teh Desa" width="90">
                            <img src="assets/frontend/image/logo/bangor.png" alt="Burger Bangor" width="90">
                            <img src="assets/frontend/image/logo/mixue.png" alt="Mixue" width="90">
                            <img src="assets/frontend/image/logo/roketchiken.png" alt="Roket Chiken" width="90">
                            <img src="assets/frontend/image/logo/geprekjuara.png" alt="Geprek Juara " width="90">
                        </div>
                        <div class="logo-waralaba">
                            <img src="{{ asset('assets/frontend/image/logo/rotio.png') }}" alt="Roti O" width="90">
                            <img src="assets/frontend/image/logo/mcd.png" alt="MCD" width="90">
                            <img src="assets/frontend/image/logo/kfc.png" alt="KFC" width="90">
                            <img src="assets/frontend/image/logo/gepreksai.png" alt="Geprek Sai" width="90">
                            <img src="assets/frontend/image/logo/richeese.png" alt="Richeese" width="90">
                            <img src="assets/frontend/image/logo/pakgembus.png" alt="Ayam Gepuk Pak Gembus" width="90">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-4">
        <hr style="border-top: 2px solid #e2e2eb; margin-top: 50px;">
        <div class="container-scrollable">
            <div class="container">
                <h5 class="card-title mt-5 mb-3">Waralaba Unggulan Kami</h5>
                <div class="row row-cols-1 row-cols-lg-5 g-4">
                    @foreach ($waralabas->take(10) as $waralaba)
                    <div class="col">
                        <a href="{{ route('waralaba', $waralaba->id) }}" class="text-decoration-none">
                            <div class="card card-home">
                                <div class="waralaba-responsive">
                                    @if ($waralaba->soldCount() > 3)
                                    <div class="badge-container">
                                        <div class="badge bg-success"> <i class="fas fa-fire"
                                                style="color: yellow;"></i>
                                            Terlaris</div>
                                    </div>
                                    @endif
                                    <div class="cardwaralaba" id="card">
                                        <img src="{{ $waralaba->image_url_1 }}" class="card-img-top"
                                            alt="Gambar {{ $waralaba->waralaba_name }}">
                                    </div>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <img class="small-circle-img" src="{{ $waralaba->logo }}" alt="Waralaba Image">
                                    <div class="d-flex flex-column">
                                        <h6 class="waralaba-name"><b>{{ substr($waralaba->waralaba_name, 0, 19) }}</b>
                                        </h6>
                                        <p>{{ $waralaba->concept }}</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="waralaba-price">
                                        Rp. {{ number_format(floatval($waralaba->price), 0, ',', '.') }}
                                    </div>
                                </div>
                                <div class="waralaba-footer mt-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="star-rating">
                                            @for ($i = 0; $i < 5; $i++) @if ($i < $waralaba->rating)
                                                <img src="{{ asset('assets/frontend/image/ic_star.svg') }}"
                                                    alt="ic_star">
                                                @else
                                                <img src="{{ asset('assets/frontend/image/ic_star_none.svg') }}"
                                                    alt="ic_star_none">
                                                @endif
                                                @endfor
                                        </div>
                                        <div class="sold-count">
                                            {{ $waralaba->soldCount() }} Terjual
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @push('addonScript')
    <script src="https://d17ivq9b7rppb3.cloudfront.net/build/commons_script-eb16678ced.js"></script>
    @endpush
</x-user-layout>