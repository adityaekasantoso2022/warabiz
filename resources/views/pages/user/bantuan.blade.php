<x-user-layout title="Bantuan" active="bantuan">
    @push('addonStyle')
    <style>
    body {
        background: #fbfbfb !important;
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

    .custom-color {
        background-color: #1B9FC3;
    }

    .featured-image {
        width: 100%;
        height: 40%;
        margin-bottom: 30px;
    }
    </style>

    @endpush
    <section class="py-5" style="margin-top: 90px">
        <div class="container">
            <img src="{{ asset('assets/frontend/image/bg/bg-bantuan.svg') }}" alt="Featured Image"
                class="featured-image">

            <div class="row">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card-row">
                                <h5 class="header-title">
                                    <b>Pertanyaan Populer</b>
                                    <div class="accordion mt-4" id="faqAccordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="question1">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#answer1"
                                                    aria-expanded="false" aria-controls="answer1">
                                                    Apa itu WaraBiz?
                                                </button>
                                            </h2>
                                            <div id="answer1" class="accordion-collapse collapse"
                                                aria-labelledby="question1" data-bs-parent="#faqAccordion">
                                                <p class="accordion-body">
                                                    WaraBiz adalah peluang waralaba yang dinamis yang memungkinkan
                                                    pengusaha
                                                    untuk
                                                    berinvestasi dan mengoperasikan bisnis mereka sendiri dalam kerangka
                                                    kerja
                                                    yang
                                                    sudah mapan. Kami menyediakan model bisnis komprehensif dan dukungan
                                                    untuk
                                                    membantu
                                                    Anda berhasil di dunia wirausaha yang kompetitif.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="question2">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#answer2"
                                                    aria-expanded="false" aria-controls="answer2">
                                                    Bagaimana cara mendaftar sebagai mitra Warabiz?
                                                </button>
                                            </h2>
                                            <div id="answer2" class="accordion-collapse collapse"
                                                aria-labelledby="question2" data-bs-parent="#faqAccordion">
                                                <p class="accordion-body">
                                                    Anda dapat mendaftar sebagai mitra Warabiz atdengan mengunjungi
                                                    halaman
                                                    WaraPartner
                                                    di situs web kami dan mengikuti langkah-langkah yang diberikan.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="question3">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#answer3"
                                                    aria-expanded="false" aria-controls="answer3">
                                                    Apa keuntungan menjadi mitra Warabiz?
                                                </button>
                                            </h2>
                                            <div id="answer3" class="accordion-collapse collapse"
                                                aria-labelledby="question3" data-bs-parent="#faqAccordion">
                                                <p class="accordion-body">
                                                    Mitra Warabiz mendapatkan akses ke berbagai layanan dan dukungan
                                                    untuk
                                                    membantu
                                                    pertumbuhan bisnis waralabanya.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="question4">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#answer4"
                                                    aria-expanded="false" aria-controls="answer4">
                                                    Apa saja jenis waralaba yang tersedia di Warabiz?
                                                </button>
                                            </h2>
                                            <div id="answer4" class="accordion-collapse collapse"
                                                aria-labelledby="question4" data-bs-parent="#faqAccordion">
                                                <p class="accordion-body">
                                                    WaraBiz merupakan penyedia peluang waralaba yang menyajikan beragam
                                                    jenis
                                                    bisnis
                                                    dari berbagai industri. Dengan fokus
                                                    pada kuliner, jasa, fashion, ritel, teknologi, dan kesehatan,
                                                    WaraBiz
                                                    menghadirkan
                                                    kesempatan bagi para pengusaha untuk
                                                    menjelajahi dan mengembangkan bisnis sesuai dengan minat dan
                                                    keahlian
                                                    masing-masing.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="question5">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#answer5"
                                                    aria-expanded="false" aria-controls="answer5">
                                                    Apa yang ditawarkan oleh WaraBiz?
                                                </button>
                                            </h2>
                                            <div id="answer5" class="accordion-collapse collapse"
                                                aria-labelledby="question5" data-bs-parent="#faqAccordion">
                                                <p class="accordion-body">
                                                    WaraBiz merupakan penyedia peluang waralaba yang menyajikan beragam
                                                    jenis bisnis dari berbagai industri. Dengan fokus pada kuliner,
                                                    jasa, fashion, ritel, teknologi, dan kesehatan, WaraBiz menghadirkan
                                                    kesempatan bagi para pengusaha untuk menjelajahi dan mengembangkan
                                                    bisnis sesuai dengan minat dan keahlian masing-masing.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="question6">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#answer6"
                                                    aria-expanded="false" aria-controls="answer6">
                                                    Apa keunggulan dari produk WaraBiz?
                                                </button>
                                            </h2>
                                            <div id="answer6" class="accordion-collapse collapse"
                                                aria-labelledby="question6" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body">
                                                    Produk WaraBiz memiliki keunggulan dalam hal kualitas, inovasi, dan
                                                    dukungan pelanggan yang kuat. Kami
                                                    berkomitmen untuk menyediakan produk-produk yang berkualitas tinggi
                                                    dan selalu memperbarui inovasi kami
                                                    sesuai dengan kebutuhan pasar. Selain itu, kami juga memberikan
                                                    dukungan pelanggan yang ramah dan
                                                    responsif untuk memastikan kepuasan pelanggan kami.
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </h5>
                            </div>
                        </div>

                        <!-- Form Pertanyaan -->
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
                                    <!-- Form elements -->
                                    <div class="form-group mt-4">
                                        <label for="pesan" class="form-label fw-bold">
                                            <p>Pesan <span style="color: red;">*</span></p>
                                        </label>
                                        <textarea name="pesan" id="pesan"
                                            class="form-control border px-2 py-1 rounded-3 shadow-none" required
                                            cols="30" rows="3"></textarea>
                                        <p class="text-sm text-secondary mt-2">
                                            Masukan pertanyaan anda
                                        </p>
                                    </div>
                                    <!-- Submit button -->
                                    <button type="submit" onclick="validateForm()"
                                        class="mt-4 mb-2 btn custom-color w-100 text-white border-12 py-3"
                                        id="submitButton">
                                        Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-user-layout>