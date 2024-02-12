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