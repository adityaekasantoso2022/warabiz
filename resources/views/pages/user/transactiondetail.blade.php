<x-user-layout title="Detail Transaksi - TRX-{{ strtoupper(substr($transaction->uuid, 2, 6)) }}" active="detail-transaksi">
    @push('addonStyle')
    <style>
        body {
            background: #dae3ec !important;
        }

        .navbar .navbar-nav a:hover.btn-signup,
        .navbar .navbar-nav a:hover {
            color: #131313 !important;
        }

        .navbar .navbar-nav .active,
        .profil-name {
            color: #131313;
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
            margin: 0 !important;
        }

        .hero .hero-text {
            color: #34364a;
            font-size: 68px;
            font-weight: 700;
            line-height: 78px;
        }

        .hero .btn-cta {
            background: #4f94d7;
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

        h5 {
            font-size: 16px;
            font-weight: normal;
        }

        h6 {
            font-size: 18px;
            font-weight: normal;
        }

        .in-progress-icon {
            margin-bottom: 15px;
        }

        .card {
            margin-bottom: 24px;
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #eff0f2;
            border-radius: 10px;
        }

        .activity-checkout {
            list-style: none
        }

        .activity-checkout .checkout-icon {
            position: absolute;
            top: -4px;
            left: -24px
        }

        .activity-checkout .checkout-item {
            position: relative;
            padding-bottom: 24px;
            padding-left: 35px;
        }


        .activity-checkout .checkout-item.crypto-activity {
            margin-left: 50px
        }

        .activity-checkout .checkout-item .crypto-date {
            position: absolute;
            top: 3px;
            left: -65px
        }

        .avatar-xs {
            height: 1rem;
            width: 1rem
        }

        .avatar-sm {
            height: 2rem;
            width: 2rem
        }

        .avatar {
            height: 3rem;
            width: 3rem
        }

        .avatar-md {
            height: 4rem;
            width: 4rem
        }

        .avatar-lg {
            height: 5rem;
            width: 5rem
        }

        .avatar-xl {
            height: 6rem;
            width: 6rem
        }

        .avatar-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            color: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-weight: 500;
            height: 100%;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%;
        }

        .avatar-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 8px
        }

        .avatar-group .avatar-group-item {
            margin-left: -8px;
            border: 2px solid #fff;
            border-radius: 50%;
            -webkit-transition: all .2s;
            transition: all .2s
        }

        .avatar-group .avatar-group-item:hover {
            position: relative;
            -webkit-transform: translateY(-2px);
            transform: translateY(-2px)
        }

        .card-radio-input {
            display: none
        }

        .card-radio-input:checked+.card-radio {
            border-color: #3b76e1 !important
        }


        .font-size-16 {
            font-size: 17px !important;
            font-weight: bold
        }

       
        a {
            text-decoration: none !important;
        }


        .form-control {
            display: block;
            width: 100%;
            padding: 0.47rem 0.75rem;
            font-size: .875rem;
            font-weight: 400;
            line-height: 1.5;
            color: #545965;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #e2e5e8;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 5px;
            -webkit-transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        }

        
        .rating-stars {
            white-space: nowrap;
        }
    </style>
    @endpush
    <section class="py-5" style="margin-top: 90px">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="card">
                            <div class="card-body">
                                <ol class="activity-checkout mb-0 px-4 mt-3">
                                    <li class="checkout-item">
                                        <div class="avatar checkout-icon p-1">
                                        <div class="avatar-title rounded-circle" style="background-color: #0E97AB;">
                                                <i class="bx bxs-receipt text-white font-size-20"></i>
                                            </div>
                                        </div>
                                        <div class="feed-item-list">
                                            <div>
                                                <h5 class="font-size-16 mb-1">Informasi Pemesanan</h5>
                                                <p class="text-muted text-truncate mb-4">Informasi pemesan waralaba
                                                </p>
                                                <div class="mb-3">
                                                    <form>
                                                        <div>
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="billing-name">Nama Lengkap</label>
                                                                        <p class="text-muted text-truncate mb-4">{{
                                                                            $transaction->fullname }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="billing-email-address">Alamat
                                                                            Email</label>
                                                                        <p class="text-muted text-truncate mb-4">{{
                                                                            $transaction->email }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label"
                                                                            for="billing-phone">Kontak</label>
                                                                        <p class="text-muted text-truncate mb-4">{{
                                                                            $transaction->phone_number }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="checkout-item">
                                        <div class="avatar checkout-icon p-1">
                                            <div class="avatar-title rounded-circle" style="background-color: #0E97AB;">
                                                <i class="fas fa-store text-white font-size-20"></i>
                                            </div>
                                        </div>
                                        <div class="feed-item-list">
                                            <div>
                                                <h5 class="font-size-16 mb-1">Informasi Waralaba</h5>
                                                <p class="text-muted text-truncate mb-4">Informasi pembelian waralaba</p>
                                                <div class="mb-3">
                                                    <label class="form-label" for="billing-address">Lokasi Pendirian</label>
                                                    <textarea class="form-control" id="billing-address" rows="3"
                                                        readonly
                                                        style="background-color: #ffffff;">{{ $transaction->address }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <ol class="activity-checkout mb-0 px-4 mt-3">
                                    <li class="checkout-item">
                                        <div class="avatar checkout-icon p-1">
                                            <div class="avatar-title rounded-circle" style="background-color: #0E97AB;">
                                            <i class="fas fa-clock text-white font-size-20"></i>                                            </div>
                                        </div>
                                        <div class="feed-item-list">
                                            <div>
                                                <h5 class="font-size-16 mb-1">Status Pesanan</h5>
                                                <p class="text-muted text-truncate mb-4">Lihat progres pesanan anda
                                                </p>
                                                <div class="row justify-content-center mt-4">
                                                <?php
                                                    $status = $transaction->status;
                                                
                                                    // Tambahkan status tambahan di sini
                                                    if ($status == 20202 || $status == 20203 || $status == 20204 || $status == 20205) {
                                                        echo '
                                                            <div class="col-md-5">
                                                                <div class="card text-center rounded-card">
                                                                    <div class="card-body">
                                                                        <i class="fas fa-check-circle fa-5x check-icon"></i>
                                                                        <h5>Pembayaran</h5>
                                                                        <p>Lunas</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ';
                                                    }
                                                
                                                    $steps = [
                                                        20203 => ['icon' => 'check', 'text' => 'Pembangunan'],
                                                        20204 => ['icon' => 'check', 'text' => 'Pembukaan'],
                                                        20205 => ['icon' => 'check', 'text' => 'Selesai'],
                                                    ];
                                                
                                                    foreach ($steps as $step => $info) {
                                                        if ($status > $step) {
                                                            $iconClass = 'check-icon';
                                                            $icon = 'check-circle';
                                                            $statusText = 'Selesai';
                                                        } elseif ($status === $step) {
                                                            $iconClass = 'in-progress-icon';
                                                            $icon = 'spinner';
                                                            $statusText = 'Dalam Proses';
                                                        } else {
                                                            $iconClass = 'non-check-icon';
                                                            $icon = 'times-circle';
                                                            $statusText = 'Belum Selesai';
                                                        }
                                                        if ($status == 20205 && $step == 20205) {
                                                            $iconClass = 'check-icon';
                                                            $icon = 'check-circle';
                                                            $statusText = 'Pesanan Selesai';
                                                        }
                                                        if ($status == null) {
                                                            echo '
                                                                <div class="col-md-6">
                                                                    <div class="text-center">
                                                                        <div class="card-body">
                                                                            <i class="fas fa-spinner fa-5x in-progress-icon"></i>
                                                                            <h5><b>Pembayaran Sedang Diverifikasi</b></h5>
                                                                            <p>Max. 2 x 24 Jam di hari kerja</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            ';
                                                            break; 
                                                        }
                                                
                                                        if ($status == 20206) {
                                                            echo '
                                                                <div class="col-md-5">
                                                                    <div class="card text-center rounded-card">
                                                                        <div class="card-body">
                                                                            <i class="fas fa-times-circle fa-5x non-check-icon"></i>
                                                                            <h5><b>Pesanan Anda Ditolak</b></h5>
                                                                            <p>Karena pembayaran tidak valid</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            ';
                                                            break;
                                                        }
                                                
                                                        echo '
                                                            <div class="col-md-5">
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
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="card checkout-order-summary">
                            <div class="card-body">
                                <div class="p-3 bg-light mb-4">
                                    <h5 class="font-size-16 mb-0">ID Transaksi <span class="float-end ms-2">
                                    TRX-{{ strtoupper(substr($transaction->uuid, 2, 6)) }}</span>
                                    </h5>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-centered mb-1">
                                        <tbody>
                                            <tr>
                                                <th scope="row"><img src="{{$transaction->waralaba->image_url_1 }}" alt="product-img"
                                                        title="product-img" class="avatar-lg rounded">
                                                </th>
                                                <td>
                                                    <h5 class="font-size-16 text-truncate"><a href="#" class="text-dark">{{$transaction->waralaba_name
                                                            }}</a></h5>
                                                    <p class="text-muted mb-0 rating-stars">
                                                        @for ($i = 0; $i < $transaction->waralaba->rating; $i++)
                                                            <i class="bx bxs-star text-warning"></i>
                                                            @endfor
                                                    </p>
                                                    <p class="text-muted mb-0 mt-1">{{$transaction->waralaba->concept }}
                                                    </p>
                                                </td>
                                                <td>Rp. {{ number_format($transaction->waralaba->price, 0, ',', '.') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h5 class="font-size-14 m-0">Sub Total :</h5>
                                                </td>
                                                <td>
                                                    Rp. {{ number_format($transaction->waralaba->price, 0, ',', '.') }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h5 class="font-size-14 m-0">Metode Pembayaran :</h5>
                                                </td>
                                                <td>
                                                    Bank {{$transaction->payment_method }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h5 class="font-size-14 m-0">Biaya Layanan :</h5>
                                                </td>
                                                <td>
                                                    Rp. 100.000
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h5 class="font-size-14 m-0">Kode Unik :</h5>
                                                </td>
                                                <td>
                                                    {{ substr($transaction->total_payment, -3) }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h5 class="font-size-14 m-0">Status Pembayaran :</h5>
                                                </td>
                                                <td>
                                                    @if($transaction->status == 0)
                                                    Proses Verifikasi
                                                    @elseif($transaction->status == 20202)
                                                    Lunas
                                                    @elseif($transaction->status == 20203)
                                                    Lunas
                                                    @elseif($transaction->status == 20204)
                                                    Lunas
                                                    @elseif($transaction->status == 20205)
                                                    Lunas
                                                    @elseif($transaction->status == 20206)
                                                    Ditolak
                                                    @else
                                                    Tidak Diketahui
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr class="bg-light">
                                                <td colspan="2">
                                                    <h5 class="font-size-14 m-0">Total Pembayaran :</h5>
                                                </td>
                                                <td>
                                                    <b>Rp. {{ number_format($transaction->total_payment, 0, ',', '.')
                                                        }}</b>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
        </div>
    </section>
    </head>

    <body>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css"
            integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">

        </script>
    </body>

    </html>
</x-user-layout>