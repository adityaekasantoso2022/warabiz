<x-user-layout title="WaraCareer-Detail" active="Detail">

    @push('addonStyle')
    <style>
        body {
            background: #ffffff !important;
        }

        .profil-name {
            color: #131313 !important;
        }

        .navbar-light .navbar-nav .nav-link {
            color: rgba(19, 19, 19, 0.6);
        }

        .navbar .navbar-nav a:hover.btn-signup {
            color: white !important;
        }

        .navbar .navbar-nav a:hover {
            color: #131313 !important;
        }

        .navbar .navbar-nav .active {
            color: #ffffff !important;
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
            box-shadow: 0 0 5px #3ECAB0;
        }

        .nav-pills .nav-link {
            background-color: #0A2048;
            border: 0;
            border-radius: 0.25rem;
            color: rgba(255, 255, 255, 0.6);
        }

        .navbar-expand-lg.scrolled .nav-link.active {
            color: #131313 !important;
        }

        .articel .title {
            font-weight: bold;
            font-size: 25px;
            line-height: 150%;
            color: #131313;
        }

        .articel .thumbnail {
            width: 100%;
            height: 597px;
            object-fit: cover;
            border-radius: 8px;
        }

        span.post-read,
        span.readingtime {
            color: rgba(0, 0, 0, .54);
        }

        .dot:after {
            content: "\00B7";
            margin-left: 3px;
            margin-right: 3px;
        }

        .navbar-expand-lg {
            background-color: white !important;
            box-shadow: -1.5px 4px 16px rgb(118 126 148 / 20%);
            transition: background-color 200ms linear;
        }

        .articel .content p {
            font-size: 1.25rem;
            line-height: 150%;
            color: #131313;
        }

        .share-buttons {
            margin-top: 20px;
        }

        .share-buttons a {
            color: #fff;
            background-color: #009BB8;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            margin-right: 10px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .share-buttons a:hover {
            background-color: #027186;
        }

        .share-buttons a i {
            font-size: 20px;
        }

        @media (max-width: 767px) {
            .articel .thumbnail {
                height: 200px;
            }
        }

        .card {
            margin-bottom: 20px;
            border: none;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card img {
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body {
            padding: 20px;
        }

        .read-more-link {
            display: block;
            text-align: center;
            color: #ffffff;
            background: #009BB8;
            margin-top: 20px;
            text-decoration: none;
            border-radius: 5px;
            padding: 10px 20px;
            transition: all 0.3s;
        }

        .read-more-link:hover {
            color: #ffffff;
            border-color: #555555;
        }

        /* Tambahkan gaya untuk teks tautan di sidebar */
        .sidebar .card-title,
        .sidebar .card-text {
            color: #000;
        }

        .sidebar .read-more-link {
            color: #ffffff;
            text-decoration: none;
        }
        .job-info {
            border-top: 1px solid #ddd;
            margin-top: 20px;
            padding-top: 20px;
        }

        .apply-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
    @endpush

    <section class="articel container" style="padding-top: 130px; padding-bottom: 80px">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <section class="article">
                        <h1 class="title">Burger Bangor</h1>
                        <p>
                            <span class="post-date">
                                Jln. Kenangan Terindah No.1, Kec. Janda Kembang
                            </span>
                        </p>
                        <br>
                        <img src="https://res.cloudinary.com/dvgmjv4ie/image/upload/v1707461657/warabiz-cloud/BurgerBangor/pt-creatura-kreasi-indonesia-burger-bangor-bsd1623063339-s_nblxx2.jpg" class="img-fluid" alt="Gambar"
                            style="max-width: 70%;">
                        <div class="content mt-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error non asperiores, placeat magnam laudantium deleniti! Blanditiis corrupti maxime repellat tempora.
                        </div>
                    </section>
                </div>
                <div class="col-md-4">
                    {{-- <div class="sidebar">
                        @php
                        $count = 0;
                        @endphp
                        @foreach($otherArticles as $otherArticle)
                        @if($count < 3)
                        <div class="card">
                        <a href="{{ route('waraedu-detail', ['id' => $otherArticle->id]) }}"> 
                        <img src="{{ $otherArticle->image_url }}" class="card-img-top" alt="gambar">
                        </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $otherArticle->title }}</h5>
                                <p class="card-text">{{ substr($otherArticle->article, 0, 120) }}..</p>
                            </div>
                        </div>
                        @endif
                        @php
                        $count++;
                        @endphp
                        @endforeach
                        @if(count($otherArticles) > 3)
                        <a href="{{ route('waraedu') }}" class="read-more-link">Baca Lainnya</a>
                        @endif
                    </div> --}}
                </div>
                <div class="col-md-4">
                    <h6><strong>Deskripsi Pekerjaan:</strong></h6>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae justo a libero malesuada commodo.</p>
                    <br>
                    <p><strong>Persyaratan:</strong></p>
                    <br>
                    <ul>
                        <li>Pendidikan minimal S1 Teknik Informatika</li>
                        <br>
                        <li>Pengalaman kerja minimal 2 tahun</li>
                        <br>
                        <li>Menguasai HTML, CSS, dan JavaScript</li>
                    </ul>
                    <br>
                    <div class="job-info">
                        <p><strong>Lokasi:</strong> Jakarta</p>
                        <br>
                        <p><strong>Gaji:</strong> Rp. 10.000.000 - Rp. 15.000.000 per bulan</p>
                        <br>
                        <p><strong>Tanggal Posting:</strong> 10 Februari 2024</p>
                    </div>
                    <br>
                    <a href="#" class="apply-btn">Lamar Sekarang</a>
                </div>
            </div>
        </div>
    </section>
</x-user-layout>