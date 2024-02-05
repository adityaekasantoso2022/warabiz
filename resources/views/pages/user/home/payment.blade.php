<x-user-layout title="payment" active="payment">
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
            <div class="mt-5 row pricing testimonials mentors checkout gy-4" id="reviews">
                <div class="col-lg-4 col-md-5 col-12 p-md-0 offset-lg-1">
                    <div class="d-block" id="courseCardCheckout"
                        style="position: relative; transition: all 600ms ease-in-out 0s; top: 0px;">
                        <div class="course-card">
                            <div class="embed-responsive embed-responsive-16by9 video-iframe ">
                                <div class="plyr__video-embed" id="player">
                                </div>
                            </div>
                            <div class="course-detail">
                                <a>
                                <h2 class="course-name line-clamp-2">
                                    Nama Waralaba
                                </h2>
                                </a>
                                <div class="d-flex mt-2 align-items-center gap-1">
                                    Deskripsi Waralaba
                                </div>
                            </div>
                            <div class="course-footer mt-auto">
                                <div class="star-rating">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" alt="ic_star">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" alt="ic_star">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" alt="ic_star">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" alt="ic_star">
                                    <img src="https://buildwithangga.com/themes/front/images/ic_star.svg" alt="ic_star">
                                    <span>
                                        (52)
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 col-12 ">

                    <form id="form-manual" method="post" action="#" enctype="multipart/form-data">
                        @csrf
                        <div class="payment-details ">
                            <div class="item-pricing item-mentor">

                                <div class="p-3 d-flex align-items-center border-theme bg-theme-light rounded-3 mb-4">
                                    <h5 class="themeColor m-0 me-3"><i class="fas fa-info-circle"></i></h5>
                                    <p class="fw-bold">
                                        Lakukan pembayaran <b> Rp.100.000.589</b> sebelum
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
                                <div>
                                    <p class="fw-bold text-secondary mb-2">
                                        Pilih metode pembayaran
                                    </p>

                                    <div class="form-group">
                                        <select class="form-control border px-4 py-3 rounded-12 fw-bold text-sm"
                                            id="paymentMethod" name="payment_method" onchange="showAccountInfo()">
                                            <option selected disabled>Pilih metode pembayaran</option>
                                            <option value="mandiri">Bank Mandiri</option>
                                            <option value="bca">Bank BCA</option>
                                            <option value="bni">Bank BNI</option>
                                            <option value="permata">Bank Permata</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="p-3 d-flex align-items-center  bg-theme-hijau rounded-3 mb-4">
                                        <div id="accountInfo" style="display:none;">
                                            <p class="fw-bold">
                                                Nomer Rekening: <b><span id="accountNumber"></span></b>
                                            </p>
                                            <p class="">
                                                Atas Nama: <span id="accountHolder"></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div id="accountInfo" style="display:none;">

                                        <p class="fw-bold text-secondary">
                                            Nomer Rekening: <span id="accountNumber"></span>
                                        </p>
                                        <p class="fw-bold text-secondary">
                                            Atas Nama: <span id="accountHolder"></span>
                                        </p>
                                    </div>
                                </div>

                                <script>
                                    function showAccountInfo() {
                                        var selectedBank = document.getElementById("paymentMethod").value;
                                        var accountInfoDiv = document.getElementById("accountInfo");

                                        // Reset content
                                        document.getElementById("accountNumber").innerText = "";
                                        document.getElementById("accountHolder").innerText = "";

                                        // Show/hide content based on the selected bank
                                        if (selectedBank === "mandiri") {
                                            accountInfoDiv.style.display = "block";
                                            document.getElementById("accountNumber").innerText = "98737-82837-2882";
                                            document.getElementById("accountHolder").innerText = "PT. Warabisnis Indonesia";
                                        } else if (selectedBank === "bca") {
                                            accountInfoDiv.style.display = "block";
                                            document.getElementById("accountNumber").innerText = "8377-6277-82774";
                                            document.getElementById("accountHolder").innerText = "PT. Warabisnis Indonesia";
                                        } else if (selectedBank === "bni") {
                                            accountInfoDiv.style.display = "block";
                                            document.getElementById("accountNumber").innerText = "5412-1113-3231";
                                            document.getElementById("accountHolder").innerText = "PT. Warabisnis Indonesia";
                                        } else if (selectedBank === "permata") {
                                            accountInfoDiv.style.display = "block";
                                            document.getElementById("accountNumber").innerText = "8277-03985-34245";
                                            document.getElementById("accountHolder").innerText = "PT. Warabisnis Indonesia";
                                        } else {
                                            accountInfoDiv.style.display = "none";
                                        }
                                    }
                                </script>



                                <p class="fw-bold text-secondary mb-3">
                                    Upload bukti pembayaran anda
                                </p>
                                <input type="file" name="image" id="image" accept="image/png, image/gif, image/jpeg"
                                    class="form-control border px-4 py-3 rounded-12 fw-bold text-sm" required="">
                                @error('image')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                                <h5 class="header-title mt-4">
                                    Jumlah Yang Harus Dibayarkan
                                </h5>
                                <div class="tab-content" id="pills-tabContent">
                                    <input id="transaction_home_id" hidden="" name="transaction_home_id" value="null">
                                    <div class="item">
                                        <p class="title">
                                            Total transfer
                                        </p>

                                        <p class="value">
                                            <strong id="price">
                                                Rp.100.000.589
                                            </strong>
                                        </p>
                                        <div class="clear"></div>
                                    </div>

                                    <button class="mt-2 mb-2 btn bgTheme w-100 text-white border-12 py-3" type="submit">
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
    </section>

</x-user-layout>