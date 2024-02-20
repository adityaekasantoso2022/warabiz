<x-user-layout title="Checkout" active="checkout">
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
        .course-card,
        .course-card-responsive {
            background: #fff;
            border: none;
            border-radius: 14px;
            box-sizing: border-box;
            color: #34364a;
            display: flex;
            flex-direction: column;
            height: 100%;
            padding: 30px;
            position: relative;
            row-gap: 24px;
        }

        .pricing .item-pricing {
            background: #fff;
            border-radius: 16px;
            padding: 30px;
        }

        .course-card .course-detail .course-name,
        .course-card-responsive .course-detail .course-name,
        .line-clamp,
        .line-clamp-1 {
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            display: -webkit-box;
            overflow: hidden;
        }

        .course-card .course-detail .course-name {
            color: #34364a;
            font-size: 20px !important;
            font-weight: 700 !important;
            line-height: 30px;
            min-height: 10px;
            position: relative;
            z-index: 80 !important;
        }

        .course-card .course-footer {
            align-items: baseline;
            display: flex;
            gap: 4px;
            justify-content: space-between;
        }

        .course-card .course-footer .star-rating {
            align-items: flex-start;
            display: flex;
            flex-wrap: wrap;
            gap: 2px;
        }

        @media only screen and (min-width: 768px) and (max-width: 1250px) {
            .course-card .course-footer .star-rating img {
                width: 20px !important;
            }
        }

        .course-card .course-footer .star-rating img {
            width: 24px;
        }

        .checkout .payment-details .header-title {
            color: #34364a;
            font-size: 17px;
            font-weight: 700;
            margin: 0 0 16px;
        }

        .checkout .payment-details .item {
            margin-bottom: 16px;
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

        .video-iframe {
            border-radius: 16px;
            transition: all .3s;
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

        .plyr__video-embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
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

        .small-circle-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .form-select {
            border: 1px solid #ced4da !important;
            padding: 0.375rem 2.25rem 0.375rem 0.75rem !important;
        }

        .form-control {
            border-radius: 8px;
            /* Atur sudut bulat */
            border: 2px solid #CED4DA;
            /* Warna border abu-abu dan ketebalan 8px */
            padding: 10px 15px;
            /* Atur padding sesuai kebutuhan Anda */
            font-size: 16px;
            /* Atur ukuran font sesuai kebutuhan Anda */
            line-height: 1.5;
            /* Sesuaikan dengan kebutuhan Anda */
            color: #495057;
            /* Warna teks */
            background-color: #FFFFFF;
            /* Warna latar belakang */
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            width: 100%;
            /* Menyesuaikan lebar form-control dengan parentnya */
        }

        /* Style saat form-control mendapat fokus */
        .form-control:focus {
            border-color: #4F94D7;
            /* Ganti warna border saat mendapat fokus */
            outline: 0;
            /* Hapus outline */
            box-shadow: 0 0 0 0.25rem rgba(79, 148, 215, 0.25);
            /* Efek shadow saat mendapat fokus */
        }

        /* Gaya label */
        .form-label {
            display: block;
            /* Menjadikan label sebagai block element */
            margin-bottom: 5px;
            /* Memberikan margin bawah agar tidak rapat dengan input */
            font-weight: bold;
            /* Memberikan ketebalan pada teks label */
        }

        .custom-payment-info {
            padding: 1rem;
            display: flex;
            align-items: center;
            border: 1px solid #4F94D7;
            background-color: ##f9ffff;
            border-radius: 5px;
            margin-bottom: 1rem;
        }

        .custom-payment-info h5 {
            margin: 0;
            margin-right: 1rem;
            color: #4F94D7;
        }

        .custom-payment-info p {
            font-weight: bold;
            color: #343a40;
        }

        /* CSS untuk membuat modal responsif */
        .modal-dialog {
            max-width: 60%;
            margin: 1.75rem auto;
        }

        .modal-content {
            border: none;
            border-radius: 0.5rem;
        }

        .modal-body {
            padding: 2rem;
            background-color: #ffffff;
            /* Ganti latar belakang menjadi putih */
        }

        .invoice-box img {
            max-width: 100%;
            height: auto;
            margin-bottom: 1rem;
        }

        /* Tambahkan media queries untuk responsivitas */
        @media (max-width: 576px) {
            .modal-dialog {
                max-width: 100%;
            }
        }

        /* Gaya CSS untuk checkbox dan pernyataan */
        .custom-checkbox {
            display: inline-block;
            vertical-align: middle;
            cursor: pointer;
        }

        .custom-checkbox input[type="checkbox"] {
            display: none;
        }

        .checkmark {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;

            /* Sesuaikan ukuran kotak centang dengan kebutuhan Anda */
            background-color: #fff;
            border: 1px solid #ccc;
        }

        /* Gaya CSS untuk kotak centang saat tercentang */
        .custom-checkbox input[type="checkbox"]:checked+.checkmark {
            background-color: #429488;
            /* Warna latar belakang saat tercentang */
            border-color: #429488;
            /* Warna border saat tercentang */
        }

        /* Gaya CSS untuk tanda centang */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Gaya CSS untuk tanda centang saat tercentang */
        .custom-checkbox input[type="checkbox"]:checked+.checkmark:after {
            display: block;
        }

        /* Gaya CSS untuk tanda centang */
        .checkmark:after {
            left: 7px;
            /* Sesuaikan posisi tanda centang dengan kebutuhan Anda */
            top: 3px;
            /* Sesuaikan posisi tanda centang dengan kebutuhan Anda */
            width: 5px;
            /* Sesuaikan ukuran tanda centang dengan kebutuhan Anda */
            height: 10px;
            /* Sesuaikan ukuran tanda centang dengan kebutuhan Anda */
            border: solid #fff;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        /* Gaya CSS untuk pernyataan */
        .statement {
            display: inline-block;
            vertical-align: middle;
            margin-left: 10px;
            /* Sesuaikan margin kiri dengan kebutuhan Anda */
            font-size: 16px;
            /* Sesuaikan ukuran teks dengan kebutuhan Anda */
        }


        .small-circle-img {
            width: 50px;
            /* Sesuaikan lebar lingkaran sesuai kebutuhan */
            height: 50px;
            /* Sesuaikan tinggi lingkaran sesuai kebutuhan */
            object-fit: contain;
            /* Membuat gambar tetap proporsional dan terlihat sepenuhnya di dalam lingkaran */
            border-radius: 50%;
            /* Membuat gambar menjadi lingkaran */
            overflow: hidden;
            /* Menghilangkan bagian gambar yang keluar dari lingkaran */
        }
    </style>
    @endpush
    <section class="py-5" style="margin-top: 10px">
        <div class="container">
            <div class="mt-5 row pricing testimonials mentors checkout gy-4" id="reviews">
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="payment-details">
                        <div class="item-pricing item-mentor d-flex flex-column gap-3">
                            <div class="custom-payment-info">
                                <h5><i class="fas fa-info-circle"></i></h5>

                                <p>
                                    Lakukan pembayaran sesuai nominal yang tertera</b>
                                </p>
                            </div>
                            <h5 class="header-title mb-0">
                                Metode Pembayaran
                            </h5>
                            <div class="item">
                                <p>
                                    Mohon lakukan pembayaran melalui rekening bank berikut. Semua rekening tersebut atas
                                    nama <b>PT. Warabisnis Indonesia</b>.
                                </p>
                            </div>
                            <div class="d-flex justify-content-between gap-2 align-items-center benefits-for-you">
                                <div class="d-flex gap-3 align-items-center">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_sertifikat.svg"
                                        alt="BuildWith Angga">
                                    <div class="d-flex flex-column">
                                        <h5 class="header-title mb-1">
                                            Bank BCA
                                        </h5>
                                        <p>72836265152526</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between gap-2 align-items-center benefits-for-you">
                                <div class="d-flex gap-3 align-items-center">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_sertifikat.svg"
                                        alt="BuildWith Angga">
                                    <div class="d-flex flex-column">
                                        <h5 class="header-title mb-1">
                                            Bank BNI
                                        </h5>
                                        <p>91736561522771</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between gap-2 align-items-center benefits-for-you">
                                <div class="d-flex gap-3 align-items-center">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_sertifikat.svg"
                                        alt="BuildWith Angga">
                                    <div class="d-flex flex-column">
                                        <h5 class="header-title mb-1">
                                            Bank BRI
                                        </h5>
                                        <p>88372615537182</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between gap-2 align-items-center benefits-for-you">
                                <div class="d-flex gap-3 align-items-center">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_sertifikat.svg"
                                        alt="BuildWith Angga">
                                    <div class="d-flex flex-column">
                                        <h5 class="header-title mb-1">
                                            Bank Mandiri
                                        </h5>
                                        <p>18827362651523</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="item-pricing item-mentor d-flex flex-column gap-3">
                            <h5 class="header-title mb-3 d-flex justify-content-between align-items-center">
                                <span>Detail Tagihan</span>
                                <a class="btn btn text-muted" onclick="showInvoiceModal()">Lihat Detail</a>
                            </h5>
                            <script>
                                function showInvoiceModal() {
                                    var modal = new bootstrap.Modal(document.getElementById('invoiceModal'));
                                    modal.show();
                                }
                            </script>
                            <div class="d-flex justify-content-between gap-2 align-items-center benefits-for-you">
                                <div class="d-flex gap-3 align-items-center">
                                    <img class="small-circle-img" src="{{ $waralaba->logo }}" alt="Waralaba Image">
                                    <div class="d-flex flex-column">
                                        <h5 class="header-title mb-1">
                                            {{ $waralaba->waralaba_name }}
                                        </h5>
                                        <p>{{ $waralaba->concept }}</p>
                                    </div>
                                </div>
                            </div>

                            @php
                            $waralabaPrice = floatval($waralaba->price);
                            $biayaLayanan = 100000;

                            // Generate a 3-digit unique code
                            $uniqueCode = mt_rand(100, 999);

                            // Calculate the total transfer amount
                            $totalTransfer = number_format($waralabaPrice + $biayaLayanan + $uniqueCode, 0, ',', '.');
                            @endphp
                            <div class="tab-content" id="pills-tabContent">
                                <div class="item">
                                    <p class="title">
                                        Harga waralaba
                                    </p>
                                    <p class="value">
                                        Rp. {{ number_format($waralaba->price, 0, ',', '.') }}
                                    </p>
                                    <div class="clear"></div>
                                </div>

                                <div class="item">
                                    <p class="title">
                                        Kode Unik
                                    </p>
                                    <p class="value" id="uniqueCode">
                                        {{ $uniqueCode }}
                                    </p>
                                    <div class="clear"></div>
                                </div>

                                <div class="item">
                                    <p class="title">
                                        Biaya layanan
                                    </p>
                                    <p class="value text-green feeMidtransItem0">
                                        + Rp. {{ number_format($biayaLayanan, 0, ',', '.') }}

                                    </p>
                                    <div class="clear"></div>
                                </div>

                                <div class="item">
                                    <p class="title">
                                        Total transfer
                                    </p>
                                    <p class="value">
                                        <strong>Rp. {{ $totalTransfer }}</strong>
                                    </p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-12">
                    <div class="course-card">
                        <h5 class="header-title mb-0">
                            <b>Informasi Pembelian</b>
                        </h5>
                        <form id="myForm" action="{{ route('transaction') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="fullname" class="form-label fw-bold">
                                    <p>Nama Lengkap <span style="color: red;">*</span></p>
                                </label>
                                <input type="text" name="fullname" id="fullname"
                                    class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                                <p class="text-sm text-secondary mt-2">Nama lengkap sesuai KTP</p>
                            </div>

                            <!-- Input untuk alamat email -->
                            <div class="row m-0 mt-4">
                                <div class="col-lg-6 p-0">
                                    <div class="form-group">
                                        <label for="email" class="form-label fw-bold">
                                            <p>Alamat Email <span style="color: red;">*</span></p>
                                        </label>
                                        <input type="email" name="email" id="email"
                                            class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                                        <p class="text-sm text-secondary mt-2">
                                            Email yang digunakan untuk login
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0 ps-lg-4">
                                    <div class="form-group">
                                        <label for="phone_number" class="form-label fw-bold">
                                            <p>Nomer Hp Aktif <span style="color: red;">*</span></p>
                                        </label>
                                        <input type="number" name="phone_number" id="number_phone"
                                            class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                                        <p class="text-sm text-secondary mt-2">
                                            Contoh: 081234567890
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <!-- Input untuk alamat -->
                            <div class="form-group">
                                <label for="address" class="form-label fw-bold">
                                    <p>Lokasi Pendirian <span style="color: red;">*</span></p>
                                </label>
                                <textarea name="address" id="address"
                                    class="form-control border px-2 py-1 rounded-3 shadow-none" required cols="30"
                                    rows="3"></textarea>
                                <p class="text-sm text-secondary mt-2">Lokasi pendirian waralaba</p>
                            </div>

                            <br>

                            <!-- Input untuk metode pembayaran -->
                            <div class="form-group">
                                <label for="payment_method" class="form-label fw-bold">
                                    <p>Pilih Metode Pembayaran <span style="color: red;">*</span></p>
                                </label>
                                <select name="payment_method" id="payment_method"
                                    class="form-select border px-2 py-1 rounded-3 shadow-none" required>
                                    <option value="" selected disabled>Pilih Metode</option>
                                    <option value="BCA">Bank BCA</option>
                                    <option value="BNI">Bank BNI</option>
                                    <option value="BRI">Bank BRI</option>
                                    <option value="Mandiri">Bank Mandiri</option>
                                </select>
                                <p class="text-sm text-secondary mt-2">Pilih metode pembayaran anda</p>
                            </div>
                            <br>
                            <!-- Input untuk bukti pembayaran -->
                            <div class="form-group">
                                <label for="payment_proof" class="form-label fw-bold">
                                    <p>Bukti Pembayaran <span style="color: red;">*</span></p>
                                </label>
                                <input type="file" class="form-control border px-2 py-1 rounded-3 shadow-none" class="form-control" id="payment_proof" name="payment_proof" accept="file/*" required>
                                <p class="text-sm text-secondary mt-2">Unggah bukti pembayaran Anda di sini</p>
                            </div>

                            <!-- Input tersembunyi untuk user_id, waralaba_id dan waralaba_name -->
                            <input type="hidden" name="waralaba_id" value="{{ $waralaba->id }}">
                            <input type="hidden" name="waralaba_name" value="{{ $waralaba->waralaba_name }}">
                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                            <br>

                            <!-- Submit button -->
                            <button type="submit" class="mt-4 mb-2 btn bgTheme w-100 text-white border-12 py-3"
                                id="submitButton">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="processingPopup" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Pesanan Diproses</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Pesanan Anda sedang diproses. Mohon tunggu sebentar...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
      etElement").addEventListener("submit", function (event) {
        event.preventDefault(); // Menghentikan pengiriman formulir langsung

        // Menampilkan popup pesanan sedang diproses
        $('#processingPopup').modal('show');

        // Lakukan pengiriman formulir menggunakan AJAX
        var formData = new FormData(this);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", this.action, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Jika pengiriman berhasil, redirect ke halaman lain
                window.location.href = "{{ route('sukses') }}";
            }
        };
        xhr.send(formData);

    </script>
</x-user-layout>

<div class="modal fade" id="invoiceModal" tabindex="-1" aria-labelledby="invoiceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="invoiceModalLabel">Invoice</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-lg-8 col-12">
                            <img src="{{ asset('assets/frontend/image/logo.svg') }}" class="mb-4" height="50">
                            <h3 class="mb-0">Tagihan Pembayaran</h3>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="row mb-4">
                        <div class="col-lg-6 col-12">
                            <p class="mb-0">
                                <strong>PT. Warabisnis Technology</strong>
                            </p>
                            <p class="mb-0">
                                Banyumas, Jawa Tengah, Indonesia
                            </p>
                            <p class="mb-0">
                                (081) 572663773
                            </p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12 col-12">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Qty</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td width="45%">{{ $waralaba->waralaba_name }}</td>
                                        <td>
                                            Rp. {{ number_format($waralaba->price, 0, ',', '.') }}
                                        </td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-between mt-3">
                                <span></span>
                                <span>Biaya Layanan :‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ Rp. 100.000</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span></span>
                                <span>Kode Unik : ‎ ‎ ‎ ‎‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎‎  ‎ ‎ ‎ ‎  ‎ ‎ ‎ ‎ ‎  {{ $uniqueCode }}</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span></span>
                                <span><b>Total Pembayaran</b> : Rp. {{ $totalTransfer }}</span>
                            </div>

                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-12 col-12">
                            <div class="payment-instructions">
                                <p class="mb-2">
                                    <strong>Petunjuk Pembayaran Waralaba di Warabiz</strong>
                                </p>

                                <ol>
                                    <li>
                                        <p>Pastikan Anda telah meninjau semua informasi waralaba yang tersedia di
                                            platform Warabiz.</p>
                                    </li>
                                    <li>
                                        <p>Pilih waralaba yang sesuai dengan kebutuhan dan budget Anda.
                                        </p>
                                    </li>
                                    <li>
                                        <p>Setelah memutuskan waralaba yang akan Anda ambil, Anda akan
                                            diberikan
                                            petunjuk pembayaran oleh pemilik waralaba atau melalui
                                            platform Warabiz.
                                        </p>
                                    </li>
                                    <li>
                                        <p>Lakukan pembayaran sesuai petunjuk yang diberikan. Pembayaran
                                            biasanya
                                            dilakukan melalui transfer bank atau metode pembayaran
                                            online lainnya
                                            yang disepakati.</p>
                                    </li>
                                    <li>
                                        <p>Setelah pembayaran diterima, pemilik waralaba akan memberikan
                                            informasi
                                            lebih lanjut mengenai proses selanjutnya, termasuk
                                            pengiriman dokumen
                                            resmi.</p>
                                    </li>
                                    <li>
                                        <p>Setelah proses pembayaran selesai, Anda dapat memulai usaha
                                            waralaba Anda
                                            sesuai dengan ketentuan yang telah disepakati.</p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
