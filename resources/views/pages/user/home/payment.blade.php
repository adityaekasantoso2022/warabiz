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
    </style>
    @endpush
    <section class="py-5" style="margin-top: 10px">
        <div class="container">
            <div class="mt-5 row pricing testimonials mentors checkout gy-4" id="reviews">
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="payment-details">
                        <div class="item-pricing item-mentor d-flex flex-column gap-3">
                            <h5 class="header-title mb-0">
                                Detail Pembelian
                            </h5>
                            <div class="d-flex justify-content-between gap-2 align-items-center benefits-for-you">
                                <div class="d-flex gap-3 align-items-center">
                                    <img class="small-circle-img" src="{{ $waralaba->image_url }}" alt="Waralaba Image">
                                    <div class="d-flex flex-column">
                                        <h5 class="header-title mb-1">
                                            {{ $waralaba->waralaba_name }}
                                        </h5>
                                        <p>{{ $waralaba->concept }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="item">
                                    <p class="title">
                                        Harga waralaba
                                    </p>
                                    <p class="value">
                                        Rp. {{ $waralaba->price }}
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <div class="item">
                                    <p class="title">
                                        Kode unik
                                    </p>
                                    <p class="value text-green">
                                        @php
                                        $unique_code = rand(100, 1000);
                                        @endphp
                                        - {{ $unique_code }}
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <div class="item">
                                    <p class="title">
                                        Biaya layanan
                                    </p>
                                    <p class="value text-green feeMidtransItem0">
                                        + Rp 10.000
                                    </p>
                                    <div class="clear"></div>
                                </div>
                                <div class="item">
                                    <p class="title">
                                        Total transfer
                                    </p>
                                    <input id="transaction_total" hidden name="transaction_total" value="total">
                                    <p class="value">
                                        <strong id="midtransPrice">
                                            Rp. {{ $waralaba-> price }}
                                        </strong>
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
                        <form id="myForm" action="{{ route('payment', ['id' => $waralaba->id]) }}" method="POST">
                            @csrf
                            <!-- Form fields -->
                            <div class="form-group">
                                <label for="fullname" class="form-label fw-bold">
                                    <p>Nama Lengkap</p>
                                </label>
                                <input type="text" name="fullname" id="fullname"
                                    class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                                <p class="text-sm text-secondary mt-2">
                                    Nama lengkap sesuai KTP
                                </p>
                            </div>

                            <div class="row m-0 mt-4">
                                <div class="col-lg-6 p-0">
                                    <div class="form-group">
                                        <label for="email" class="form-label fw-bold">
                                            <p>Alamat Email</p>
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
                                            <p>Nomer Hp Aktif</p>
                                        </label>
                                        <input type="number" name="phone_number" id="number_phone"
                                            class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                                        <p class="text-sm text-secondary mt-2">
                                            Contoh: 081234567890
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <label for="address" class="form-label fw-bold">
                                    <p>Alamat Rumah</p>
                                </label>
                                <textarea name="address" id="address"
                                    class="form-control border px-2 py-1 rounded-3 shadow-none" required cols="30"
                                    rows="3"></textarea>
                                <p class="text-sm text-secondary mt-2">
                                    Alamat Rumah
                                </p>
                            </div>
                            <br>
                            <h5 class="header-title mb-0">
                                <b>Informasi Pembayaran</b>
                            </h5>
                            <div class="form-group mt-4">
                                <label for="payment_method" class="form-label fw-bold">
                                    <p>Pilih Bank Pembayaran</p>
                                </label>
                                <select name="payment_method" id="payment_method"
                                    class="form-select border px-2 py-1 rounded-3 shadow-none" required>
                                    <option value="" selected disabled>Pilih Bank</option>
                                    <option value="BCA">BCA (1234567890)</option>
                                    <option value="BNI">BNI (0987654321)</option>
                                    <option value="BRI">BRI (9876543210)</option>
                                </select>
                                <p class="text-sm text-secondary mt-2">
                                    Silakan pilih bank untuk pembayaran.
                                </p>
                            </div>


                            <!-- Input tersembunyi untuk waralaba_id -->
                            <input type="hidden" name="waralaba_id" value="{{ $waralaba->id }}">
                            <input type="hidden" name="waralaba_name" value="{{ $waralaba->waralaba_name }}">


                            <!-- Submit button -->
                            <button type="submit" class="mt-4 mb-2 btn bgTheme w-100 text-white border-12 py-3"
                                id="submitButton">Beli Sekarang</button>
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
       document.getElementById("myForm").addEventListener("submit", function (event) {
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
            window.location.href = "{{ route('pembayaran', ['id' => $waralaba->id]) }}";
        }
    };
    xhr.send(formData);
});

    </script>
</x-user-layout>