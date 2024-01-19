<x-user-layout title="Warabiz-Edukasi" active="waraedu">
    @push('addonStyle')
        <style>
            body {
                background: #dae3ec !important;
            }

            .navbar-light .navbar-nav .nav-link {
                color: rgba(255, 255, 255, 0.6);
            }

            .navbar .navbar-nav a:hover.btn-signup {
                color: white !important;
            }

            .navbar .navbar-nav a:hover {
                color: #ffffff !important;
            }

            .dropdown .dropdown-menu li a:hover {
                color: #000000 !important;
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
                .line-text p.text-white::before {
                    width: 50px;
                    left: 10%;
                }

                .line-text p.text-white::after {
                    width: 50px;
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
                    height: 75vh !important;
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

            .search-class .input-group .right-button button:active {
                box-shadow: 0 0 5px #4F94D7 !important;
            }

            .search-class .input-group .right-button button:focus {
                box-shadow: 0 0 5px #4F94D7 !important;
            }

            .right-button {
                right: 0 !important;
                position: absolute !important;
                padding: 0 0.6rem;
                z-index: 999;
            }
        </style>
    @endpush

    {{-- Hero --}}
    <section class="hero text-center d-flex align-items-center justify-content-center">
        <div class="content">
            <h1 class="text-white fw-bolder m-0 px-2 display-4">
                Temukan Pengetahuan Baru <br> Mengenai Wirausaha
            </h1>
        </div>
    </section>
    {{-- End Hero --}}

    <section class="pt-50 pb-50 d-flex justify-content-start align-items-center position-relative d-md-none d-sm-none d-lg-flex d-none" id="testimonial-section-v3">
        <div class="container">
            <!-- ... Bagian konten artikel ... -->
        </div>
    </section>

    {{-- End home --}}

    @push('addonScript')
        <script>
            let slideIndex = 1;

            $nav.toggleClass('scrolled', $(this).scrollTop() > $hero.height());
            $(function() {
                $(document).scroll(function() {
                    $nav.toggleClass('scrolled', $(this).scrollTop() > $hero.height());
                });
            });
        </script>
    @endpush
</x-user-layout>
