<x-user-layout title="Lamaran-Diproses" active="waracareer">
    @push('addonStyle')
    <style>
        body {
            background: #FEFEFE !important;
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

        .hero {
            background: none !important;
            margin-bottom: -33px !important;
            height: 80vh !important;
        }

        .hero p {
            font-weight: 400;
            font-size: 16px;
            color: rgba(19, 19, 19, 0.8);
            margin: 0px !important;
        }

        .hero .hero-text {
            color: #34364a;
            font-size: 68px;
            font-weight: 700;
            line-height: 78px;
        }

        .hero .btn-cta {
            background: #4F94D7;
            border-radius: 12px;
            color: white;
            font-weight: 500;
            font-size: 16px;
            line-height: 150%;
            padding: 12px 32px;
        }

        .img-header {
            position: absolute;
            top: 1;
            right: 0px;
            z-index: -1;
        }

        .navbar-expand-lg {
            background-color: white !important;
            box-shadow: -1.5px 4px 16px rgb(118 126 148 / 20%);
            transition: background-color 200ms linear;
        }

        .benefit {
            background: #03173C;
            padding: 20px 0px;
        }

        @media (min-width: 767px) {
            .benefit {
                padding: 60px 0px;
            }

            .hero {
                background: none !important;
                margin-top: 75px;
                margin-bottom: -33px !important;
                height: 80vh !important;
            }
        }

        .header-primary {
            color: #34364a;
            font-size: 38px;
            font-weight: 700;
            line-height: 48px;
        }

        .payment-success {
            background-color: #fff;
            border-radius: 12px;
            padding: 20px;
            margin: 20px auto;
            width: 700px;
            height: 500px;
            text-align: center;
        }

        .payment-success img {
            margin-top: 20px
        }


        .payment-success h2 {
            font-size: 24px;
            font-weight: 700;
            color: #34364a;
            margin-bottom: 10px;
            margin-top: 15px;
        }

        .payment-success p {
            font-size: 16px;
            color: rgba(19, 19, 19, 0.8);
            margin-bottom: 25px;
        }

        .btn {
            width: 100%;
        }

        @media only screen and (max-width: 767px) {
            .payment-success {
                width: 90%;
                height: auto;
                padding: 20px;
            }

            .payment-success img {
                width: 80px;
                height: auto;
                margin-bottom: 20px;

            }

            .btn {
                padding: 12px 16px;
            }

            /* Hide the progress image on mobile devices */
            .payment-success img.progress-image {
                display: none;
            }
        }
    </style>
    @endpush

    <section class="py-5" style="margin-top: 90px;">
        <div class="payment-success">
            <img src="{{ asset('assets/frontend/image/sukses.svg') }}" alt="Gambar Pembayaran Berhasil" width="100">
            <br>
            <h2>Lamaranmu Berhasil Terkirim</h2>
            <p>Kami akan segera menghubungi Anda melalui Email <br> untuk informasi selanjutnya! </p>
            <a href="{{ route('home') }}" class="mt-4 mb-2 ml-4 btn bgTheme text-white border-12 py-3 px-4"
                style="max-width: 200px; width: calc(50% - 14px); display: inline-block; margin-left: 10px;">
                <i class="fas fa-home mr-2"></i> Back to Home
            </a>
        </div>
    </section>
</x-user-layout>
