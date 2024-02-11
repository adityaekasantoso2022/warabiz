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
        @media (max-width: 767px) {
            .col-md-3 {
                margin-bottom: 20px; /* Adjust this value as needed */
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
        .in-progress-icon {
            color: #FFBD13;
            font-size: 30px;
            margin-bottom: 15px;
        }


        .rounded-card {
            border-radius: 8px;
        }
        .item-pricing.item-mentor p {
    margin-top: 5px; /* Jarak dari atas */
    margin-bottom: 5px; /* Jarak dari bawah */
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
                                                <h6 class="mb-1"><b>Nama Pemesan</b></h6>
                                                <h3 class="card-text mb-2" id="totalpayment"
                                                    style="color: #009688; cursor: pointer;"><b>{{
                                                        $transaction->fullname }}</b></h3>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="mb-1"><b>Nama Waralaba</b></h6>
                                                <p>{{ $transaction->waralaba_name }}</p>

                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-3">
                                            <div class="col-md-6">
                                                <h6 class="mb-1"><b>Kontak</b></h6>
                                                <p>{{ $transaction->phone_number }} | {{ $transaction->email }} </p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="mb-1"><b>Lokasi Pendirian</b></h6>
                                                <p>{{ $transaction->address }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="item-pricing item-mentor">
                                    <h5>Status Pemesanan</h5>
                                    <p>Terakhir diupdate: {{ $transaction->updated_at->format('d/m/Y H:i') }} WIB</p>
                                    <div class="row justify-content-center mt-4">
                                        <?php
                                        $status = $transaction->status;

                                        $steps = [
                                            1 => ['icon' => 'check', 'text' => 'Pembelian'],
                                            2 => ['icon' => 'check', 'text' => 'Pembayaran'],
                                            3 => ['icon' => 'check', 'text' => 'Pembangunan'],
                                            4 => ['icon' => 'check', 'text' => 'Pembukaan Waralaba'],
                                        ];
                                        
                                        // Mengatur ikon dan teks berdasarkan status
                                        foreach ($steps as $step => $info) {
                                            // Memeriksa apakah status saat ini lebih besar atau sama dengan langkah saat ini
                                            if ($status >= $step) {
                                                // Jika status lebih besar atau sama dengan langkah saat ini,
                                                // gunakan ikon centang dan kelas hijau
                                                $iconClass = 'check-icon';
                                                $icon = 'check-circle';
                                                $statusText = 'Langkah Selesai';
                                            } elseif ($status == $step - 1) {
                                                // Jika status sama dengan langkah saat ini dikurangi 1,
                                                // berarti dalam proses
                                                $iconClass = 'in-progress-icon';
                                                $icon = 'spinner';
                                                $statusText = 'Dalam Proses';
                                            } else {
                                                // Jika status lebih kecil dari langkah saat ini,
                                                // gunakan ikon silang dan kelas merah
                                                $iconClass = 'non-check-icon';
                                                $icon = 'times-circle';
                                                $statusText = 'Belum Selesai';
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
