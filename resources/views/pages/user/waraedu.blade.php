<x-user-layout title="WaraEdu" active="waraedu">
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

        @media (min-width: 756px) {
            .hero {
                height: 85vh !important;
            }

            .card-img-top {
                height: 180px !important;
            }
        }

        .card-container,
        .waraedu-card,
        .waraedu-card-responsive {
            background: #fff;
            border: none;
            border-radius: 10px;
            box-sizing: border-box;
            color: #34364a;
            display: flex;
            flex-direction: column;
            height: auto;
            width: 360px;
            position: relative;
            row-gap: 16px;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .waraedu-card img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
            margin-bottom: 1px;
        }

        .waraedu-card .d-flex.flex-column {
            padding: 0 23px 23px;
        }

        .read-more {
            color: #009BB8;
            text-decoration: none;
            font-weight: 440;
            margin-top: 10px;
        }
    </style>
    @endpush

    <section class="justify-content" style="margin-top: 100px;">
        <div class="container-scrollable">
            <div class="container">
                <div class="row">
                    @foreach($articles as $article)
                    <div class="col-md-6 col-lg-3 mb-3">
                        <a href="{{ route('waraedu-detail', $article->id) }}" class="text-decoration-none">
                            <div class="waraedu-card">
                                <img src="{{ $article->image_url }}" alt="Gambar">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column">
                                        <h5><b>{{ $article->title }}</b></h5>
                                        <p>{{ $article->category }}</p>
                                        <br>
                                        <div class="d-flex align-items-center">
                                            <p>{{ substr($article->article, 0, 120) }}...</p>
                                        </div>
                                        <div class="read-more">
                                            <p>Selengkapnya ></p>
                                        </div>
                                        <hr> <!-- Menambahkan garis -->
                                        <p>
                                        <i class="far fa-calendar-alt"></i> {{ date('j F Y', strtotime($article->created_at)) }}
                                        </p>
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