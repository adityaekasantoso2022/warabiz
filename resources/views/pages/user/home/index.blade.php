<x-user-layout title="Warabiz-Home" active="home">
    @push('addonStyle')
    <style>
        body {
            background: #DAE3EC !important;
        }

        .banner-container {
            position: relative;
            width: 100%;
            height: 250px;
            top: 60px;
        }

        .card-container {
            height: 200px;
            top: -30px;
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

        .banner-container .banner-slide img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-container {
            width: 90%;
            height: 270px;
            margin: 0 auto;
            position: relative;
            top: -50px;
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

        .search-container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .search-label {
            margin-top: 20px;
            text-align: left;
            font-weight: 600;
        }

        .search-box {
            width: 50%;
            margin-top: 5px;
            margin-bottom: 5px;
            padding: 10px;
            border-radius: 2px;
            box-sizing: border-box;
            outline: none;
        }

        .search-waralaba {
            width: 100%;
            margin-top: 5px;
            padding: 10px 20px;
            border-radius: 2px;
            box-sizing: border-box;
            outline: 1px solid #D5D5D5;
            height: 40px;
        }

        .search-column {
            width: calc(33.33% - 10px);
        }

        .form-control::placeholder {
            padding-left: 10px;
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

            .input-group-append {
                margin-left: 0;
                /* Menghilangkan margin kiri untuk responsif lebih baik */
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

        .card-img-top {
            object-fit: cover;
            height: 200px;
            /* Sesuaikan tinggi gambar sesuai kebutuhan */
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .card.card-home {
            min-height: 250px;
            transition: 0.3s;
            background: #fff;
            border: none;
            border-radius: 10px;
            box-sizing: border-box;
            color: #34364a;
            display: flex;
            flex-direction: column;
            height: 300px;
            width: 100%;
            padding: 18px;
            position: relative;
            row-gap: 16px;
            margin-top: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.03);
        }

        .card .small-circle-img {
            width: 50px;
            height: 50px;
            object-fit: contain;
            border-radius: 50%;
            overflow: hidden;
        }

        .card .d-flex.flex-column {
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .card .d-flex.flex-column h6,
        .card .d-flex.flex-column p {
            margin: 0;
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

        .waralaba-responsive {
            display: block;
            height: 20vh;
            overflow: hidden;
            padding: 0;
            position: relative;
            width: 100% !important;
        }

        .waralaba-responsive iframe {
            border-radius: 14px;
            width: 100%;
            height: 20vh;
        }

        .cardwaralaba {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }
        
    </style>
    @endpush

    <section class="mt-4 mb-4">
        <div class="banner-container">
            <div class="banner-slide">
                <img src="{{ asset('assets/frontend/image/backrground-fitur.png') }}" alt="Banner 1">
            </div>
        </div>
        <div class="card-container">
            <img src="{{ asset('assets/frontend/image/sukses.svg') }}" alt="Small Image"
                style="width: 30px; height: auto; vertical-align: middle;">
            <h3 style="display: inline; vertical-align: middle; margin-left: 10px;">Cari peluang bisnis franchise dan
                kemitraan di Warabiz</h3>
            <hr>
            <div class="search-container">
                <div class="search-column">
                    <div class="search-label">Tipe Franchise</div>
                    <div class="input-group">
                        <select class="search-box">
                            <option value="" selected disabled>Pilih tipe franchise</option>
                            <option value="Restoran">Restoran</option>
                            <option value="Restoran">Semi Resto</option>
                            <option value="Gerai">Gerai</option>
                            <option value="Booth">Booth</option>
                        </select>
                    </div>
                </div>
                <div class="search-column">
                    <div class="search-label">Harga Franchise</div>
                    <input type="text" class="search-box" placeholder="Masukkan harga franchise">
                </div>
                <div class="search-column">
                    <div class="search-label">Lokasi</div>
                    <input type="text" class="search-box" placeholder="Masukkan lokasi">
                </div>
            </div>
            <div class="form-group mt-3">
                <div class="input-group">
                    <input type="text" name="search" id="search"
                        class="form-control border px-2 py-2 rounded-3 shadow-none" placeholder="Cari di warabiz">
                    <div class="input-group-append" style="margin-left: 15px;">
                        <button class="btn btn-primary" type="button"
                            style="background-color: #009BB8; border: none; height: 40px;">
                            <i class="fa fa-search" style="color: white;"></i> Search
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-4 mb-4">
        <div class="container-scrollable">
            <div class="container">
                <div class="row">
                    @foreach ($waralabas as $waralaba)
                    <div class="col-md-6 col-lg-3 mb-3">
                        <a href="{{ route('waralaba', $waralaba->id) }}" class="text-decoration-none">
                            <div class="card card-home">
                                <div class="waralaba-responsive waralaba-responsive-16by9 waralaba-iframe">
                                    <div class="cardwaralaba" id="card">
                                        <img src="{{ $waralaba->image_url_1 }}" class="img-fluid"
                                            alt="Gambar {{ $waralaba->waralaba_name }}">
                                    </div>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <img class="small-circle-img" src="{{ $waralaba->logo }}" alt="Waralaba Image">
                                    <div class="d-flex flex-column">
                                        <h6><b>{{ $waralaba->waralaba_name }}</b></h6>
                                        <p>{{ $waralaba->concept }}</p>
                                        <div class="waralaba-footer mt-auto">
                                            <div class="star-rating">
                                                @for ($i = 0; $i < $waralaba->rating; $i++)
                                                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"
                                                        alt="ic_star">
                                                    @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6><b>Rp. {{ number_format(floatval($waralaba->price), 0, ',', '.') }}</b></h6>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-user-layout>