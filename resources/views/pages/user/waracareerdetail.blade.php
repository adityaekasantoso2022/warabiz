<x-user-layout title="WaraCareer" active="waracareer">
    @push('addonStyle')
    <style>
        /* Style untuk latar belakang dan elemen-elemen lainnya */
        body {
            background: #dae3ec !important;
            font-family: Arial, sans-serif;
            font-size: 14px;
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
        .job-card {
            display: grid;
            grid-template-columns: 80px auto 230px;
            grid-template-rows: 35px 10px 35px auto;
            width: 100%;
            border: 1px solid #e3e3e3;
            padding: 24px;
            background-color: #fff;
            margin-bottom: 20px;
            border-radius: 10px;
        }

        .company-logo-img {
            grid-area: 1 / 1 / 2 / 2;
            background-color: #fff;
            border: 1px solid #e3e3e3;
            height: 80px;
            width: 80px;
            box-sizing: border-box;
            position: relative;
            padding: 5px;
        }

        .company-logo-img img {
            max-height: calc(100% - 10px);
            max-width: calc(100% - 10px);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .job-title {
            grid-area: 1 / 2 / 2 / 3;
            font-size: 16px;
            align-self: start;
            font-weight: 500;
            margin-top: 5px;
            padding: 0 24px;
        }

        .compeny-name {
            grid-area: 2 / 2 / 3 / 3;
            align-self: center;
            font-size: 14px;
            color: #777;
            margin-bottom: 5px;
            padding: 0 24px;
        }

        .skills-container {
            grid-area: 3 / 2 / 4 / 3;
            align-self: center;
            padding-top: 10px;
            padding: 0 24px;
        }

        .description {
            grid-area: 4 / 1 / 5 / 4;
            padding: 0 24px;
            margin-top: 20px;
        }

        .description-title {
            font-weight: 600;
            margin-top: 20px;
            color: #333;
        }

        .description-content {
            color: #666;
            line-height: 1.6;
        }

        .description-content ul {
            padding-left: 20px;
            margin-bottom: 10px;
        }

        .description-content ul li {
            margin-bottom: 5px;
        }

        .skill {
            display: inline;
            color: #00a6c2;
            border-radius: 2px;
            background-color: rgba(0, 166, 194, .05);
            border: 1px solid rgba(0, 166, 194, .15);
            padding: 5px 8px;
            font-size: 12px;
            margin-right: 5px;
            margin-bottom: 5px;
        }

        .register-now {

            background-color: #1ab059;
            color: #fff;
            width: 100%;
            cursor: pointer;
            border: 0;
            border-radius: 30px;
            margin-top: 40px;
            margin-bottom: 10px;
            font-size: 14px;
            padding: 10px;
            display: block;
            max-width: 200px;
        }

        /* Tombol kembali */
        .back-button {
            border: 2px solid #1ab059;
            color: #1ab059;
            background: none;
            border-radius: 30px;
            margin-top: 40px;
            margin-bottom: 10px;
            font-size: 14px;
            width: 100%;
            padding: 10px;
            display: block;
            max-width: 200px;
            margin-right: 10px;

        }

        .buttons-container {
            display: flex;
            /* Menjadikan flexbox */
            justify-content: space-between;
            /* Agar tombol berada pada ujung masing-masing */
        }


        /* Responsive CSS */
        @media only screen and (max-width: 600px) {
            .job-card {
                grid-template-columns: 80px auto;
            }

            .skills-container {
                display: none;
                /* Menyembunyikan kontainer keterampilan saat tampilan di perangkat seluler */
            }

            .compeny-name {
                display: none;
                /* Menyembunyikan kontainer keterampilan saat tampilan di perangkat seluler */
            }

        }

        .banner img {
            width: 100%;
            max-height: 150px;
            object-fit: cover;
            object-position: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
    </style>
    @endpush

    <section style="margin-top: 140px;">
        <div class="container">
            <div class="row">
                <div class="banner">
                    <img src="{{ $career->image_url }}" alt="Banner Image">
                </div>
            </div>
            <div class="row">
                <div class="job-card">
                    <div class="company-logo-img">
                        <img src="{{ $career->logo_url }}" alt="Company Logo">
                    </div>
                    <div class="job-title">{{ $career->career_title }}</div>
                    <div class="compeny-name">{{ $career->company_name }}</div>
                    <div class="skills-container">
                        <div class="skill">Diposting Pada {{ $career->created_at->format('d/m/Y') }}</div>
                    </div>
                    <div class="description">
                        <h6 class="description-title">Profile Perusahaan</h6>
                        <p class="description-content">{!! html_entity_decode($career->profile_company) !!}</p>
                        <h6 class="description-title">Deskripsi Pekerjaan</h6>
                        <p class="description-content">{!! html_entity_decode($career->description) !!}</p>
                        <h6 class="description-title">Syarat & Ketentuan:</h6>
                        <p class="description-content">{!! html_entity_decode($career->work_requirements) !!}</p>
                        <div class="buttons-container">
                            <button class="register-now"
                                onclick="window.location.href='{{ route('career.daftar', ['id' => $career->id]) }}'">Daftar</button>
                            <button class="back-button"
                                onclick="window.location.href='{{ route('waracareer') }}'">Kembali</button>
                        </div>
                    </div>
                    <p class="description-content"><b>Perkiraan Gaji</b><br>
                        @if ($career->min_salary !== null && $career->max_salary !== null && $career->min_salary !==
                        'Rp.' && $career->max_salary !== 'Rp.')
                        {{ $career->min_salary }} - {{ $career->max_salary }}
                        @elseif ($career->min_salary === null && $career->max_salary === null)
                        Gaji tidak ditampilkan
                        @else
                        {{ $career->min_salary !== null && $career->min_salary !== 'Rp.' ? $career->min_salary : 'Tidak
                        ditampilkan' }} 
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-user-layout>