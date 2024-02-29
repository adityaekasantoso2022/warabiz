<x-user-layout title="Waraedu-{{ $article->title }}" active="artikel">

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
            font-size: 14px;
            margin-top:20px;
            margin-bottom:15px;

        }
        .articel .content li {
            font-size: 16px;
            margin-bottom:8px;

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
            padding: 24px;
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
    </style>
    @endpush

    <section class="articel container" style="padding-top: 130px; padding-bottom: 80px">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <section class="article">
                        <h1 class="title">{{ $article->title }}</h1>
                        <p>
                            <span class="post-date">
                                <time class="post-date">
                                    Diposting pada: {{ ($article->created_at)->format('d/m/Y H:i') }} WIB
                                    <span class="dot"></span>
                                    <span class="readingtime">Admin Warabiz</span>
                                </time>
                            </span>
                        </p>
                        <!-- Share buttons -->
                        <div class="share-buttons mt-4">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}"
                                target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::url()) }}&text={{ urlencode($article->title) }}"
                                target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://api.whatsapp.com/send?text={{ urlencode($article->title . ' ' . Request::url()) }}"
                                target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?url={{ urlencode(Request::url()) }}&title={{ urlencode($article->title) }}"
                                target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                        <br>
                        <img src="{{ $article->image_url }}" class="img-fluid" alt="Gambar"
                            style="max-width: 100%;">
                        <div class="content">
                        {!! $article->article !!}
                        </div>
                    </section>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
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
                                <h6 class="card-title">{{ $otherArticle->title }}</h6>
                                <p class="card-text">{{ Str::limit(strip_tags($otherArticle->article), 170) }}..</p>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-user-layout>
