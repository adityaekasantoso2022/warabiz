<x-user-layout title="Riwayat Transaksi" active="riwayat-transaksi">
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
        margin: 0px !important;
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

    .header-primary {
        color: #34364a;
        font-size: 38px;
        font-weight: 700;
        line-height: 48px;
    }

    .bantuan-card {
        background: #fff;
        border-radius: 14px;
        color: #34364a;
        padding: 30px;
        margin-bottom: 20px;
        overflow-x: auto;
        overflow-y: auto;
    }

    .transaction-table {
        width: 100%;
        margin-top: 10px;
        border-collapse: collapse;
        white-space: nowrap;
    }

    .transaction-table th,
    .transaction-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    .transaction-table th {
        background-color: #f2f2f2;
        text-align: center; /* Tambahkan properti text-align: center; */
    }

    .transaction-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .transaction-table tr:hover {
        background-color: #f2f2f2;
    }

    @media (max-width: 767px) {
        .transaction-table {
            display: block;
        }

        .transaction-table th,
        .transaction-table td {
            min-width: 100px;
            padding: 8px;
            text-align: center;
        }

        .transaction-table th:first-child,
        .transaction-table td:first-child {
            border-left: none;
        }

        .transaction-table th:last-child,
        .transaction-table td:last-child {
            border-right: none;
        }
    }
    </style>
    @endpush
    <section class="py-5" style="margin-top: 10px">
        <div class="container">
            <div class="mt-5 row pricing testimonials mentors checkout gy-4" id="reviews">
                <div class="bantuan-card">
                    <div class="row justify-content-center">
                        @if($transactions->isEmpty())
                            <p>No transactions found.</p>
                        @else
                            <div class="transaction-list">
                                <table class="transaction-table">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID Transaksi</th>
                                            <th>Nama Waralaba</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($transactions as $index => $transaction)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td style="text-align: left;">{{ $transaction->uuid }}</td>
                                                <td style="text-align: left;">{{ $transaction->waralaba_name }}</td>
                                                <td style="text-align: left;">{{ $transaction->created_at->format('d/m/Y h:m') }}</td>
                                                <td style="text-align: left;">{{ $transaction->payment_method }}</td>
                                                <td style="text-align: left;">{{ $transaction->status_text }}</td>
                                                <td>
                                                    <div class="transaction-details">
                                                        <a href="{{ route('transaction.detail', ['transactionId' => $transaction->uuid]) }}" class="btn btn-circle btn-primary" style="background-color: #009BB8; border: none;">
                                                        <i class="fas fa-eye" style="color: white;"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-user-layout>
