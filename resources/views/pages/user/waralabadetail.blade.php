<x-user-layout title="Detail Waralaba - {{ $waralaba->waralaba_name }}" active="detail">
    @push('addonStyle')
    <style>
    body {
        background: #fcfcfc !important;
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
        margin: 0px !important
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

    .card-container,
    .waralaba-card,
    .waralaba-card-responsive {
        background: #fff;
        border: none;
        border-radius: 14px;
        box-sizing: border-box;
        color: #34364a;
        display: flex;
        flex-direction: column;
        height: 100%;
        width: 100%;
        padding: 30px;
        position: relative;
        row-gap: 24px;
    }

    .pricing .item-pricing {
        background: #fff;
        border-radius: 16px;
        padding: 30px;
    }

    .waralaba-card .waralaba-detail .waralaba-name,
    .waralaba-card-responsive .waralaba-detail .waralaba-name,
    .line-clamp,
    .line-clamp-1 {
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
    }

    .waralaba-card .waralaba-detail .waralaba-name {
        color: #34364a;
        font-size: 20px !important;
        font-weight: 700 !important;
        line-height: 30px;
        min-height: 10px;
        position: relative;
        z-index: 80 !important;
    }

    .waralaba-card .waralaba-footer {
        align-items: baseline;
        display: flex;
        gap: 4px;
        justify-content: space-between;
    }

    .waralaba-card .waralaba-footer .star-rating {
        align-items: flex-start;
        display: flex;
        flex-wrap: wrap;
        gap: 2px;
    }


    @media only screen and (min-width: 768px) and (max-width: 1250px) {
        .waralaba-card .waralaba-footer .star-rating img {
            width: 20px !important;
        }
    }

    .waralaba-card .waralaba-footer .star-rating img {
        margin-top: 5px;
        width: 18px;
    }

    .checkout .payment-details .header-title {
        color: #34364a;
        font-size: 17px;
        font-weight: 700;
        margin: 0 0 16px;
    }

    .checkout .payment-details .title {
        color: #34364a;
        float: left;
        font-size: 16px !important;
        font-weight: 400;
        margin: 0;
    }

    .checkout .payment-details .value {
        color: #34364a;
        float: right;
        font-size: 16px;
        font-weight: 400;
        margin: 0;
    }

    .clear {
        clear: both;
    }

    .embed-responsive {
        display: block;
        height: 25vh;
        overflow: hidden;
        padding: 0;
        position: relative;
        width: 100% !important;
    }

    .foto-iframe {
        border-radius: 5px;
        transition: all .3s;
        height: 175px;

    }

    .embed-responsive:before {
        content: "";
        display: block;
    }

    .embed-responsive iframe {
        border-radius: 16px;
        width: 100%;
        height: 25vh;
    }

    .plyr__foto-embed img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .text-green {
        color: #22c58b !important;
    }

    .border-theme {
        border: 2px solid var(--limeColor);
    }

    .bg-theme-light {
        background-color: #e9fff0d2;
    }

    .form-select {

        border: 1px solid #ced4da !important;
        padding: 0.375rem 2.25rem 0.375rem 0.75rem !important;

    }

    .share-button {
        background-color: #05A8B4;
        border: none;
        border-radius: 50%;
        width: 36px;
        height: 36px;
        bottom: 20px;
        right: 20px;
    }

    .share-button i {
        color: #000;
        font-size: 20px;
    }

    .custom-btn {
        background-color: #05A8B4;
        color: white;
        padding: 14px 24px;
        border: none;
        border-radius: 30px;
        display: inline-block;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .custom-btn:hover {
        background-color: #05A8B4;
        color: white;
    }

    .embed-responsive {
        position: relative;
    }

    .logo {
        width: 100px;
        height: auto;
        border-radius: 5px;
    }

    .img-container {
        width: 100%;
        padding-top: 100%;
        position: relative;
        overflow: hidden;
    }

    .img-container img {
        position: absolute;
        width: auto;
        height: 100%;
        top: 0;
        left: 0;
    }

    .waralaba-card img.small-circle-img {
        width: auto;
        height: 40px;
    }

    .d-flex.flex-column h6,
    .d-flex.flex-column p {
        margin: 0;
    }
    </style>
    @endpush
    <section class="py-3" style="margin-top: 20px">
        <div class="container">
            <div class="mt-5 row pricing testimonials mentors checkout gy-4" id="reviews">
                <div class="col-lg-4 col-md-5 col-12 p-md-0 offset-lg-1">
                    <div class="d-block" id="waralabaCardCheckout"
                        style="position: relative; transition: all 600ms ease-in-out 0s; top: 0px;">
                        <div class="waralaba-card mb-4">
                            <div class="embed-responsive embed-responsive-16by9 foto-iframe">
                                <div class="plyr__foto-embed" id="foto waralaba">
                                    <img src="{{ $waralaba->image_url_1 }}" class="img-fluid" alt="Gambar Waralaba">
                                </div>
                            </div>
                            <div class="waralaba-detail">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex gap-3 align-items-center">
                                        <img class="small-circle-img" src="{{ $waralaba->logo }}" alt="Waralaba Image">
                                        <div class="d-flex flex-column">
                                            <h6><b>{{ $waralaba->waralaba_name }}</b></h6>
                                            <p>{{ $waralaba->concept }}</p>
                                            <div class="waralaba-footer mt-auto">
                                                <div class="star-rating">
                                                    @for ($i = 0; $i < $waralaba->rating; $i++)
                                                        <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"
                                                            alt="ic_star">
                                                        @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button onclick="copyPageURL()" class="share-button">
                                        <i class="fas fa-share-alt" style="color: white;"></i>
                                    </button>
                                </div>
                            </div>
                            <h5><b>Rp. {{ number_format(floatval($waralaba->price), 0, ',', '.') }}</b></h5>
                        </div>
                        <div class="payment-details">
                            <div class="item-pricing item-mentor d-flex flex-column gap-3 mb-3">
                                <div class="d-flex justify-content-between gap-2 align-items-center benefits-for-you">
                                    <div class="d-flex gap-3 align-items-center">
                                        <img src="https://buildwithangga.com/themes/front/images/ic_sertifikat.svg"
                                            alt="BuildWith Angga">
                                        <div class="d-flex flex-column">
                                            <h5 class="header-title mb-1">
                                                {{ $companyName }}
                                            </h5>
                                            <p>{{ $totalWaralaba }} Waralaba</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="payment-details">
                            <div class="item-pricing item-mentor d-flex flex-column gap-3">
                                <h5 class="header-title mb-0">
                                    Informasi Waralaba
                                </h5>
                                <div class="item">
                                    <p>
                                        {{ $waralaba->description }}
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between gap-2 align-items-center benefits-for-you">
                                    <div class="d-flex gap-3 align-items-center">
                                        <img src="https://buildwithangga.com/themes/front/images/ic_sertifikat.svg"
                                            alt="BuildWith Angga">
                                        <div class="d-flex flex-column">
                                            <h5 class="header-title mb-1">
                                                Kategori Waralaba
                                            </h5>
                                            <p class="form-control-static">{{ $waralaba->category->category_name }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between gap-2 align-items-center benefits-for-you">
                                    <div class="d-flex gap-3 align-items-center">
                                        <img src="https://buildwithangga.com/themes/front/images/ic_sertifikat.svg"
                                            alt="BuildWith Angga">
                                        <div class="d-flex flex-column">
                                            <h5 class="header-title mb-1">
                                                Tahun Berdiri
                                            </h5>
                                            <p>{{ \Carbon\Carbon::parse($waralaba->since)->translatedFormat('d F Y') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between gap-2 align-items-center benefits-for-you">
                                    <div class="d-flex gap-3 align-items-center">
                                        <img src="https://buildwithangga.com/themes/front/images/ic_sertifikat.svg"
                                            alt="BuildWith Angga">
                                        <div class="d-flex flex-column">
                                            <h5 class="header-title mb-1">
                                                Total Outlet
                                            </h5>
                                            <p>{{ $waralaba->outlet_total }} Outlet</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-between">
                                    <div class="col-md-8">
                                        <a id="downloadLink1" href="{{ $waralaba->brochure_link }}"
                                            class="mt-4 mb-2 btn bgTheme w-100 text-white border-12 py-3">
                                            <i class="fas fa-download me-2"></i> Unduh Brosur
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a id="downloadLink2" href="https://wa.me/{{ $waralaba->contact }}"
                                            class="mt-4 mb-2 btn bgTheme w-100 text-white border-12 py-3">
                                            <i class="fas fa-comment me-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 col-12 ">
                    <div class="payment-details">
                        <div class="item-pricing item-mentor d-flex flex-column gap-3">
                            <h5 class="header-title mb-0">
                                Keunggulan Waralaba
                            </h5>
                            <div class="d-flex justify-content-between gap-2 align-items-center benefits-for-you">
                                <div class="d-flex gap-3 align-items-center">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_sertifikat.svg"
                                        alt="BuildWith Angga">
                                    <div class="d-flex flex-column">
                                        <h5 class="header-title mb-1">
                                            Pelatihan & SOP
                                        </h5>
                                        <p>Dapatkan Pelatihan dari franchisor beserta sistem SOP terstandar dan tertata
                                            selama 5 bulan
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between gap-2 align-items-center benefits-for-you">
                                <div class="d-flex gap-3 align-items-center">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_sertifikat.svg"
                                        alt="BuildWith Angga">
                                    <div class="d-flex flex-column">
                                        <h5 class="header-title mb-1">
                                            Termasuk Persediaan
                                        </h5>
                                        <p>Sudah termasuk persediaan awal dalam setiap pembelian</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between gap-2 align-items-center benefits-for-you">
                                <div class="d-flex gap-3 align-items-center">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_sertifikat.svg"
                                        alt="BuildWith Angga">
                                    <div class="d-flex flex-column">
                                        <h5 class="header-title mb-1">
                                            Bantuan Marketing
                                        </h5>
                                        <p>Bantuan dukungan pemasaran untuk sukseskan bisnis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between gap-2 align-items-center benefits-for-you">
                                <div class="d-flex gap-3 align-items-center">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_sertifikat.svg"
                                        alt="BuildWith Angga">
                                    <div class="d-flex flex-column">
                                        <h5 class="header-title mb-1">
                                            Termasuk Peralatan
                                        </h5>
                                        <p>Setiap pembelian franchise akan dilengkapi dengan peralatan awal sehingga
                                            tidak perlu membeli lagi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="payment-details">
                        <div class="item-pricing item-mentor d-flex flex-column gap-3">
                            <p class="title"><b>Galeri Waralaba</b></p>
                            <div class="row">
                                <div id="carouselKategori" class="carousel slide">
                                    <div class="carousel-inner">
                                        <?php
                                         $imageUrls = [
                                            $waralaba->image_url_1,
                                            $waralaba->image_url_2,
                                            $waralaba->image_url_3,
                                            $waralaba->image_url_4,
                                            $waralaba->image_url_1,
                                            $waralaba->image_url_2,
                                            $waralaba->image_url_3,
                                            $waralaba->image_url_4,

                                        ];
                                        $categoryChunks = array_chunk($imageUrls, 4);
                                        ?>
                                        <?php $active = true; ?>
                                        @foreach ($categoryChunks as $chunk)
                                        <div class="carousel-item @if($active) active @endif">
                                            <div class="container">
                                                <div class="row">
                                                    @foreach ($chunk as $category)
                                                    <div class="col">
                                                        <div class="category-item"
                                                            style="width: 100%; height: 100%; border: 1px solid #ccc; border-radius: 5px; overflow: hidden;">
                                                            <img src="{{ $category }}" alt="Kategori"
                                                                style="width: 100%; height: 100%; object-fit: cover;">
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <?php    $active = false; ?>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselKategori" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselKategori" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>

                                </div>
                            </div>
                            <p class="title"><b>Konsep Bisnis</b></p>
                            <div class="item">
                                <p class="title">Konsep</p>
                                <p class="value"> {{ $waralaba->concept }} </p>
                            </div>
                            <div class="item">
                                <p class="title">Ukuran Konsep</p>
                                <p class="value">{{ $waralaba->concept_size }} m<sup>2</sup> </p>
                            </div>
                            <div class="item">
                                <p class="title">Durasi Lisensi (Tahun)</p>
                                <p class="value">
                                    @if ($waralaba->license_duration == 0)
                                    Tidak ada lisensi
                                    @else
                                    {{ $waralaba->license_duration }}
                                    @endif
                                </p>
                            </div>
                            <div class="item">
                                <p class="title">Income</p>
                                <p class="value"> Rp. {{ number_format($waralaba->income, 0, ',', '.') }} </p>
                            </div>
                            <div class="item">
                                <p class="title">Royalty Fee</p>
                                <p class="value">
                                    @if ($waralaba->royality == 0)
                                    Tidak ada royalty
                                    @else
                                    Rp. {{ number_format($waralaba->royality, 0, ',', '.') }}
                                    @endif
                                </p>
                            </div>
                            <a href="{{ route('checkout', ['id' => $waralaba->id]) }}"
                                class="mt-4 mb-2 btn bgTheme w-100 text-white border-12 py-3">
                                Beli Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</x-user-layout>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
function copyPageURL() {
    var dummy = document.createElement('input');
    var currentURL = window.location.href;

    document.body.appendChild(dummy);
    dummy.value = currentURL;
    dummy.select();
    document.execCommand('copy');
    document.body.removeChild(dummy);

    alert('Tautan  {{ $waralaba->waralaba_name }} berhasil disalin.');
}

document.getElementById('downloadLink').addEventListener('click', function(event) {
    event.preventDefault();

    var brochureLink = this.getAttribute('href');

    var newTab = window.open(brochureLink, '_blank');

    setTimeout(function() {
        newTab.location.href = brochureLink;
    }, 500);
});
</script>