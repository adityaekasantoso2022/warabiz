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
                            <h6 class="font-extrabold mb-0">{{ $totalUser }}</h6>
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
                            <h6 class="font-extrabold mb-0">{{ $totalWaralaba }}</h6>
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
                            <h6 class="font-extrabold mb-0">{{ $totalTransaction }}</h6>
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
                            <h6 class="text-muted font-semibold">Jumlah<br>Waraedu</h6>
                            <h6 class="font-extrabold mb-0">{{ $totalArticle }}</h6>
                        </div>
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
                                <th>Pembayaran</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions->sortByDesc('created_at') as $key => $transaction)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>TRX-{{ substr($transaction->uuid, 2, 6) }}</td>
                                <td>{{ $transaction->waralaba_name }}</td>
                                <td>{{ $transaction->fullname }}</td>
                                <td>{{ $transaction->created_at->setTimezone('Asia/Jakarta')->format('d/m/Y H:i') }}</td>
                                <td>Bank {{ $transaction->payment_method }}</td>
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
                                <td>
                                    <div class="transaction-details transaction-buttons-container d-flex justify-content-between">
                                        <a href="{{ route('admin.transactions.show', ['id' => $transaction->uuid]) }}" class="btn btn-circle btn-primary" style="background-color: #009bb8; border: none;">
                                            <i class="fas fa-eye" style="color: white;"></i>
                                        </a>
                                        <span style="width: 5px;"></span>
                                        <a href="{{ route('admin.transactions.edit', ['id' => $transaction->uuid]) }}" class="btn btn-circle btn-warning" style="background-color: #FFC107; border: none;">
                                            <i class="fas fa-edit" style="color: white;"></i>
                                        </a>
                                    </div>
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
<div class="row mt-4">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Grafik Penjualan Harian</h5>
                <canvas id="dailySalesChart" style="height: 300px;"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Waralaba Terlaris</h5>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Waralaba</th>
                                <th>Jumlah Terjual</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Isi tabel waralaba terlaris -->
                            @php 
                                $topFranchises = $transactions->groupBy('waralaba_name')->map->count()->sortDesc(); 
                            @endphp
                            @foreach($topFranchises as $name => $count)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $name }}</td>
                                <td>{{ $count }} Waralaba</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@push('addonScript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<script>
    const transactions = {!! json_encode($transactions) !!};

    const transactionDates = transactions.map(transaction => new Date(transaction.created_at).toLocaleDateString());
    const dailyTransactionCounts = {}; 

    transactionDates.forEach(date => {
        dailyTransactionCounts[date] = (dailyTransactionCounts[date] || 0) + 1;
    });

    const dailySalesData = {
        labels: Object.keys(dailyTransactionCounts),
        datasets: [{
            label: 'Jumlah Penjualan Waralaba',
            data: Object.values(dailyTransactionCounts),
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

    
</x-admin-layout>
