<x-admin-layout title="Detail Transaksi - {{ $transaction->waralaba_name }}" active="detail-transaksi">

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
                margin-top: 35px;
                margin-bottom: -33px !important;
                height: 80vh !important;
            }

        }

        @media (max-width: 767px) {
            .col-md-3 {
                margin-bottom: 20px;
                /* Adjust this value as needed */
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
            margin-top: 5px;
            /* Jarak dari atas */
            margin-bottom: 5px;
            /* Jarak dari bawah */
        }

        h5 {
            font-size: 16px;
            font-weight: normal;
        }

        h6 {
            font-size: 18px;
            font-weight: normal;
        }
    </style>
    @endpush


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
                                    <h4 class="card-title">Detail Transaksi</h4>
                                    <div class="row align-items-center mb-3">
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <h6 class="mb-1"><b>Nama Pemesan</b></h6>
                                            <h3 class="card-text mb-2" id="totalpayment"
                                                style="color: #009688; cursor: pointer;"><b>{{ $transaction->fullname
                                                    }}</b></h3>
                                        </div>
                                        <div class="col-md-6">
                                            <h6><b>Nama Waralaba</b></h6>
                                            <h5>{{ $transaction->waralaba_name }}</h5>
                                        </div>
                                    </div>
                                    <div class="row align-items-center mb-3">
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <h6 class="mb-1"><b>Kontak</b></h6>
                                            <h5>{{ $transaction->phone_number }} | {{ $transaction->email }}</h5>
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="mb-1"><b>Lokasi Pendirian</b></h6>
                                            <h5>{{ $transaction->address }}</h5>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <br>
                            <div class="item-pricing item-mentor">
                                <h6><b>Status Transaksi</b>
                                    <p>Terakhir diupdate: {{ $transaction->updated_at->format('d/m/Y H:i') }} WIB</p>
                                    <div class="row justify-content-center mt-4">
                                        <?php
                                            $status = $transaction->status;

                                            $steps = [
                                                0 => ['icon' => 'check', 'text' => 'Verifikasi Pembayaran'],
                                                1 => ['icon' => 'check', 'text' => 'Pembangunan'],
                                                2 => ['icon' => 'check', 'text' => 'Pembukaan Waralaba'],
                                                3 => ['icon' => 'check', 'text' => 'Selesai'],
                                            ];

                                            // Mengatur ikon dan teks berdasarkan status
                                            foreach ($steps as $step => $info) {
                                                // Memeriksa apakah status saat ini lebih besar atau sama dengan langkah saat ini
                                                if ($status > $step) {
                                                    // Jika status lebih besar atau sama dengan langkah saat ini,
                                                    // gunakan ikon centang dan kelas hijau
                                                    $iconClass = 'check-icon';
                                                    $icon = 'check-circle';
                                                    $statusText = 'Selesai';
                                                } elseif ($status === $step) {
                                                    // Jika status sama dengan langkah saat ini,
                                                    // gunakan ikon spinner dan kelas biru untuk menandakan sedang dalam proses
                                                    $iconClass = 'in-progress-icon';
                                                    $icon = 'spinner';
                                                    $statusText = 'Sedang Dalam Proses';
                                                } else {
                                                    // Jika status lebih kecil dari langkah saat ini,
                                                    // gunakan ikon silang dan kelas merah
                                                    $iconClass = 'non-check-icon';
                                                    $icon = 'times-circle';
                                                    $statusText = 'Belum Selesai';
                                                }
                                                if ($status == 3 && $step == 3) {
                                                    $iconClass = 'check-icon';
                                                    $icon = 'check-circle';
                                                    $statusText = 'Pesanan Selesai';
                                                }
                                                if ($status == null) {
                                                    echo '
                                                        <div class="col-md-3">
                                                            <div class=" text-center">
                                                                <div class="card-body">
                                                                    <i class="fas fa-spinner fa-5x in-progress-icon"></i>
                                                                    <h5><b>Pembayaran Sedang Diverifikasi</b></h5>
                                                                    <p>Max. 2 x 24 Jam di hari kerja</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ';
                                                    break; // Hentikan iterasi setelah menambahkan card baru
                                                }

                                                if ($status == 4) {
                                                    echo '
                                                        <div class="col-md-3">
                                                            <div class=" text-center">
                                                                <div class="card-body">
                                                                    <i class="fas fa-times-circle fa-5x non-check-icon"></i>
                                                                    <h5>Pesanan Anda Ditolak</h5>
                                                                    <p>Karena pembayaran tidak valid</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ';
                                                    break; // Hentikan iterasi setelah menambahkan card baru
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
            </div>
            </form>
        </div>
        </div>
    </section>
</x-admin-layout>
