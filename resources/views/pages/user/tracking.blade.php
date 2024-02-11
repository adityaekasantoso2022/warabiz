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

        .pricing .syaratketentuan {
            background: #fff;
            border-radius: 16px;
            padding: 30px;
        }

        @media only screen and (min-width: 768px) and (max-width: 1250px) {
            .course-card .course-footer .star-rating img {
                width: 20px !important;
            }
        }

        .card {
            border-radius: 15px; /* Tambahkan border-radius */
            max-width: 550px; /* Atur lebar maksimal card */
            margin: 0 auto; /* Atur card menjadi berada di tengah */
            padding: 30px;
        }

        .form-control {
            max-width: 100%; /* Atur lebar maksimal form */
            margin: 0 auto; /* Atur form menjadi berada di tengah */
        }

        .btn {
            margin: 0 auto; /* Atur tombol menjadi berada di tengah */
            width: 100%; /* Atur tombol agar memenuhi lebar kontainer */
        }
    </style>
    @endpush
    <section class="py-5" style="margin-top: 10px">
        <div class="container">
            <div class="mt-5 row pricing testimonials mentors checkout gy-4">
                <div class="container-fluid">
                    <div class="card">
                        <h4 class="text-center mb-4">Tracking Pesanan</h4>
                        <form id="paymentForm" action="/pesanan/" method="GET">
                            <div class="form-group">
                                <label for="orderNumber" class="form-label fw-bold">
                                    Nomer Pesanan <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="orderNumber" name="id" class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                                <p class="text-sm text-secondary mt-2">
                                    Nomer pesanan dikirimkan melalui email apabila konfirmasi pembayaran berhasil
                                </p>
                            </div>
                            <br>
                            <button type="submit" class="btn mt-4 mb-2 btn bgTheme text-white border-12 py-3">Lihat Pesanan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById("paymentForm").addEventListener("submit", function (event) {
            event.preventDefault(); // Menghentikan pengiriman form

            var orderNumber = document.getElementById("orderNumber").value; // Mengambil nilai nomor pesanan dari input

            // Mengarahkan pengguna ke URL yang sesuai dengan nomor pesanan yang dimasukkan
            window.location.href = "/pesanan/" + orderNumber;
        });
    </script>
</x-user-layout>
