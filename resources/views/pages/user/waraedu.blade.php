<x-user-layout title="Warabiz-Home" active="Warabiz">
    @push('addonScript')
    <script src="https://d17ivq9b7rppb3.cloudfront.net/build/commons_script-eb16678ced.js"></script>
    <script>
        // Munculkan modal ketika halaman dimuat
        $(document).ready(function () {
            $('#imageModal').modal('show');
        });
    </script>
    @endpush

    <!-- Modal untuk gambar popup -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- Tombol Close -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Ganti URL gambar sesuai dengan gambar yang ingin Anda tampilkan -->
                    <img src="{{ asset('assets/frontend/image/hero-image.svg') }}" class="img-fluid" alt="Popup Image">
                </div>
            </div>
        </div>
    </div>

    @push('addonStyle')
    <style>
        body {
            background: #ECF8F9 !important;
        }

        .testimonial-section {
            padding: 70px 0;
            background-color: #ECF8F9;
        }

        .testimonial-section h1 {
            margin-bottom: 40px;
        }

        .testimonial-section img {
            border-radius: 10px;
        }

        .contact-section form button:hover {
            background-color: #25d366;
        }

        .benefit {
            padding: 30px 0;
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        .card-benefit {
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            margin-bottom: 20px;
        }

        .card-benefit:hover {
            transform: scale(1.05);
        }

        .card-benefit .card-title,
        .card-benefit .card-text {
            font-weight: normal;
            text-align: left;

        }

        .card-benefit .card-title {
            font-size: 20px;
            line-height: 130%;
            color: #000;
        }

        .card-benefit .card-text {
            font-size: 15px;
            line-height: 150%;
            color: #000;
        }

        .card-benefit .card-more {
            font-weight: 500;
            color: #3ECAB0;
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

        .text-success {
            color: #0098B4;
        }

        .hero p {
            font-weight: 400;
            font-size: 16px;
            color: rgba(19, 19, 19, 0.8);
        }

        .hero .btn-cta {
            background: #FF823C;
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

        .hero .hero-text {
            color: #34364a;
            font-size: 43px;
            font-weight: 700;
            line-height: 78px;
        }

        @media (min-width: 1280px) {
            .hero .hero-text {
                color: #34364a;
                font-size: 56px;
                font-weight: 700;
                line-height: 73px;
            }
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

        .logo-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .logo-container img {
            margin-right: 10px;
        }

        .card-benefit .card-more>span {
            margin-left: 5px;
        }

        .benefit .row {
            margin-top: 90px;
        }

        section {
            margin-bottom: 0px !important;
        }

        .service {
            background: #FFFFFF;
        }

        .service .statistic {
            top: 77%;
            width: 60%;
            border-top-right-radius: 16px;
            user-select: none;
            cursor: pointer;
            background: #03173C !important;
            color: #ffff !important;
        }

        #testimonial-section-v3 {
            background-color: #ffffff;
            height: auto;
            margin: 0px 0 100px;
            overflow: hidden;
        }

        @media (min-width: 992px) {
            #testimonial-section-v3 {
                height: 600px;
            }
        }

        #testimonial-section-v3 .header-title {
            font-size: 32px;
            font-weight: 700;
            line-height: 48px !important;
            margin-top: 10px;
        }

        #testimonial-section-v3 .subtitle {
            color: #a9a4bc;
            font-size: 16px;
            font-weight: 400;
            line-height: 32px;
            margin-top: 10px;
        }
    </style>
    @endpush
    <div class="position-relative">
        <img src="{{ asset('assets/frontend/image/hero-image.svg') }}" alt="bg-header"
            class="img-fluid img-header d-none d-md-none d-lg-block" width="700">
    </div>
    <section class="hero">
        <div class="d-flex container h-100 w-100 min-vh-75 align-items-center">
            <div class="row py-4">
                <div class="col-lg-5 col-md-12 pb-5 d-flex flex-column justify-content-center align-items-start">
                    <h1 class="fw-bold hero-text mb-4">
                        Cara mudah untuk memiliki <b>waralaba keinginanmu</b>
                    </h1>
                    <p>Solusi untuk memiliki waralaba yang sesuai dengan diri anda, dengan waralaba yang terpercaya di
                        Indonesia.</p>
                    @guest
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('register') }}" class="btn btn-cta btn-block mt-4 me-2">
                                Daftar Sekarang
                            </a>
                            <a href="#" class="btn btn-outline-info btn-block btn-block-center mt-4 me-2">
                                <i class="fas fa-play"></i> Lihat Video Profile
                            </a>
                        </div>
                    </div>

                    @endguest
                </div>
                <div class="col-lg-7 mt-3">
                    <!-- Placeholder for content in the second column (if any) -->
                </div>
            </div>
        </div>
    </section>

    <section class="benefit"
        style="background-image: url('{{ asset('assets/frontend/image/backrground-fitur.png') }}');">
        <div class="container">
            <div class="text-center text-white">
                <h1>Fitur Unggulan Kami ✨</h1>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-benefit border-0 bg-white rounded-10" data-bs-toggle="modal"
                        data-bs-target="#waraeduModal">
                        <div class="card-body text-center text-black">
                            <h5 class="card-title fw-bold">
                                <img src="{{ asset('assets/frontend/image/waraedu.svg') }}" alt="WaraEdu Icon"
                                    class="img-fluid mr-2" width="60">
                                WaraEdu
                            </h5>
                            <p class="card-text">WaraEdu adalah fitur materi berkualitas tinggi yang berkaitan dengan
                                kewirausahaan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-benefit border-0 bg-white rounded-10" data-bs-toggle="modal"
                        data-bs-target="#waracareerModal">
                        <div class="card-body text-center text-black">
                            <h5 class="card-title fw-bold">
                                <img src="{{ asset('assets/frontend/image/waracareer.svg') }}" alt="WaraCareer Icon"
                                    class="img-fluid mr-2" width="60">
                                WaraCareer
                            </h5>
                            <p class="card-text">WaraCareer adalah fitur seputar lowongan pekerjaan yang dibutuhkan oleh
                                Mitra Waralaba kami.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-benefit border-0 bg-white rounded-10" data-bs-toggle="modal"
                        data-bs-target="#warapartnerModal">
                        <div class="card-body text-center text-black">
                            <h5 class="card-title fw-bold">
                                <img src="{{ asset('assets/frontend/image/warapartner.svg') }}" alt="WaraPartner Icon"
                                    class="img-fluid mr-2" width="60">
                                WaraPartner
                            </h5>
                            <p class="card-text">WaraPartner adalah fitur kerjasama yang dirancang untuk meningkatkan
                                penjualan waralaba Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal untuk WaraEdu -->
    <div class="modal fade rounded-10" id="waraeduModal" tabindex="-1" aria-labelledby="waraeduModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg rounded-10">
            <div class="modal-content rounded-10">
                <div class="modal-header">
                    <h5 class="card-title fw-bold">
                        <img src="{{ asset('assets/frontend/image/waraedu.svg') }}" alt="WaraEdu Icon"
                            class="img-fluid mr-2" width="60">
                        WaraEdu
                    </h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="modal-text">WaraEdu adalah fitur unggulan kami yang menyediakan materi berkualitas tinggi
                        yang berkaitan dengan kewirausahaan. Dengan WaraEdu, Anda dapat:</p>

                    <ul class="modal-text">
                        <li style="font-size: 14px;">Mengakses kursus online yang dikembangkan oleh pakar industri.</li>
                        <li style="font-size: 14px;">Belajar keterampilan kewirausahaan yang dibutuhkan untuk sukses
                            dalam menjalankan waralaba.</li>
                        <li style="font-size: 14px;">Menyimak webinar dan seminar daring dari para ahli bisnis.</li>
                        <li style="font-size: 14px;">Mendapatkan sumber daya edukasi eksklusif untuk membantu
                            pertumbuhan bisnis Anda.</li>
                    </ul>

                    <p class="modal-text">Dengan WaraEdu, kami berkomitmen untuk memberikan dukungan edukasi terbaik
                        bagi para mitra waralaba kami. Tingkatkan pengetahuan dan keterampilan Anda dalam mengelola
                        bisnis waralaba dengan WaraEdu!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal untuk WaraCareer -->
    <div class="modal fade rounded-10" id="waracareerModal" tabindex="-1" aria-labelledby="waracareerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg rounded-10">
            <div class="modal-content rounded-10">
                <div class="modal-header">
                    <h5 class="card-title fw-bold">
                        <img src="{{ asset('assets/frontend/image/waracareer.svg') }}" alt="WaraEdu Icon"
                            class="img-fluid mr-2" width="60">
                        WaraCareer
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="modal-text">WaraCareer adalah fitur unggulan kami yang memberikan informasi terkini
                        seputar lowongan pekerjaan yang dibutuhkan oleh Mitra Waralaba kami. Dengan WaraCareer, Anda
                        dapat:</p>

                    <ul class="modal-text">
                        <li style="font-size: 14px;">Menjelajahi berbagai lowongan pekerjaan dari berbagai sektor
                            bisnis.</li>
                        <li style="font-size: 14px;">Mendapatkan kesempatan berkarir di perusahaan-perusahaan terkemuka.
                        </li>
                        <li style="font-size: 14px;">Menerima pemberitahuan langsung mengenai lowongan pekerjaan yang
                            sesuai dengan profil Anda.</li>
                        <li style="font-size: 14px;">Bergabung dengan jaringan profesional yang luas dalam industri
                            waralaba.</li>
                    </ul>

                    <p class="modal-text">Dengan WaraCareer, kami berusaha membantu Anda dalam mencapai karir yang
                        sukses dan membangun jejak karir yang gemilang.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk WaraPartner -->
    <div class="modal fade rounded-10" id="warapartnerModal" tabindex="-1" aria-labelledby="warapartnerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg rounded-10">
            <div class="modal-content rounded-10">
                <div class="modal-header">
                    <h5 class="card-title fw-bold">
                        <img src="{{ asset('assets/frontend/image/warapartner.svg') }}" alt="WaraEdu Icon"
                            class="img-fluid mr-2" width="60">
                        WaraPartner
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="modal-text">WaraPartner adalah fitur kerjasama yang dirancang untuk meningkatkan penjualan
                        waralaba Anda. Dengan WaraPartner, Anda dapat:</p>

                    <ul class="modal-text">
                        <li style="font-size: 14px;">Mencari mitra bisnis yang potensial untuk meningkatkan distribusi
                            produk Anda.</li>
                        <li style="font-size: 14px;">Menjalin kerjasama dengan pelaku bisnis dalam dan luar industri
                            waralaba.</li>
                        <li style="font-size: 14px;">Memperluas jaringan penjualan dan distribusi produk waralaba Anda.
                        </li>
                        <li style="font-size: 14px;">Meningkatkan visibilitas dan daya tarik waralaba Anda di pasaran.
                        </li>
                    </ul>

                    <p class="modal-text">Dengan WaraPartner, kami berkomitmen untuk membantu Anda menjalankan bisnis
                        waralaba dengan lebih efektif dan mengoptimalkan potensi penjualan Anda.</p>
                </div>
            </div>
        </div>
    </div>


    <section
        class="pt-50 pb-50 d-flex justify-content-start align-items-center position-relative d-md-none d-sm-none d-lg-flex d-none"
        id="testimonial-section-v3">
        <div class="container">
            <div class="row d-flex justify-content-start align-items-center gx-0">
                <div class="col-lg-5 col-12">
                    <h4 class="text-success hero-label mb-0">
                        <i class="fas fa-medal"></i> Dipercaya 200+ Waralaba
                    </h4>
                    <h1 class="header-title mb-0 text-black">
                        Bergabung bersama kami 🤩
                    </h1>
                    <p class="subtitle text-black">
                        Bergabunglah dan rasakan pengalaman berbisnis waralaba luar biasa dengan lebih dari 200 waralaba
                        terpercaya. Dukungan dan solusi terbaik kami membantu Anda mencapai kesuksesan.
                    </p>
                    <div class="col-lg-7 mt-3">
                        <div class="logo-container">
                            <img src="{{ asset('assets/frontend/image/logo/gacoan.png') }}" alt="Gacoan" width="100">
                            <img src="assets/frontend/image/logo/tehdesa.png" alt="Teh Desa" width="100">
                            <img src="assets/frontend/image/logo/bangor.png" alt="Burger Bangor" width="100">
                            <img src="assets/frontend/image/logo/mixue.png" alt="Mixue" width="100">
                            <img src="assets/frontend/image/logo/roketchiken.png" alt="Roket Chiken" width="100">
                            <img src="assets/frontend/image/logo/geprekjuara.png" alt="Geprek Juara " width="100">

                        </div>
                        <div class="logo-container">
                            <img src="{{ asset('assets/frontend/image/logo/rotio.png') }}" alt="Roti O" width="100">
                            <img src="assets/frontend/image/logo/mcd.png" alt="MCD" width="100">
                            <img src="assets/frontend/image/logo/kfc.png" alt="KFC" width="100">
                            <img src="assets/frontend/image/logo/gepreksai.png" alt="Geprek Sai" width="100">
                            <img src="assets/frontend/image/logo/richeese.png" alt="Richeese" width="100">
                            <img src="assets/frontend/image/logo/pakgembus.png" alt="Ayam Gepuk Pak Gembus" width="100">

                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12 ms-auto">
                    <img src="{{ asset('assets/frontend/image/hero2-image.svg') }}" alt="Deskripsi Gambar"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-section">
        <div class="container">
            <div class="text-center text-black">
                <h1>Testimonial Pelanggan</h1>
            </div>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-end">
                            <img src="{{ asset('assets/frontend/image/testimoni1.svg') }}"
                                class="d-block w-30 mb-1 me-5" alt="Testimonial 1">
                            <img src="{{ asset('assets/frontend/image/testimoni1.svg') }}" class="d-block w-30 me-5"
                                alt="Testimonial 2">
                            <img src="{{ asset('assets/frontend/image/testimoni1.svg') }}"
                                class="d-block w-30 mb-1 me-5" alt="Testimonial 3">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-end">
                            <img src="{{ asset('assets/frontend/image/testimoni1.svg') }}"
                                class="d-block w-30 mb-1 me-5" alt="Testimonial 1">
                            <img src="{{ asset('assets/frontend/image/testimoni1.svg') }}"
                                class="d-block w-30 mb-1 me-5" alt="Testimonial 2">
                            <img src="{{ asset('assets/frontend/image/testimoni1.svg') }}"
                                class="d-block w-30 mb-1 me-5" alt="Testimonial 3">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-end">
                            <img src="{{ asset('assets/frontend/image/testimoni1.svg') }}"
                                class="d-block w-30 mb-1 me-5" alt="Testimonial 1">
                            <img src="{{ asset('assets/frontend/image/testimoni1.svg') }}"
                                class="d-block w-30 mb-1 me-5" alt="Testimonial 2">
                            <img src="{{ asset('assets/frontend/image/testimoni1.svg') }}"
                                class="d-block w-30 mb-1 me-5" alt="Testimonial 3">
                        </div>
                    </div>
                    <!-- Tambahkan gambar testimonial lainnya di sini -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>



    @push('addonScript')
    <script src="https://d17ivq9b7rppb3.cloudfront.net/build/commons_script-eb16678ced.js"></script>
    @endpush
</x-user-layout>