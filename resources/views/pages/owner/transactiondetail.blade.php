<x-owner-layout title="Invoice - TRX-{{ substr($transaction->uuid, 2, 6) }}" active="transaksi">
    @push('addonStyle')
    <style>
        body {
            background: #EDF2F7 !important;
        }

        .navbar {
            display: none;
        }

        @media screen {
            .navbar {
                display: block;
            }
        }
    </style>
    @endpush

    <div class="row mt-4">
        <div class="col">
            <div id="print-content">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <div class="row mt-5">
                                <div class="col-lg-8 col-12">
                                    <img src="{{ asset('assets/frontend/image/logo.svg') }}" class="mb-4" height="40">
                                    <h3 class="mb-0">Invoice Pembelian Waralaba</h3>
                                </div>
                                <div class="col-lg-4 text-right col-12">
                                    <p class="mb-0 mt-2">
                                        ID Transaksi: TRX-{{ substr($transaction->uuid, 2, 6) }}
                                    </p>
                                    <p>
                                        Status: <strong>
                                            @if($transaction->status == 0)
                                                PENDING
                                            @elseif($transaction->status == 20202)
                                                PENDING
                                            @elseif($transaction->status == 20203)
                                                PENDING
                                            @elseif($transaction->status == 20204)
                                                PENDING
                                            @elseif($transaction->status == 20205)
                                                SUCCESS
                                            @elseif($transaction->status == 20206)
                                                GAGAL
                                            @else
                                                UNKNOWN
                                            @endif
                                        </strong>
                                    </p>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="row mb-4">
                                <div class="col-lg-6 col-12">
                                    <p class="mb-0">
                                        <strong>PT. Warabisnis Technology</strong>
                                    </p>
                                    <p class="mb-0">
                                        Banyumas, Jawa Tengah, Indonesia
                                    </p>
                                    <p class="mb-0">
                                        (081) 572663773
                                    </p>
                                </div>
                                <div class="col-lg-6 col-12 text-right">
                                    <p class="mb-0 text-blue">
                                        Kepada:
                                    </p>
                                    <p class="mb-0">
                                        <strong>{{ $transaction->user->name }}</strong>
                                    </p>
                                    <p class="mb-0">
                                        {{ $transaction->user->email }}
                                    </p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 col-12">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Waralaba</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Qty</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td width="45%">{{ $transaction->waralaba_name }}</td>
                                                <td>
                                                    Rp. {{ number_format($transaction->waralaba->price, 0, ',', '.') }}
                                                </td>
                                                <td>1</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-between mt-3">
                                        <span></span>
                                        <span>Biaya Layanan :‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ Rp. 100.000</span>
                                    </div>
                                    @php
                                        $totalPayment = $transaction->waralaba->price + 100000;
                                    @endphp
                                    <div class="d-flex justify-content-between">
                                        <span></span>
                                        <h6><b>Total Pembayaran</b> : Rp. {{ number_format($totalPayment, 0, ',', '.') }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 col-12">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <button onclick="printInvoice()" class="btn btn-dark">Print Invoice</button>
            </div>
        </div>
    </div>

    <script>
        function printInvoice() {
            var printContent = document.getElementById("print-content").innerHTML;
            var originalContent = document.body.innerHTML;

            document.body.innerHTML = printContent;

            window.print();

            document.body.innerHTML = originalContent;
        }
    </script>
</x-owner-layout>
