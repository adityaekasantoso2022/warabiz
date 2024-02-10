<x-user-layout title="Warabiz-Home" active="home">
    @push('addonStyle')
    <style>
        body {
            background: #dae3ec !important;
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
            color: #131313
        }

        .bgTheme {
            background: #4F94D7 !important;
        }

        .navbar .btn-signup,
        .navbar-expand-lg .login {
            border-radius: 12px;
            padding: 7.6px 32px 8px 32px;
            color: white;
        }

        .hero h1 {
            font-weight: 500 !important;
            letter-spacing: 1px;
            line-height: 150%;
        }

        .nav-pills .nav-link.active {
            background-color: #3ECAB0;
            box-shadow: 0 0 5px #3ECAB0
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

        .line-text {
            text-align: center;
            width: auto;
        }

        .line-text p.text-white {
            position: relative;
            display: inline-block;
            font-size: 18px;
        }

        .line-text p.text-white::before,
        .line-text p.text-white::after {
            content: " ";
            position: absolute;
            border-bottom: 1px solid #3ECAB0;
            width: 100px;
            top: 50%;
        }

        .line-text p.text-white::before {
            left: 20%;
        }

        .line-text p.text-white::after {
            right: 20%;
        }

        @media (max-width: 756px) {

            .line-text p.text-white::before,
            .line-text p.text-white::after {
                width: 50px;
            }

            .line-text p.text-white::before {
                left: 10%;
            }

            .line-text p.text-white::after {
                right: 10%;
            }
        }

        .card.card-home {
            min-height: 365px;
            transition: 0.3s;
        }

        .card.card-home:hover {
            box-shadow: 0 0 10px #4F94D7 !important;
        }

        .card-img-top {
            width: 100%;
            height: 250px;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 14px;
        }

        @media (min-width: 756px) {
            .hero {
                height: 85vh !important;
            }

            .card-img-top {
                height: 180px !important;
            }
        }

        .search-class .input-group input {
            background: #0A2048;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px !important;
            padding: 16px 20px 16px 32px !important;
            color: white;
        }

        .search-class .input-group input:focus {
            box-shadow: 0 0 5px #4F94D7 !important;
        }

        .search-class .input-group .right-button button {
            background: #4F94D7;
            border-radius: 12px !important;
            top: 0.35rem;
            font-weight: 500;
            border: 0px;
        }

        .search-class .input-group .right-button button:hover {
            background: #4886c3;
        }

        .search-class .input-group .right-button button:active,
        .search-class .input-group .right-button button:focus {
            box-shadow: 0 0 5px #4F94D7 !important;
        }

        .right-button {
            right: 0 !important;
            position: absolute !important;
            padding: 0 0.6rem;
            z-index: 999;
        }

        .card-container,
        .course-card,
        .course-card-responsive {
            background: #fff;
            border: none;
            border-radius: 14px;
            box-sizing: border-box;
            color: #34364a;
            display: flex;
            flex-direction: column;
            height: 320px;
            width: 300px;
            padding: 25px;
            position: relative;
            row-gap: 16px;
            margin-top: 30px
        }

        .pricing .item-pricing {
            background: #fff;
            border-radius: 16px;
            padding: 15px;
            /* Adjust the padding as per your requirement */
        }

        .course-card .course-detail .course-name,
        .course-card-responsive .course-detail .course-name,
        .line-clamp,
        .line-clamp-1 {
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
        }

        .course-card .course-detail .course-name {
            color: #34364a;
            font-size: 16px;
            /* Adjust the font size as per your requirement */
            font-weight: 700;
            line-height: 24px;
            /* Adjust the line height as per your requirement */
            min-height: 10px;
            position: relative;
            z-index: 80 !important;
        }

        .course-card .course-footer {
            align-items: baseline;
            display: flex;
            gap: 4px;
            justify-content: space-between;
        }

        .course-card .course-footer .star-rating {
            align-items: flex-start;
            display: flex;
            flex-wrap: wrap;
            gap: 2px;
        }

/* For mobile devices */
/* For mobile devices */
/* For mobile devices */
@media only screen and (max-width: 991.100px) {
    .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
        padding-right: 0px; /* Add padding to the right side of each column */
        padding-left: 0px; /* Add padding to the left side of each column */
    }

    .course-card {
        width: calc(100% - 10px); /* Adjust the width to occupy full width with padding */
        margin-bottom: 20px; /* Add bottom margin for spacing between rows */
    }
    
    .course-card img.small-circle-img {
        width: 35px; /* Reduce image width */
        height: 30px; /* Reduce image height */
    }

    .course-card .d-flex.flex-column {
        margin-top: 3px; /* Adjust top margin */
        margin-bottom: 3px; /* Adjust bottom margin */
    }

    .course-card .d-flex.flex-column h6 {
        font-size: 13px; /* Reduce font size for headings */
    }

    .course-card .d-flex.flex-column p {
        font-size: 12px; /* Reduce font size for paragraphs */
    }
}
/* For laptops and larger devices */
@media only screen and (min-width: 992px) {
    .course-card {
        width: 300px; /* Keep the width as per your requirement */
    }
}

        .course-card .course-footer .star-rating img {
            width: 22px;
            /* Adjust the width as per your requirement */
        }

        .embed-responsive {
            display: block;
            height: 20vh;
            /* Adjust the height as per your requirement */
            overflow: hidden;
            padding: 0;
            position: relative;
            width: 100% !important;
        }

        .embed-responsive iframe {
            border-radius: 14px;
            /* Adjust the border radius as per your requirement */
            width: 100%;
            height: 20vh;
            /* Adjust the height as per your requirement */
        }

        .plyr__video-embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        .small-circle-img {
            width: 50px;
            /* Sesuaikan lebar lingkaran sesuai kebutuhan */
            height: 50px;
            /* Sesuaikan tinggi lingkaran sesuai kebutuhan */
            object-fit: contain;
            /* Membuat gambar tetap proporsional dan terlihat sepenuhnya di dalam lingkaran */
            border-radius: 50%;
            /* Membuat gambar menjadi lingkaran */
            overflow: hidden;
            /* Menghilangkan bagian gambar yang keluar dari lingkaran */
        }

        .small-circle-img {
            width: 50px;
            /* Sesuaikan lebar lingkaran sesuai kebutuhan */
            height: 50px;
            /* Sesuaikan tinggi lingkaran sesuai kebutuhan */
            object-fit: contain;
            /* Membuat gambar tetap proporsional dan terlihat sepenuhnya di dalam lingkaran */
            border-radius: 50%;
            /* Membuat gambar menjadi lingkaran */
            overflow: hidden;
            /* Menghilangkan bagian gambar yang keluar dari lingkaran */
        }

        .d-flex.flex-column {
            margin-top: 5px;
            /* Atur jarak atas */
            margin-bottom: 5px;
            /* Atur jarak bawah */
        }

        .d-flex.flex-column h6,
        .d-flex.flex-column p {
            margin: 0;
            /* Menghilangkan margin atas dan bawah dari elemen h6 dan p */
        }
    </style>
    @endpush

    {{-- Hero --}}
    <section class="hero text-center d-flex align-items-center justify-content-center ">
        <div class="content">
            <h1 class="text-white fw-bolder m-0 px-2 display-4">
                Buka waralaba <br><b> Semudah Checkout Belanja Online</b>
            </h1>
            <form action="{{ route('home') }}" method="GET" class="search-class container mt-5">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari waralaba keinginanmu.." name="search"
                        aria-label="Cari waralaba keinginanmu.." aria-describedby="button-addon2"
                        value="{{ request('search') }}">
                    <div class="right-button">
                        <button class="btn btn-primary " type="submit" id="button-addon2">Cari</button>
                    </div>
                </div>
            </form>
            <ul class="nav nav-pills mx-auto justify-content-center gap-3 mt-4" id="pills-tab" role="tablist">

                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-semua-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-semua" type="button" role="tab" aria-controls="pills-semua"
                        aria-selected="true">Semua</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-kuliner-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-kuliner" type="button" role="tab" aria-controls="pills-kuliner"
                        aria-selected="false">Kuliner</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-fashion-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-fashion" type="button" role="tab" aria-controls="pills-fashion"
                        aria-selected="false">Fashion</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-jasa-tab" data-bs-toggle="pill" data-bs-target="#pills-jasa"
                        type="button" role="tab" aria-controls="pills-jasa" aria-selected="false">Jasa</button>
                </li>
            </ul>
        </div>
    </section>

    <section class="justify-content">
    <div class="container-scrollable">
        <div class="container">
            <div class="row">
                @foreach ($waralabas as $waralaba)
                <div class="col-md-6 col-lg-3 mb-3">
                    <a href="{{ route('waralaba', $waralaba->id) }}" class="text-decoration-none">
                        <div class="course-card">
                            <div class="embed-responsive embed-responsive-16by9 video-iframe">
                                <div class="plyr__video-embed" id="player">
                                    <img src="{{ $waralaba->image_url_1 }}" class="img-fluid"
                                        alt="Gambar {{ $waralaba->waralaba_name }}">
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <img class="small-circle-img" src="{{ $waralaba->logo }}" alt="Waralaba Image">
                                <div class="d-flex flex-column">
                                    <h6><b>{{ $waralaba->waralaba_name }}</b></h6>
                                    <p>{{ $waralaba->concept }}</p>
                                </div>
                            </div>
                            <h6>Rp {{ $waralaba->price }}</h6>
                            <div class="course-footer mt-auto">
                                <div class="star-rating">
                                    @for ($i = 0; $i < 5; $i++)
                                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"
                                        alt="ic_star">
                                    @endfor
                                    <span>(52)</span>
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

    {{-- End Hero --}}

    </section>
    {{-- End home --}}

    @push('addonScript')
    <script>
        let slideIndex = 1;

        $nav.toggleClass('scrolled', $(this).scrollTop() > $hero.height());
        $(function () {
            $(document).scroll(function () {
                $nav.toggleClass('scrolled', $(this).scrollTop() > $hero.height());
            });
    </script>
    @endpush
</x-user-layout>