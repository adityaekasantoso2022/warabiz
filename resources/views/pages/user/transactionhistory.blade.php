<x-user-layout title="Payment" active="payment">
    @push('addonStyle')
        <style>
            /* Existing styles... */

            .transaction-list {
                width: 100%;
            }

            .transaction-table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            .transaction-table th,
            .transaction-table td {
                border: 1px solid #e0e0e0;
                padding: 10px;
                text-align: left;
            }

            .transaction-id {
                font-size: 14px;
                color: #000000;
            }

            .transaction-details p {
                font-size: 14px;
                color: #000000;
                margin: 0;
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
                                    <th>Transaction ID</th>
                                    <th>Nama Waralaba</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Status</th>
                                    <!-- Add more columns as needed -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transactions as $transaction)
                                    <tr>
                                        <td class="transaction-id">{{ $transaction->uuid }}</td>
                                        <td>
                                            <div class="transaction-details">
                                                <p>{{ $transaction->waralaba_name }}</p>
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
