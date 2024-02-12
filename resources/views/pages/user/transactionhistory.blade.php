<x-user-layout title="Payment" active="payment">
    @push('addonStyle')
        <style>
            /* Existing styles... */
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

            .transaction-list {
                width: 100%;
            }

            .transaction-table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            .transaction-table td {
                border: 1px solid #8c8c8c;
                padding: 10px;
                text-align: left;
            }

            .transaction-table th {
                border: 1px solid #8c8c8c;
                text-align: center;
                padding: 5px;
            }

            .transaction-details p {
                font-size: 14px;
                color: #000000;
                text-align: center;
                margin: 0;
            }

            .transaction-details a {
                font-size: 14px;
                text-align: center;
                margin-left: 15%;
            }
        </style>
    @endpush

    <section class="py-5" style="margin-top: 10px">
        <div class="container">
            <div class="mt-5 row pricing testimonials mentors checkout gy-4">
                <h1>Transaction History</h1>

                @if($transactions->isEmpty())
                    <p>No transactions found.</p>
                @else
                    <div class="transaction-list">
                        <table class="transaction-table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Transaction ID</th>
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
                                        <td>
                                            <div class="transaction-details">
                                                <p>{{ $index + 1 }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="transaction-details">
                                                <p>{{ $transaction->uuid }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="transaction-details">
                                                <p>{{ $transaction->waralaba_name }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="transaction-details">
                                                <p>{{ $transaction->created_at->format('d/m/Y h:m') }} WIB</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="transaction-details">
                                                <p>{{ $transaction->payment_method }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="transaction-details">
                                                <p>{{ $transaction->status_text }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="transaction-details">
                                                <a href="{{ route('transaction.detail', ['transactionId' => $transaction->uuid]) }}" class="btn btn-primary">Detail</a>
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
    </section>
</x-user-layout>