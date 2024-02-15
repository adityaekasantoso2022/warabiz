<x-admin-layout title="Dashboard" active="dashboard">
    @push('addonStyle')
        <style>
            body {
                background: #dae3ec !important;
            }
        </style>
    @endpush

    <div class="row">
    <div class="col-md-3">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                            <div class="stats-icon red mb-2">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Jumlah Pengguna</h6>
                            <h6 class="font-extrabold mb-0">{{ $totalUser }}</h6> <!-- Ganti angka 100 dengan jumlah aktual pesanan proses -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                            <div class="stats-icon blue mb-2">
                                <i class="fas fa-store"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Jumlah Waralaba</h6>
                            <h6 class="font-extrabold mb-0">{{ $totalWaralaba }}</h6> <!-- Ganti angka 100 dengan jumlah aktual waralaba -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                            <div class="stats-icon purple mb-2">
                                <i class="fas fa-exchange-alt"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Jumlah Transaksi</h6>
                            <h6 class="font-extrabold mb-0">{{ $totalTransaction }}</h6> <!-- Ganti angka 100 dengan jumlah aktual transaksi -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body px-4 py-4-5">
                    <div class="row">
                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                            <div class="stats-icon green mb-2">
                                <i class="fas fa-newspaper"></i>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h6 class="text-muted font-semibold">Jumlah Waraedu</h6>
                            <h6 class="font-extrabold mb-0">{{ $totalArticle }}</h6> <!-- Ganti angka 100 dengan jumlah aktual artikel -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Transaksi Terbaru</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>ID Transaksi</th>
                                    <th>Nama Waralaba</th>
                                    <th>Nama Pemesan</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $key => $transaction)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>TRX-{{ substr($transaction->uuid, 2, 6) }}</td>
                                    <td>{{ $transaction->waralaba_name }}</td>
                                    <td>{{ $transaction->fullname }}</td>
                                    <td>{{ $transaction->created_at }}</td>
                                    <td>{{ $transaction->payment_method }}</td>
                                    <td>
                                        @switch($transaction->status)
                                        @case(0)
                                            <span class="status-label proses-verifikasi">Verifikasi Pembayaran</span>
                                            @break
                                        @case(1)
                                            <span class="status-label proses-pembangunan">Proses Pembangunan</span>
                                            @break
                                        @case(2)
                                            <span class="status-label persiapan-pembukaan">Proses Pembukaan Waralaba</span>
                                            @break
                                        @case(3)
                                            <span class="status-label selesai">Selesai</span>
                                            @break
                                        @case(4)
                                            <span class="status-label ditolak">Ditolak</span>
                                            @break
                                        @endswitch
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
