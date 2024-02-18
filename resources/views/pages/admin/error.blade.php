<x-user-layout title="Error" active="dashboard">
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

        .error-errors {
            background-color: #fff;
            border-radius: 12px;
            padding: 20px;
            margin: 20px auto;
            width: 700px;
            height: 500px;
            text-align: center;
        }

        .error-errors img {
            margin-top: 20px
        }


        .error-errors h2 {
            font-size: 24px;
            font-weight: 700;
            color: #34364a;
            margin-bottom: 10px;
            margin-top: 15px;
        }

        .error-errors p {
            font-size: 16px;
            color: rgba(19, 19, 19, 0.8);
            margin-bottom: 25px;
        }

        .btn {
            width: 100%;
        }

        @media only screen and (max-width: 767px) {
            .error-errors {
                width: 90%;
                height: auto;
                padding: 20px;
            }

            .error-errors img {
                width: 80px;
                height: auto;
                margin-bottom: 20px;

            }

            .btn {
                padding: 12px 16px;
            }

            /* Hide the progress image on mobile devices */
            .error-errors img.progress-image {
                display: none;
            }
        }
    </style>
    @endpush

    <section class="py-5" style="margin-top: 90px;">
        <div class="error-errors">
            <h2>Transaksi Data Tidak Berhasil</h2>
            <p>Kami akan segera memperbaikinya, Mohon cek kambali input data yang anda masukkan</p>
            <a href="{{ route('admin.dashboard') }}" class="mt-4 mb-2 ml-4 btn bgTheme text-white border-12 py-3 px-4"
                style="max-width: 200px; width: calc(50% - 14px); display: inline-block; margin-left: 10px;">
                <i class="bi bi-grid-1x2-fill"></i> Back to Dashboard
            </a>

        </div>
    </section>
</x-user-layout>
