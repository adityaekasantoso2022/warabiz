<x-user-layout title="Warabiz-Home" active="home">
    @push('addonStyle')
    <style>
    body {
        background: #FEFEFE !important;
    }

    .banner-container {
        position: relative;
        width: 100%;
        height: 360px;
        top: 60px;
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

    .banner-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: opacity 1s ease-in-out;
        /* Menambahkan efek transisi smooth */
        opacity: 0;
        /* Sembunyikan semua gambar awalnya */
    }

    .banner-slide.active {
        opacity: 1;
        /* Tampilkan gambar yang sedang aktif */
    }

    .card-container {
        width: 90%;
        margin: 0 auto;
        position: relative;
        top: -20px;
        border-radius: 10px;
        background-color: #fff;
        padding: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        z-index: 2;
    }

    .card-container h3 {
        margin-top: 0;
        font-size: 20px;
        color: #333;
        font-weight: bold;
    }

    .card-container hr {
        margin-top: 20px;
        margin-bottom: 10px;
        border: none;
        border-top: 1px solid #A4A4A4;
    }

    .search-container {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .search-label {
        margin-top: 20px;
        text-align: left;
        font-weight: 600;
    }


    .search-waralaba {
        width: 100%;
        margin-top: 5px;
        padding: 10px 20px;
        border-radius: 2px;
        box-sizing: border-box;
        outline: 1px solid #D5D5D5;
        height: 40px;
    }

    .search-column {
        width: calc(33.33% - 10px);
    }

    .form-control::placeholder {
        padding-left: 10px;
    }

    @media only screen and (max-width: 768px) {
        .banner-container {
            height: 150px;
            top: 50px;
        }

        .card-container {
            height: auto;
            top: -10px;
        }

        .search-column {
            width: 100%;
            margin-bottom: 10px;
        }

        .search-box,
        .search-waralaba {
            padding: 8px;
            height: 35px;
        }


        .card-container h3 {
            font-size: 16px;
        }

        .search-label {
            font-size: 14px;
        }
    }

    .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .cardwaralaba .card-img-top {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 5px;
        color: black
    }


    .card.card-home {
        min-height: 320px;
        transition: 0.3s;
        background: #fff;
        border: 1px;
        border-radius: 10px;
        color: #34364a;
        flex-direction: column;
        height: 100px;
        width: 240px;
        padding: 14px;
        position: relative;
        row-gap: 16px;
        margin-top: 5px;
        box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
    }

    .card.card-populer {
        transition: 0.3s;
        background: #fff;
        border: 1px;
        border-radius: 10px;
        color: #34364a;
        height: 90px;
        width: 240px;
        padding-left: 14px;
        position: relative;
        row-gap: 16px;
        box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
    }


    .card .small-circle-img {
        width: 40px;
        height: 40px;
        /* Ukuran logo waralaba yang konsisten */
        object-fit: contain;
        border-radius: 60%;
        overflow: hidden;
        margin-top: 18px;
    }

    .card .d-flex.flex-column {
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .card .d-flex.flex-column p {
        font-size: 13px
    }

    .card .d-flex.flex-column h6 {
        margin-top: 20px;
        margin-bottom: 2px;
        font-size: 16px
    }

    .card .waralaba-footer .star-rating {
        align-items: flex-start;
        display: flex;
        flex-wrap: wrap;
        gap: 2px;

    }

    .card .waralaba-footer .star-rating img {
        width: 16px;
        margin-top: 10px;

    }

    .waralaba-responsive {
        display: block;
        height: 150px;
        overflow: hidden;
        padding: 0;
        position: relative;
        width: 100% !important;
    }

    .waralaba-responsive iframe {
        border-radius: 14px;
        width: 100%;
        height: 100%;
    }

    .cardwaralaba {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
    }

    .card .badge {
        font-size: 10px;
        padding: 6px 8px;
        margin: 0;
        border-radius: 4px;
    }

    .sold-count {
        font-size: 12px;
        color: #6c757d;
        margin-left: 5px;
        margin-top: 12px;
    }

    .row-cols-md-5 .col {
        flex: 0 0 50%;
        max-width: 50%;
    }

    @media only screen and (max-width: 768px) {
        .row-cols-md-5 .col {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    @media only screen and (min-width: 768px) {
        .row-cols-lg-5 .col {
            flex: 0 0 20%;
            max-width: 20%;
        }
    }

    @media only screen and (max-width: 768px) {
        .row-cols-lg-5 .col {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    .waralaba-price {
        font-size: 16px;
        font-weight: bold;
        color: #333;
        margin-top: 14px;
    }

    .badge-container {
        position: absolute;
        top: 10px;
        left: 10px;
        z-index: 1;
    }

    /* Tambahkan CSS untuk menyembunyikan kartu yang tidak sesuai dengan pencarian */
    .card-home {
        display: block;
        width: 240px;
        margin-right: 15px;
    }

    @media only screen and (max-width: 768px) {
        .card.card-home {
            min-height: 250px;
            transition: 0.3s;
            background: #fff;
            border: 1px;
            border-radius: 10px;
            color: #34364a;
            height: 100px;
            width: calc(100% - 2px);
            margin: 0 2px 2px 0;
            padding: 10px;
            position: relative;
            row-gap: 10px;
            margin-top: 5px;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
        }

        .card .d-flex.flex-column {
            margin-top: 5px;
            margin-bottom: 5px;
        }

        .card .d-flex.flex-column p {
            font-size: 13px
        }

        .card .d-flex.flex-column h6 {
            margin-bottom: 2px;
            font-size: 16px
        }

        .card .waralaba-footer .star-rating {
            align-items: flex-start;
            display: flex;
            flex-wrap: wrap;
            gap: 2px;

        }

        .card .waralaba-footer .star-rating img {
            width: 16px;

        }

        .cardwaralaba .card-img-top {
            width: 100%;
            height: 100px;
            /* Ubah ketinggian sesuai kebutuhan */
            object-fit: cover;
        }

        .waralaba-responsive {
            display: block;
            height: 80px;
            overflow: hidden;
            padding: 0;
            position: relative;
            width: 100% !important;
        }

        .card.card-populer {
            background: #fff;
            border: 1px;
            border-radius: 6px;
            color: #34364a;
            height: 80px;
            width: 180px;
            position: relative;
            row-gap: 10px;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
        }



    }

    .card-home.hidden {
        display: none;
    }

    .waralaba-name {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        color: black
    }

    .two-column-flexbox {
        display: flex;
    }

    .two-column-flexbox .card-column {
        flex: 1;
        /* Setiap kolom akan mengisi ruang yang sama */
        margin-right: 10px;
        /* Jarak antara kolom */
    }

    /* Untuk kolom terakhir, hilangkan margin-right */
    .two-column-flexbox .card-column:last-child {
        margin-right: 0;
    }

    .card-column {
        flex: 1;
        margin-right: 10px;
    }

    .category-carousel {
        display: flex;
        overflow-x: auto;
    }

    .category-item {
        flex: 0 0 auto;
        margin-right: 10px;
        border: 2px solid #ccc;
        border-radius: 10px;
        overflow: hidden;
    }

    .category-item img {
        width: 100px;
        /* Sesuaikan ukuran gambar mini sesuai kebutuhan */
        height: auto;
        display: block;
    }

    .search-column .search-box {
        border: none;
    }

    .search-column .search-box:focus {
        outline: none;
    }
    </style>
    @endpush
    <section class="mt-4 mb-4">
        <div class="banner-container">
            <img src="https://api.rintisan.co.id/storage/banners/zmipoQaqG8Z8MNlucvmNmRmlNus1ibAk9acjJiaa.png"
                alt="Banner 1" class="banner-slide">
            <img src="https://api.rintisan.co.id/storage/banners/ymejKHBvg5A8KG4eQqKDxjRHAb9SQwzHrg9xrehY.jpg"
                alt="Banner 2" class="banner-slide">
        </div>
        <div class="card-container">
            <div class="two-column-flexbox">
                <div class="card-column" style="padding-right: 40px;">
                    <h5 class="card-title mb-3">Kategori Pilihan</h5>
                    <div id="carouselKategori" class="carousel slide">
                        <div class="carousel-inner">
                            <?php
                        // Ambil daftar kategori
                        $categories = [
                            "https://awsimages.detik.net.id/community/media/visual/2022/11/20/rijsttafel-indonesia-2.jpeg?w=600&q=90",
                            "https://static.wixstatic.com/media/ca1ed0_59b08e5d927a4d77ba6494a265deb199~mv2.jpg/v1/fill/w_1000,h_667,al_c,q_85,usm_0.66_1.00_0.01/ca1ed0_59b08e5d927a4d77ba6494a265deb199~mv2.jpg",
                            "https://everpro.id/wp-content/uploads/2022/09/jnt-reg.jpg",
                            "https://via.placeholder.com/150",
                            "https://via.placeholder.com/150",
                            "https://via.placeholder.com/150",
                            "https://via.placeholder.com/150",
                            "https://via.placeholder.com/150",
                            "https://via.placeholder.com/150",
                            "https://via.placeholder.com/150",
                            "https://via.placeholder.com/150",
                            "https://via.placeholder.com/150"
                        ];

                        // Memecah daftar kategori menjadi kelompok empat
                        $categoryChunks = array_chunk($categories, 4);
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
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselKategori"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselKategori"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
                <div class="card-column">
                    <h5 class="card-title mb-3 hidden-xs">Cari Waralaba Keinginanmu</h5>
                    <div class="search-container">
                        <div class="search-column">
                            <div class="search-label">Tipe Franchise</div>
                            <div class="input-group">
                                <select class="search-box">
                                    <option value="" selected disabled>Pilih tipe</option>
                                    <option value="Restoran">Restoran</option>
                                    <option value="Restoran">Semi Resto</option>
                                    <option value="Gerai">Gerai</option>
                                    <option value="Booth">Booth</option>
                                </select>
                            </div>
                        </div>
                        <div class="search-column">
                            <div class="search-label">Harga</div>
                            <input type="text" class="search-box" placeholder="Masukan harga">
                        </div>
                        <div class="search-column hidden-xs">
                            <div class="search-label">Lokasi</div>
                            <input type="text" class="search-box" placeholder="Masukan lokasi">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <div class="input-group">
                            <input type="text" name="search" id="search"
                                class="form-control border rounded-3 shadow-none" placeholder="Cari di warabiz">
                            <div class="input-group-append" style="margin-left: 15px;">
                                <button class="btn btn-primary" type="button"
                                    style="background-color: #009BB8; border: none; height: 40px;">
                                    <i class="fa fa-search" style="color: white;"></i> Search
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
    /* Tambahkan CSS untuk responsivitas di perangkat seluler */
    @media only screen and (max-width: 576px) {
        .two-column-flexbox {
            flex-direction: column;
        }

        .card-column {
            width: 110%;
            margin-right: 0;
        }

        /* Sembunyikan judul "Cari Waralaba Keinginanmu" di perangkat seluler */
        .card-title.hidden-xs {
            display: none;
        }

        .search-column.hidden-xs {
            display: none;
        }

        .small-circle-img {
            display: none;
            /* Sembunyikan gambar kecil di perangkat seluler */
        }

    }
    </style>
    <section class="mt-0 mb-4" id="popular-section">
        <div class="container">
            <h5 class="card-title mb-3">Waralaba Terlaris</h5>

            <div id="carouselWaralaba" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
            // Mengurutkan waralaba berdasarkan jumlah terjual terbanyak
            $sortedWaralabas = $waralabas->sortByDesc(function ($waralaba) {
                return $waralaba->soldCount();
            });

            // Memecah array waralabas menjadi kelompok lima
            $waralabasChunks = array_chunk($sortedWaralabas->all(), 5);

            // Memastikan hanya ada 10 kartu yang ditampilkan
            $waralabasChunks = array_slice($waralabasChunks, 0, 2);

            // Menentukan slide pertama sebagai slide aktif
            $active = true;
            ?>
                    @foreach ($waralabasChunks as $chunk)
                    <div class="carousel-item @if($active) active @endif">
                        <div class="container">
                            <div class="row row-cols-1 row-cols-lg-5 g-4">
                                @foreach ($chunk as $waralaba)
                                <div class="col">
                                    <a href="{{ route('waralaba', $waralaba->id) }}" class="text-decoration-none">
                                        <div class="card card-populer">
                                            <div class="d-flex gap-3 align-items-center">
                                                <img class="small-circle-img" src="{{ $waralaba->logo }}"
                                                    alt="Waralaba Image">
                                                <div class="d-flex flex-column">
                                                    <h6 class="waralaba-name">
                                                        <b>{{ substr($waralaba->waralaba_name, 0, 18) }}</b></h6>
                                                    <p>{{ $waralaba->concept }} <span
                                                            class="sold-count">{{ $waralaba->soldCount() }}
                                                            Terjual</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <?php $active = false; ?>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselWaralaba"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselWaralaba"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
    </section>

    <section class="mt-4 mb-4">
        <div class="container-scrollable">
            <div class="container">
                <h5 class="card-title mt-5 mb-3">Semua Waralaba</h5>
                <div class="row row-cols-1 row-cols-lg-5 g-4">
                    @foreach ($waralabas as $waralaba)
                    <div class="col">
                        <a href="{{ route('waralaba', $waralaba->id) }}" class="text-decoration-none">
                            <div class="card card-home">
                                <div class="waralaba-responsive">
                                    @if ($waralaba->soldCount() > 3)
                                    <div class="badge-container">
                                        <div class="badge bg-success">Terlaris</div>
                                    </div>
                                    @endif
                                    <div class="cardwaralaba" id="card">
                                        <img src="{{ $waralaba->image_url_1 }}" class="card-img-top"
                                            alt="Gambar {{ $waralaba->waralaba_name }}">
                                    </div>
                                </div>
                                <div class="d-flex gap-3 align-items-center">
                                    <img class="small-circle-img" src="{{ $waralaba->logo }}" alt="Waralaba Image">
                                    <div class="d-flex flex-column">
                                        <h6 class="waralaba-name"><b>{{ substr($waralaba->waralaba_name, 0, 19) }}</b>
                                        </h6>
                                        <p>{{ $waralaba->concept }}</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="waralaba-price">
                                        Rp. {{ number_format(floatval($waralaba->price), 0, ',', '.') }}
                                    </div>
                                </div>
                                <div class="waralaba-footer mt-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="star-rating">
                                            @for ($i = 0; $i < $waralaba->rating; $i++)
                                                <img src="https://buildwithangga.com/themes/front/images/ic_star.svg"
                                                    alt="ic_star">
                                                @endfor
                                        </div>
                                        <div class="sold-count">
                                            {{ $waralaba->soldCount() }} Terjual
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @push('addonScript')
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fungsi pencarian untuk semua waralaba
        document.getElementById('search').addEventListener('input', function() {
            let searchKeyword = this.value.toLowerCase();
            let cards = document.querySelectorAll('.card-home');
            let popularSection = document.getElementById('popular-section');

            cards.forEach(function(card) {
                let waralabaName = card.querySelector('h6').innerText.toLowerCase();
                if (waralabaName.includes(searchKeyword)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });

            // Memeriksa apakah input pencarian kosong
            if (searchKeyword === '') {
                showPopularCards();
            } else {
                // Menyembunyikan kartu waralaba populer saat sedang melakukan pencarian
                popularSection.style.display = 'none';
            }
        });

        // Fungsi untuk memperlihatkan kembali kartu waralaba populer setelah selesai pencarian
        function showPopularCards() {
            let popularCards = document.querySelectorAll('#popular-section .card-populer');
            popularCards.forEach(function(card) {
                card.style.display = 'block';
            });

            // Menampilkan kembali bagian populer setelah input pencarian dikosongkan
            document.getElementById('popular-section').style.display = 'block';
        }
    });
    </script>
    @endpush
</x-user-layout>

<script>
// Ambil semua gambar dalam slider
const slides = document.querySelectorAll('.banner-slide');
const slideCount = slides.length;
let currentSlide = 0;

// Fungsi untuk mengganti gambar setiap 15 detik
function nextSlide() {
    slides[currentSlide].classList.remove('active'); // Sembunyikan gambar saat ini
    currentSlide = (currentSlide + 1) % slideCount; // Pindah ke gambar berikutnya
    slides[currentSlide].classList.add('active'); // Tampilkan gambar berikutnya
}

// Atur interval untuk memanggil fungsi nextSlide setiap 15 detik
setInterval(nextSlide, 15000); // 15 detik dalam milidetik (1000 ms = 1 detik)

// Tampilkan gambar pertama saat memuat halaman
slides[currentSlide].classList.add('active');
</script>