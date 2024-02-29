<x-user-layout title="Bantuan" active="bantuan">
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
            color: #131313
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

        .navbar-expand-lg {
            background-color: white !important;
            box-shadow: -1.5px 4px 16px rgb(118 126 148 / 20%);
            transition: background-color 200ms linear;
        }


        .header-primary {
            color: #34364a;
            font-size: 38px;
            font-weight: 700;
            line-height: 48px;
        }

        .card-container,
        .bantuan-card,
        .bantuan-card-responsive {
            background: #fff;
            border: none;
            border-radius: 14px;
            color: #34364a;
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 99%;
            padding: 30px;
            position: center;
            row-gap: 24px;
        }

        .card-row {
            background: #fff;
            border-radius: 10px;
            box-sizing: border-box;
            color: #34364a;
            height: 100%;
            weight: 100px;
            padding: 30px;
            position: relative;
            row-gap: 20px;

        }

        /* Styling untuk kartu */
        .card {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 1px;
        }

        /* CSS untuk gambar */
        .card-body img {
            max-width: 100px;
            /* Sesuaikan ukuran gambar sesuai kebutuhan */
            margin-bottom: 15px;
            /* Jarak antara gambar dan teks */
        }
        .accordion-item {
        border-bottom: 1px solid #ddd; /* Garis pembatas antar pertanyaan */
        margin-bottom: 10px; /* Jarak antara setiap pertanyaan */
        border-radius: 4px; /* Sudut lengkung kontainer pertanyaan */
    }

    .accordion-button {
        background-color: #fff; /* Warna latar belakang tombol */
        color: #343a40; /* Warna teks tombol */
        font-weight: 400; /* Ketebalan font tombol */
        border-radius: 4px; /* Sudut lengkung tombol */
        border: none; /* Hapus border */
        padding: 10px 15px; /* Padding tombol */
        width: 100%; /* Lebar tombol */
        text-align: left; /* Posisi teks ke kiri */
        transition: background-color 0.3s ease; /* Efek transisi saat dihover */
    }

    
    .accordion-button:hover {
        background-color: #e9ecef; /* Warna latar belakang tombol saat dihover */
    }

    .accordion-button:focus {
        box-shadow: none; /* Hapus shadow saat tombol mendapatkan fokus */
    }

    .accordion-button[aria-expanded="true"] {
        background-color: #009BB8; /* Warna latar belakang tombol saat dibuka */
        color: #fff; /* Warna teks tombol saat dibuka */
    }

    .accordion-body {
        padding: 15px; /* Padding konten jawaban */
        font-weight: 400; /* Ketebalan font konten jawaban */

    }
    
</style>

    @endpush
    <section class="py-5" style="margin-top: 10px">
        <div class="container">
            <div class="mt-5 row pricing testimonials mentors checkout gy-4" id="reviews">
                <div class="bantuan-card" style="margin-bottom: 20px;">
                    <div class="row justify-content-center mt-1">
                        <div class="col-md-3 col-xs-12 mb-3">
                            <div class="card text-center rounded-card">
                                <div class="card-body">
                                    <img src="{{ asset('assets/frontend/image/icon/callcenter.png') }}">
                                    <h6>Call Center</h6>
                                    <p>08123456789</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 mb-3">
                            <div class="card text-center rounded-card">
                                <div class="card-body">
                                    <img src="{{ asset('assets/frontend/image/icon/gmail.png') }}">
                                    <h6>Email</h6>
                                    <p>bantuan@warabiz.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 mb-3">
                            <div class="card text-center rounded-card">
                                <div class="card-body">
                                    <img src="{{ asset('assets/frontend/image/icon/whatsapp.png') }}">
                                    <h6>WhatsApp</h6>
                                    <p>0987654321</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 mb-3">
                            <div class="card text-center rounded-card">
                                <div class="card-body">
                                    <img src="{{ asset('assets/frontend/image/icon/instagram.png') }}"
                                        style="width: 100px; height: auto;">
                                    <h6>Instagram</h6>
                                    <p>@warabiz.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card-row">
                        <h5 class="header-title">
                            <b>Pertanyaan Populer</b>
                            <div class="accordion mt-4" id="faqAccordion">
                                <!-- Pertanyaan dan Jawaban 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="question1">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#answer1" aria-expanded="false"
                                            aria-controls="answer1">
                                            Apa itu WaraBiz?
                                        </button>
                                    </h2>
                                    <div id="answer1" class="accordion-collapse collapse" aria-labelledby="question1"
                                        data-bs-parent="#faqAccordion">
                                        <p class="accordion-body">
                                            WaraBiz adalah peluang waralaba yang dinamis yang memungkinkan pengusaha
                                            untuk
                                            berinvestasi dan mengoperasikan bisnis mereka sendiri dalam kerangka kerja
                                            yang
                                            sudah mapan. Kami menyediakan model bisnis komprehensif dan dukungan untuk
                                            membantu
                                            Anda berhasil di dunia wirausaha yang kompetitif.
                                        </p>
                                    </div>
                                </div>

                                <!-- Pertanyaan dan Jawaban 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="question2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#answer2" aria-expanded="false"
                                            aria-controls="answer2">
                                            Bagaimana cara mendaftar sebagai mitra Warabiz?
                                        </button>
                                    </h2>
                                    <div id="answer2" class="accordion-collapse collapse" aria-labelledby="question2"
                                        data-bs-parent="#faqAccordion">
                                        <p class="accordion-body">
                                            Anda dapat mendaftar sebagai mitra Warabiz atdengan mengunjungi halaman
                                            WaraPartner
                                            di situs web kami dan mengikuti langkah-langkah yang diberikan.
                                        </p>
                                    </div>
                                </div>

                                <!-- Pertanyaan dan Jawaban 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="question3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#answer3" aria-expanded="false"
                                            aria-controls="answer3">
                                            Apa keuntungan menjadi mitra Warabiz?
                                        </button>
                                    </h2>
                                    <div id="answer3" class="accordion-collapse collapse" aria-labelledby="question3"
                                        data-bs-parent="#faqAccordion">
                                        <p class="accordion-body">
                                            Mitra Warabiz mendapatkan akses ke berbagai layanan dan dukungan untuk
                                            membantu
                                            pertumbuhan bisnis waralabanya.
                                        </p>
                                    </div>
                                </div>

                                <!-- Pertanyaan dan Jawaban 4 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="question4">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#answer4" aria-expanded="false"
                                            aria-controls="answer4">
                                            Apa saja jenis waralaba yang tersedia di Warabiz?
                                        </button>
                                    </h2>
                                    <div id="answer4" class="accordion-collapse collapse" aria-labelledby="question4"
                                        data-bs-parent="#faqAccordion">
                                        <p class="accordion-body">
                                            WaraBiz merupakan penyedia peluang waralaba yang menyajikan beragam jenis
                                            bisnis
                                            dari berbagai industri. Dengan fokus
                                            pada kuliner, jasa, fashion, ritel, teknologi, dan kesehatan, WaraBiz
                                            menghadirkan
                                            kesempatan bagi para pengusaha untuk
                                            menjelajahi dan mengembangkan bisnis sesuai dengan minat dan keahlian
                                            masing-masing.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </h5>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card-row">
                        <h5 class="header-title">
                            <b>Form Pertanyaan</b>
                        </h5>
                        <form id="myForm" action="{{ route('submit.form') }}" method="POST">
                            @csrf
                            <div class="form-group mt-1">
                                <label for="payment_method" class="form-label fw-bold">
                                    <p>Pilih Kategori Pertanyaan <span style="color: red;">*</span></p>
                                </label>
                                <select name="kategori_pertanyaan" id="kategori_pertanyaan"
                                    class="form-select border px-2 py-1 rounded-3 shadow-none" required>
                                    <option value="" selected disabled>Pilih Kategori</option>
                                    <option value="Informasi Produk">Informasi Produk</option>
                                    <option value="Proses Pembelian">Proses Pembelian</option>
                                    <option value="Layanan Pelanggan">Layanan Pelanggan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                <p class="text-sm text-secondary mt-2">
                                    Pilih kategori pertanyaan
                                </p>
                            </div>

                            <div class="form-group mt-4">
                                <label for="pesan" class="form-label fw-bold">
                                    <p>Pesan <span style="color: red;">*</span></p>
                                </label>
                                <textarea name="pesan" id="pesan"
                                    class="form-control border px-2 py-1 rounded-3 shadow-none" required cols="30"
                                    rows="3"></textarea>
                                <p class="text-sm text-secondary mt-2">
                                    Masukan pertanyaan anda
                                </p>
                            </div>
                            <br>
                            <!-- Submit button -->
                            <button type="submit" onclick="validateForm()"
                                class="mt-4 mb-2 btn bgTheme w-100 text-white border-12 py-3" id="submitButton">
                                Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-user-layout>