<x-user-layout title="Warabiz-Home" active="home">
    @push('addonStyle')
    <style>
    body {
        background: #fbfbfb !important;
    }

    .banner-container {
        position: relative;
        width: 100%;
        height: 360px;
        top: 60px;
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

    .nav-pills .nav-link.active {
        background-color: #3ECAB0;
        box-shadow: 0 0 5px #3ECAB0;
    }

    .nav-pills .nav-link {
        background-color: #0A2048;
        border: 0;
        border-radius: 0.25rem;
        color: rgba(255, 255, 255, 0.6);
    }

    .navbar-expand-lg {
        background-color: white !important;
        box-shadow: -1.5px 4px 16px rgb(118 126 148 / 20%);
        transition: background-color 200ms linear;
    }

    .card-container {
        width: 90%;
        margin: 0 auto;
        position: relative;
        top: -20px;
        border-radius: 10px;
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
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 5px;
        color: black;
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
        font-size: 13px;
    }

    .card .d-flex.flex-column h6 {
        margin-top: 20px;
        margin-bottom: 2px;
        font-size: 16px;
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

    .card-home.hidden {
        display: none;
    }

    .waralaba-name {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        color: black;
    }

    .two-column-flexbox {
        display: flex;
    }

    .two-column-flexbox .card-column {
        flex: 1;
        margin-right: 10px;
    }

    .two-column-flexbox .card-column:last-child {
        margin-right: 0;
    }

    .card-column {
        flex: 1;
        margin-right: 10px;
    }

    .category-carousel {
        display: flex;
        overflow-x: auto;
    }

    .category-item {
        flex: 0 0 auto;
        margin-right: 10px;
        border: 2px solid #ccc;
        border-radius: 10px;
        overflow: hidden;
    }

    .category-item img {
        width: 100px;
        height: auto;
        display: block;
    }

    .search-column .search-box {
        border: none;
    }

    .search-column .search-box:focus {
        outline: none;
    }

    .line-text {
        text-align: center;
        width: auto;
    }

    .line-text p.text-white {
        position: relative;
        display: inline-block;
        font-size: 18px;
    }

    .line-text p.text-white::before {
        content: " ";
        position: absolute;
        border-bottom: 1px solid #3ECAB0;

        width: 100px;
        left: 30%;
        top: 50%;
    }

    .line-text p.text-white::after {
        content: " ";
        position: absolute;
        border-bottom: 1px solid #3ECAB0;

        width: 100px;
        right: 30%;
        top: 50%;
    }
    </style>
    @endpush

    <section class="hero text-center d-flex align-items-center justify-content-center">
        <div class="content">
            <div class="line-text">
                <p class="text-white">
                    Kategori
                </p>
            </div>
            <h1 class="text-white fw-bolder m-0 px-2 display-6">
                Menampilkan waralaba yang cocok dalam bidang <br>{{ $category->category_name }}
            </h1>
        </div>
    </section>

    <section class="mt-4 mb-4">
        <div class="container-scrollable">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-5 g-4">
                    @foreach ($waralabas as $waralaba)
                    <div class="col">
                        <a href="{{ route('waralaba', $waralaba->id) }}" class="text-decoration-none">
                            <div class="card card-home">
                                <div class="waralaba-responsive">
                                    @if ($waralaba->soldCount() > 3)
                                    <div class="badge-container">
                                        <div class="badge bg-success">Terlaris</div>
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
</x-user-layout>