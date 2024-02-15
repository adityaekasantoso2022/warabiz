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
            border-radius: 13px;
            box-sizing: border-box;
            color: #34364a;
            display: flex;
            flex-direction: column;
            height: auto;
            width: 360px; /* Perlebar ukuran card */
            padding: 25px;
            position: relative;
            row-gap: 16px;
            margin-top: 30px;
            margin-bottom: 30px; /* Tambahkan margin bawah di sini */
        }

        /* For mobile devices */
        @media only screen and (max-width: 991.100px) {
            .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%;
                padding-right: 0px; /* Add padding to the right side of each column */
                padding-left: 0px; /* Add padding to the left side of each column */
            }

            .waraedu-card {
                width: calc(100% - 10px); /* Adjust the width to occupy full width with padding */
                margin-bottom: 20px; /* Add bottom margin for spacing between rows */
            }

            .waraedu-card .d-flex.flex-column h6 {
                font-size: 13px; /* Reduce font size for headings */
            }

            .waraedu-card .d-flex.flex-column p {
                font-size: 12px; /* Reduce font size for paragraphs */
            }
        }

        /* For laptops and larger devices */
        @media only screen and (min-width: 992px) {
            .waraedu-card {
                width: 360px; /* Keep the width as per your requirement */
            }
        }

        .d-flex.flex-column h6,
        .d-flex.flex-column p {
            margin: 0;
            /* Menghilangkan margin atas dan bawah dari elemen h6 dan p */
        }
    </style>
    @endpush

    <section class="py-5" style="margin-top: 10px">
        <div class="container">
            <div class="mt-5 row pricing testimonials mentors checkout gy-4" id="reviews">
                <div class="col-lg-4 col-md-5 col-12 p-md-0 offset-lg-1">
                    <div class="d-block" id="courseCardCheckout"
                        style="position: relative; transition: all 600ms ease-in-out 0s; top: 0px;">
                        <div class="course-card">
                            <div class="course-detail">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a>
                                        <h2 class="course-name line-clamp-2">
                                            {{ $article->image_url }}
                                        </h2>
                                    </a>
                                    <button onclick="copyPageURL()" class="share-button">
                                        <i class="fas fa-share" style="color: white;"></i>
                                    </button>
                                </div>
                                <h2>{{ $article->title }}</h2>
                                <p>{!! $article->article !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

</x-user-layout>
