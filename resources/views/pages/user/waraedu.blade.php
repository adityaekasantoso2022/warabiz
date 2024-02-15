<x-user-layout title="WaraEdu" active="waraedu">
    @push('addonStyle')
    <style>
        /* Style untuk latar belakang dan elemen-elemen lainnya */
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
            color: #131313;
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

        .navbar-expand-lg {
            background-color: white !important;
            box-shadow: -1.5px 4px 16px rgb(118 126 148 / 20%);
            transition: background-color 200ms linear;
        }

        /* Style untuk kartu artikel */
        .article-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            overflow: hidden;
        }

        .article-card img {
            width: 100%;
            height: 180px; /* Ubah tinggi gambar sesuai kebutuhan */
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .article-card .card-body {
            padding: 20px;
        }

        .article-card h5 {
            font-weight: bold;
            color: #131313;
            margin-bottom: 10px;
        }

        .article-card p {
            color: #666;
            margin-bottom: 15px;
        }

        .article-card .read-more {
            color: #009BB8;
            text-decoration: none;
            font-weight: 500;
        }
    </style>
    @endpush

    <section style="margin-top: 140px;">
        <div class="container">
            <div class="row">
                @foreach($articles as $article)
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="article-card">
                            <a href="{{ route('waraedu-detail', $article->id) }}" class="text-decoration-none">
                                <img src="{{ $article->image_url }}" alt="Gambar Artikel">
                                <div class="card-body">
                                    <h5>{{ substr($article->title, 0, 55) }}..</h5>
                                    <p>{{ $article->category }}</p>
                                    <p>{{ substr($article->article, 0, 120) }}...</p>
                                    <a href="{{ route('waraedu-detail', $article->id) }}" class="read-more">Selengkapnya ></a>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-user-layout>
