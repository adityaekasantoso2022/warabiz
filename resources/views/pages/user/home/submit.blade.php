<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Informasi Pemesanan untuk Pembayaran">
    <meta name="keywords" content="pembayaran, informasi pemesanan, waralaba">
    <title>Pembayaran - Informasi Pemesanan</title>
    <!-- Gaya tambahan -->
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

        .card-title {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .check-icon {
            color: #009688;
            font-size: 30px;
            margin-bottom: 15px;
        }

        .non-check-icon {
            color: #FF5151;
            font-size: 30px;
            margin-bottom: 15px;
        }

        .rounded-card {
            border-radius: 8px;
        }
    </style>
    @endpush
</head>

<body>
    <x-user-layout title="Payment" active="payment">
        <section class="py-5" style="margin-top: 10px">
            <div class="container">
                <div class="row">
                    <div class="text-center col-lg-12">
                        <h1 class="mb-3 header-primary"></h1>
                    </div>
                </div>
                <div class="mt-5 row pricing testimonials mentors checkout gy-4" id="pembayaran">
                    <div class="container-fluid ">
                        <form id="form-manual" method="post" action="#" enctype="multipart/form-data">
                            @csrf
                            <div class="payment-details ">
                                <div class="item-pricing item-mentor">
                                    <div class="card-body">
                                        <img src="{{ asset('assets/frontend/image/logo.svg') }}">
                                        <h3 class="card-title">Informasi Pemesanan</h3>
                                        <div class="row align-items-center mb-3">
                                            <div class="col-md-6">
                                                <p class="mb-1"><b>Nama Pemesan</b></p>
                                                <h3 class="card-text mb-2" id="totalpayment"
                                                    style="color: #009688; cursor: pointer;"><b>{{
                                                        $transaction->fullname }}</b></h3>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mb-1"><b>Alamat Rumah</b></p>
                                                <p>{{ $transaction->address }}</p>
                                                <p>{{ $transaction->phone_number }}</p>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-3">
                                            <div class="col-md-6">
                                                <p class="mb-1"><b>Tanggal Pemesanan</b></p>
                                                <p>{{ $transaction->created_at }}</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mb-1"><b>Metode Pembayaran</b></p>
                                                <p>Bank {{ $transaction->payment_method }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="item-pricing item-mentor">
                                    <h5>Status Pesanan</h5>
                                    <div class="row justify-content-center mt-4">
                                        <?php
                                        $status = $transaction->status;

                                        $steps = [
                                            1 => ['icon' => 'check', 'text' => 'Pembayaran'],
                                            2 => ['icon' => 'check', 'text' => 'Verifikasi'],
                                            3 => ['icon' => 'check', 'text' => 'Pembangunan'],
                                            4 => ['icon' => 'check', 'text' => 'Selesai']
                                        ];

                                        // Mengatur ikon dan teks berdasarkan status
                                        foreach ($steps as $step => $info) {
                                            // Memeriksa apakah status saat ini lebih besar atau sama dengan langkah saat ini
                                            // Jika ya, maka langkah tersebut sudah selesai
                                            if ($status >= $step) {
                                                // Jika status lebih besar atau sama dengan langkah saat ini,
                                                // gunakan ikon centang dan kelas hijau
                                                $iconClass = 'check-icon';
                                                $icon = 'check-circle';
                                                $statusText = 'Langkah selesai';
                                            } else {
                                                // Jika status lebih kecil dari langkah saat ini,
                                                // gunakan ikon silang dan kelas merah
                                                $iconClass = 'non-check-icon';
                                                $icon = 'times-circle';
                                                $statusText = 'Belum selesai';
                                            }

                                            // Mencetak kartu dengan ikon dan teks yang sesuai
                                            echo '
                                                <div class="col-md-3">
                                                    <div class="card text-center rounded-card">
                                                        <div class="card-body">
                                                            <i class="fas fa-' . $icon . ' fa-5x ' . $iconClass . '"></i>
                                                            <h5>' . $info['text'] . '</h5>
                                                            <p>' . $statusText . '</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            ';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </section>
    </x-user-layout>
</body>

</html>
