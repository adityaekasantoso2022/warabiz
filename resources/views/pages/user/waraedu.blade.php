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

    <section class="justify-content" style="margin-top: 100px;">
        <!-- Tambahkan margin-top di sini -->
        <div class="container-scrollable">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-3">
                        <a href="#" class="text-decoration-none">
                            <div class="waraedu-card">
                                <div class="embed-responsive embed-responsive-16by9 video-iframe">
                                    <div class="plyr__video-embed" id="player">
                                        <img src="https://res.cloudinary.com/dvgmjv4ie/image/upload/v1707646927/warabiz-cloud/Articles/1645723667837130_k8zbpf.jpg"
                                            class="img-fluid" alt="Gambar">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column">
                                        <h6><b>judul</b></h6>
                                        <p>kategori</p>
                                    </div>
                                </div>
                                <div class="waraedu-footer mt-1">
                                    <p>Disini ditampilkan sedikit tampilan isi artikel, blabalablabala selanjutnya..</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-user-layout>
