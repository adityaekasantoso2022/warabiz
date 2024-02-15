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
                            <h6 class="font-extrabold mb-0">100</h6> <!-- Ganti angka 100 dengan jumlah aktual pesanan proses -->
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
                            <h6 class="font-extrabold mb-0">100</h6> <!-- Ganti angka 100 dengan jumlah aktual waralaba -->
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
                            <h6 class="font-extrabold mb-0">100</h6> <!-- Ganti angka 100 dengan jumlah aktual transaksi -->
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
                            <h6 class="font-extrabold mb-0">100</h6> <!-- Ganti angka 100 dengan jumlah aktual artikel -->
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
                                <tr>
                                    <td>1</td>
                                    <td>TRX001</td>
                                    <td>Waralaba A</td>
                                    <td>Arif Mundandar</td>
                                    <td>2024-02-15</td>
                                    <td>Transfer Bank</td>
                                    <td>Selesai</td>
                                </tr>
                                <!-- Tambahkan baris untuk transaksi lain di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
