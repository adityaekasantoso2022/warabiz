<x-user-layout title="WaraEdu" active="waraedu">
    @push('addonStyle')
    <style>
    /* Style untuk latar belakang dan elemen-elemen lainnya */
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
    .article-card {
        background-color: #fff;
        border-radius: 8px;
        margin-bottom: 30px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .article-card img {
        width: 100%;
        height: 180px;
        /* Ubah tinggi gambar sesuai kebutuhan */
        object-fit: cover;
        border-radius: 10px 10px 0 0;
    }

    .article-card .card-body {
        padding: 20px;
    }

    .article-card h5 {
        font-weight: bold;
        color: #131313;
        margin-bottom: 10px;
    }

    .article-card p {
        color: #666;
        margin-bottom: 15px;
    }

    .article-card .read-more {
        color: #009BB8;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
    }

    .article-content {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .zoom-effect {
        transition: transform 0.3s;
    }

    .zoom-effect:hover {
        transform: translateY(-5px);
    }

    .sold-count {
        font-size: 12px;
        color: #6c757d;
        margin-left: 5px;
        margin-top: 12px;
    }
    </style>
    @endpush

    <section style="margin-top: 140px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="banner-carousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2024/2/15/2fdc3b2e-c9de-4d7c-b338-5aa544231639.jpg.webp?ect=4g"
                                    class="d-block w-100" alt="Banner 1">
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2024/2/15/9e0cbddf-0b29-4fe9-810a-9fdcc140271f.jpg.webp?ect=4g"
                                    class="d-block w-100" alt="Banner 2">
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2024/2/22/b9519e4c-81c6-4791-acc7-c192c5f524c9.jpg.webp?ect=4g"
                                    class="d-block w-100" alt="Banner 3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#banner-carousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#banner-carousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                @foreach($articles as $article)
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="article-card zoom-effect">
                        <a href="{{ route('waraedu-detail', $article->id) }}" class="text-decoration-none">
                            <img src="{{ $article->image_url }}" alt="Gambar Artikel">
                            <div class="card-body">
                                <h5>{{ substr($article->title, 0, 45) }}..</h5>
                                <p>{{ $article->category }} <span
                                        class="sold-count">{{ \Carbon\Carbon::parse($article->created_at)->format('d/m/Y H:i') }}</span>
                                </p>
                                <p class="article-content">{!! substr(strip_tags($article->article), 0, 135) !!}...</p>
                                <a href="{{ route('waraedu-detail', $article->id) }}" class="read-more">Selengkapnya
                                    ></a>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-user-layout>

@push('addonScript')
<script>
// Inisialisasi carousel
var myCarousel = new bootstrap.Carousel(document.getElementById('banner-carousel'), {
    interval: 1000, // Interval perpindahan otomatis dalam milidetik (misalnya, 5000 ms = 5 detik)
    wrap: true // Aktifkan untuk melakukan perputaran dari akhir ke awal dan sebaliknya
});
</script>
@endpush