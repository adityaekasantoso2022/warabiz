<x-user-layout title="Payment" active="payment">
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
            /* identical to box height, or 24px */
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


        .pricing .item-pricing {
            background: #fff;
            border-radius: 16px;
            padding: 30px;
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
            font-size: 16px;
            font-weight: 700;
            margin: 0 0 16px;
        }

        .checkout .payment-details .item {
            margin-bottom: 20px;
        }

        .checkout .payment-details .title {
            color: #34364a;
            float: left;
            font-size: 16px;
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

        .embed-responsive:before {
            content: "";
            display: block;
        }

        .embed-responsive iframe {
            border-radius: 16px;
            width: 100%;
            height: 25vh;
        }




        .text-green {
            color: #22c58b !important;
        }

        .border-theme {
            border: 2px solid var(--limeColor);
        }

        .bg-theme-light {
            background-color: #FFF2F6;
        }

        .bg-theme-hijau {
            background-color: #FAFFFC;
        }
    </style>
    @endpush
    <section class="py-5" style="margin-top: 10px">
        <div class="container">
            <div class="row">
                <div class="text-center col-lg-12">
                    <h1 class="mb-3 header-primary">
                    </h1>

                </div>

            </div>
            <div class="mt-5 row pricing testimonials mentors checkout gy-4" id="pembayaran">
                <div class="container-fluid ">
                    <form id="form-manual" method="post" action="#" enctype="multipart/form-data">
                        @csrf
                        <div class="payment-details ">
                            <div class="item-pricing item-mentor">

                                <div class="p-3 d-flex align-items-center border-theme bg-theme-light rounded-3 mb-4">
                                    <h5 class="themeColor m-0 me-3"><i class="fas fa-info-circle"></i></h5>
                                    <p class="fw-bold">
                                        Lakukan pembayaran sebelum
                                        <strong id="countdown"></strong>
                                    </p>
                                </div>
                                <script>
                                    // Atur waktu akhir hitung mundur (60 menit dari sekarang)
                                    var endTime = new Date();
                                    endTime.setMinutes(endTime.getMinutes() + 60);

                                    // Fungsi untuk memperbarui hitung mundur
                                    function updateCountdown() {
                                        var now = new Date();
                                        var timeDifference = endTime - now;

                                        var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                                        var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                                        // Tampilkan hitung mundur
                                        document.getElementById("countdown").innerHTML = minutes + " Menit " + seconds + " Detik";

                                        // Hentikan hitung mundur jika waktu sudah habis
                                        if (timeDifference <= 0) {
                                            clearInterval(countdownInterval);
                                            document.getElementById("countdown").innerHTML = "Waktu Habis";
                                        }
                                    }
                                    // Memperbarui hitung mundur setiap 1 detik
                                    var countdownInterval = setInterval(updateCountdown, 1000);

                                    // Memanggil fungsi untuk memastikan tampilan awal benar
                                    updateCountdown();
                                </script>
                                <div class="card mb-4 text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Informasi Pembayaran</h5>
                                        <div class="row align-items-center mb-3">
                                            <!-- Sebelah kiri (total pembayaran) -->
                                            <div class="col-md-6">
                                                <p class="mb-1">Total Pembayaran</p>
                                                <h3 class="card-text mb-2" id="totalpayment"
                                                    style="color: #009688; cursor: pointer;"
                                                    onclick="copyText('totalpayment')"><b>Rp. {{ $waralaba->price }}</b>
                                                </h3>
                                            </div>
                                            <!-- Sebelah kanan (nomor rekening) -->
                                            <div class="col-md-6">
                                                <p class="mb-1">Rekening Tujuan</p>
                                                <h3 class="card-text mb-2" id="accountNumber"
                                                    style="color: #009688; cursor: pointer;"
                                                    onclick="copyText('accountNumber')"><b>5412110026382751</b>
                                                </h3>
                                                <p class="card-text mb-0"><b>an. PT. Warabiz Indonesia</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="payment-instructions">
                                    <h5 class="header-title mb-3">Petunjuk Pembayaran Waralaba di Warabiz</h5>
                                    <ol>
                                        <li>
                                            <p>Pastikan Anda telah meninjau semua informasi waralaba yang tersedia di
                                                platform Warabiz.</p>
                                        </li>
                                        <li>
                                            <p>Pilih waralaba yang sesuai dengan kebutuhan dan budget Anda.</p>
                                        </li>
                                        <li>
                                            <p>Hubungi pemilik waralaba yang bersangkutan melalui platform Warabiz untuk
                                                mendapatkan informasi lebih lanjut.</p>
                                        </li>
                                        <li>
                                            <p>Setelah memutuskan waralaba yang akan Anda ambil, Anda akan diberikan
                                                petunjuk pembayaran oleh pemilik waralaba atau melalui platform Warabiz.
                                            </p>
                                        </li>
                                        <li>
                                            <p>Lakukan pembayaran sesuai petunjuk yang diberikan. Pembayaran biasanya
                                                dilakukan melalui transfer bank atau metode pembayaran online lainnya
                                                yang disepakati.</p>
                                        </li>
                                        <li>
                                            <p>Setelah pembayaran diterima, pemilik waralaba akan memberikan informasi
                                                lebih lanjut mengenai proses selanjutnya, termasuk pengiriman dokumen
                                                resmi dan pelatihan waralaba.</p>
                                        </li>
                                        <li>
                                            <p>Setelah proses pembayaran selesai, Anda dapat memulai usaha waralaba Anda
                                                sesuai dengan ketentuan yang telah disepakati.</p>
                                        </li>
                                    </ol>
                                </div>


                                <script>
                                    function copyText(elementId) {
                                        var text = document.getElementById(elementId).innerText;
                                        var input = document.createElement('textarea');
                                        input.innerHTML = text;
                                        document.body.appendChild(input);
                                        input.select();
                                        document.execCommand('copy');
                                        document.body.removeChild(input);
                                        alert('Berhasil Disalin: ' + text);
                                    }
                                </script>

                                <h5 class="header-title mt-4">
                                    Upload Bukti Pembayaran
                                </h5>
                                <div class="tab-content" id="pills-tabContent">
                                    <input id="transaction_home_id" hidden="" name="transaction_home_id" value="null">
                                    <div class="item">
                                        <input type="file" name="image" id="image"
                                            accept="image/png, image/gif, image/jpeg"
                                            class="form-control border px-4 py-3 rounded-12 fw-bold text-sm"
                                            required="">
                                        @error('image')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                        <br>
                                        <button class="mt-2 mb-2 btn bgTheme w-100 text-white border-12 py-3"
                                            type="submit">
                                            Kirim
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
</x-user-layout>

