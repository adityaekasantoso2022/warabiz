<x-owner-layout title="Dashboard" active="dashboard">
    @push('addonStyle')
    <style>
        body {
            background: #dae3ec !important;
        }
    </style>
    @endpush

    <?php
    $totalPendapatanValue = isset($totalPendapatan) ? $totalPendapatan->total_pendapatan : 0;
    $transaksiTerbaruValue = isset($transaksiTerbaru) ? $transaksiTerbaru->harga_waralaba : 0;


    ?>

    <div class="page-heading"></div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon purple mb-2">
                                            <i class="fas fa-store"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Jumlah Waralaba</h6>
                                        <h6 class="font-extrabold mb-0">{{ $totalWaralabaByOwner }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon blue mb-2">
                                            <i class="fas fa-exchange-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Jumlah Transaksi</h6>
                                        <h6 class="font-extrabold mb-0">{{ $totalTransactionByOwner }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Jumlah Pekerjaan</h6>
                                        <h6 class="font-extrabold mb-0">{{$totalJobsByOwner}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                        <div class="stats-icon red mb-2">
                                            <i class="fas fa-file-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Jumlah Pelamar</h6>
                                        <h6 class="font-extrabold mb-0">{{$totalApplicantsByOwner}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Grafik Penjualan</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="dailySalesChart" style="height: 300px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
            <div class="card">
                    <div class="card-body px-4">
                        <div class="d-flex align-items-center">
                            <div class="ms-3 name">
                                <h6 class="text-muted font-semibold">Total Pendapatan</h6>
                                <h6 class="font-extrabold">Rp. {{ number_format($totalPendapatanValue, 0, ',', '.')}}</h6>
                                <small class="font-bold" style="color: green;">+ Rp. {{ number_format($transaksiTerbaruValue, 0, ',', '.')}}</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Transaksi Terbaru</h4>
                    </div>
                    <div class="card-content pb-4">
                        @foreach($transactions->sortByDesc('created_at')->take(5) as $transaction)
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg">
                                <div class="avatar bg-warning">
                                    <span class="avatar-content">{{ strtoupper(substr($transaction->user->name, 0, 2)) }}</span>
                                    <span class="avatar-status {{ $transaction->status === null ? 'bg-danger' : 'bg-success' }}"></span>
                                </div>
                            </div>
                            <div class="name ms-4">
                                <b>TRX-{{ substr($transaction->uuid, 2, 6) }}</b>
                                <p class="text-muted mb-0">{{ $transaction->created_at->format('d/m/Y H:i') }} WIB</p>
                            </div>
                        </div>
                        @endforeach
                        <div class="px-4">
                        <a href="{{ route('owner.transactions') }}" class="btn btn-block btn-xl btn-light-primary font-bold mt-3">Lainnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @push('addonScript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script>
        const transactions = {!! json_encode($transactions)!!};

        const transactionDates = transactions.map(transaction => new Date(transaction.created_at).toLocaleDateString());
        const dailyTransactionCounts = {};

        transactionDates.forEach(date => {
            dailyTransactionCounts[date] = (dailyTransactionCounts[date] || 0) + 1;
        });

        const dailySalesData = {
            labels: Object.keys(dailyTransactionCounts),
            datasets: [{
                label: 'Jumlah Penjualan Waralaba',
                data: Object.values(dailyTransactionCounts).map(count => Math.floor(count)), // Menggunakan Math.floor() untuk membulatkan ke bawah
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };

        const dailySalesConfig = {
            type: 'bar',
            data: dailySalesData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah Transaksi'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Tanggal Transaksi'
                        }
                    }
                }
            }
        };
        var dailySalesChart = new Chart(document.getElementById('dailySalesChart'), dailySalesConfig);
    </script>
    @endpush


</x-owner-layout>