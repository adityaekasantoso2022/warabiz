<x-user-layout title="Bantuan" active="bantuan">
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
                margin: 0 !important;
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
                right: 0;
                z-index: -1;
            }

            .navbar-expand-lg {
                background-color: white !important;
                box-shadow: -1.5px 4px 16px rgb(118 126 148 / 20%);
                transition: background-color 200ms linear;
            }

            @media screen and (max-width: 1098px) {
                .hero-banner-one {
                    padding-top: 50px;
                }
            }

            .pb-50 {
                padding-bottom: 50px;
            }

            .pt-100 {
                padding-top: 100px;
            }

            .pb-100 {
                padding-bottom: 100px;
            }

            .item-pricing {
                background: #fff;
                border-radius: 16px;
                padding: 30px;
            }

            .item-pricing .icon {
                height: 70px;
                width: 70px;
            }

            .item-pricing .title {
                color: #34364a;
                font-size: 26px;
                font-weight: 700;
            }
            .accordion-item {
                border-radius: 12px;
                overflow: hidden;
                margin-bottom: 10px;
            }

            .accordion-button {
                border-radius: 0;
                border-top-left-radius: 12px;
                border-top-right-radius: 12px;
                padding: 15px;
            }

            .accordion-collapse {
                border-radius: 0;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                border-bottom-left-radius: 12px;
                border-bottom-right-radius: 12px;
            }

            .accordion-body {
                border-radius: 0;
                border-top-left-radius: 0;
                border-top-right-radius: 0;
                padding: 15px;
            }
        </style>
    @endpush

    <section class="hero-banner-one pt-100 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h1 class="header-title mt-5">
                        Kami siap membantu<br class="desktop"> kendala Anda!
                    </h1>
                    <!-- FAQ Dropdown -->
<div class="accordion mt-4" id="faqAccordion">
    <!-- Pertanyaan dan Jawaban 1 -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="question1">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#answer1" aria-expanded="true" aria-controls="answer1">
                Apa itu Warabiz?
            </button>
        </h2>
        <div id="answer1" class="accordion-collapse collapse show" aria-labelledby="question1" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
                Warabiz adalah platform waralaba online yang menyediakan kesempatan untuk membuka bisnis waralaba dengan mudah dan efisien.
            </div>
        </div>
    </div>

    <!-- Pertanyaan dan Jawaban 2 -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="question2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer2" aria-expanded="false" aria-controls="answer2">
                Bagaimana cara mendaftar sebagai mitra Warabiz?
            </button>
        </h2>
        <div id="answer2" class="accordion-collapse collapse" aria-labelledby="question2" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
                Anda dapat mendaftar sebagai mitra Warabiz dengan mengunjungi halaman pendaftaran di situs web kami dan mengikuti langkah-langkah yang diberikan.
            </div>
        </div>
    </div>

    <!-- Pertanyaan dan Jawaban 3 -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="question3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer3" aria-expanded="false" aria-controls="answer3">
                Apa keuntungan menjadi mitra Warabiz?
            </button>
        </h2>
        <div id="answer3" class="accordion-collapse collapse" aria-labelledby="question3" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
                Mitra Warabiz mendapatkan akses ke berbagai layanan dan dukungan untuk membantu pertumbuhan bisnis waralabanya.
            </div>
        </div>
    </div>

    <!-- Pertanyaan dan Jawaban 4 -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="question4">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#answer4" aria-expanded="false" aria-controls="answer4">
                Apa saja jenis waralaba yang tersedia di Warabiz?
            </button>
        </h2>
        <div id="answer4" class="accordion-collapse collapse" aria-labelledby="question4" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
                Warabiz menyediakan berbagai jenis waralaba dari berbagai industri. Anda dapat menjelajahi opsi yang tersedia di situs web kami.
            </div>
        </div>
    </div>
</div>

                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="item-pricing">
                        <img src="https://buildwithangga.com/themes/front/images/ic_konsultasi.svg" class="icon"
                            alt="icon-chat">
                        <h2 class="title mt-5 lh-base">
                            Kontak Melalui WhatsApp
                        </h2>
                        <textarea id="whatsappMessage" class="form-control mb-2" rows="6"
                            placeholder="Tulis pesan Anda..."></textarea>
                        <button onclick="sendWhatsAppMessage()" class="btn bgTheme p-2 w-100 border-12 text-white mt-3">
                            Kirim
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('addonScript')
        <script>
            function sendWhatsAppMessage() {
                var message = encodeURIComponent(document.getElementById('whatsappMessage').value);
                var whatsappURL = "https://api.whatsapp.com/send?phone=6281575332411&text=" + message;
                window.open(whatsappURL, '_blank');
            }
        </script>
    @endpush
</x-user-layout>
