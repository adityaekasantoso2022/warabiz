<x-owner-layout title="Invoice - TRX-{{ strtoupper(substr($transaction->uuid, 2, 6)) }}" active="transaksi">
    @push('addonStyle')
    <style>
        body {
            background: #EDF2F7 !important;
        }

        /* Menyembunyikan navbar saat mencetak */
        .navbar {
            display: none;
        }

        /* Menampilkan kembali navbar saat tidak mencetak */
        @media screen {
            .navbar {
                display: block;
            }
        }

        /* Menetapkan page break setelah konten */
        @media print {
            .page-break {
                page-break-after: always;
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
                            <div class="row mt-4">
                                <div class="col-lg-8 col-12">
                                    <img src="{{ asset('assets/frontend/image/logo.svg') }}" class="mb-4" height="40">
                                    <h3 class="mb-2">Invoice Pembelian Waralaba</h3>
                                    <div class="row mb-1">
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
                                            <p class="mt-2">
                                                <?= date('d F Y'); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-right col-12">
                                    <p class="mb-0 mt-2">
                                        ID Transaksi: #TRX-{{ strtoupper(substr($transaction->uuid, 2, 6)) }}
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
                                <div class="col-lg-6">
                                    <p class="mb-0 text-blue">
                                        Kepada:
                                    </p>
                                    <p class="mb-0">
                                        <strong>{{ $transaction->fullname }}</strong>
                                    </p>
                                    <p class="mb-0">
                                        {{ $transaction->email }}
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
                                        <span style="position: relative;">
                                            <img src="{{ asset('assets/frontend/image/lunas.png') }}" alt="Lunas Stamp"
                                                style="width: 110px; height: auto; position: absolute; left: -100px; top: 0; opacity: 0.2; transform: rotate(15deg);">
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span></span>
                                        <span>Metode Pembayaran
                                            :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bank {{
                                            $transaction->payment_method }}</span>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <span></span>
                                        <span>Biaya Layanan
                                            :&nbsp;&nbsp;&nbsp; Rp. 100.000</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span></span>
                                        <span>Kode Unik
                                            :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{
                                            substr($transaction->total_payment, -3) }}</span>
                                    </div>
                                    @php
                                    $totalPayment = $transaction->waralaba->price + 100000;
                                    @endphp
                                    <div class="d-flex justify-content-between">
                                        <span></span>
                                        <h6><b>Total Pembayaran</b> : Rp. {{
                                            number_format($transaction->total_payment)}}</h6>
                                    </div>
                                    <div class="col-lg-12 col-12 mt-4">
                                        <p>Terima kasih atas pembelian Anda. Kami menghargai kepercayaan Anda kepada
                                            kami. <br>Silakan hubungi kami jika Anda memerlukan bantuan lebih lanjut.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5" style="page-break-before: always;">
                                <div class="col-lg-12 col-12">
                                    <div class="container">
                                        <div class="row mt-5">
                                            <div class="col-lg-8 col-12">
                                                <img src="{{ asset('assets/frontend/image/logo.svg') }}"
                                                    class="mb-4 mt-3" height="40">
                                                <h3 class="mb-2">Surat Perjanjian Kerjasama</h3>
                                            </div>
                                        </div>
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
                                                <p class="mt-2">
                                                    <?= date('d F Y'); ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-lg-12 col-12">
                                                <p>Dengan hormat,</p>
                                                <p>Bersama surat ini, kami dari <strong>PT. Warabisnis
                                                        Technology</strong> dengan ini menyatakan kesepakatan kerjasama
                                                    waralaba yang telah disetujui antara kedua belah pihak setelah semua
                                                    proses pendirian waralaba selesai.</p>
                                                <p>Berikut adalah detail kesepakatan kerjasama:</p>

                                                <ol>
                                                    <li><strong>Merek Dagang:</strong> {{ $transaction->waralaba_name }}
                                                    </li>
                                                    <li><strong>Lokasi Waralaba:</strong> {{ $transaction->address }}
                                                    </li>
                                                    <li><strong>Hak dan Kewajiban Perusahaan Waralaba:</strong>
                                                        <ul>
                                                            <li>Memberikan bimbingan dan dukungan kepada mitra waralaba
                                                                dalam operasional.</li>
                                                            <li>Memastikan konsistensi kualitas produk dan layanan yang
                                                                diberikan.</li>
                                                            <li>Menyediakan pelatihan kepada staf dan karyawan mitra
                                                                waralaba.</li>
                                                        </ul>
                                                    </li>
                                                    <li><strong>Hak dan Kewajiban Mitra Waralaba:</strong>
                                                        <ul>
                                                            <li>Menjalankan operasional usaha sesuai dengan standar dan
                                                                prosedur yang ditetapkan oleh perusahaan waralaba.</li>
                                                            <li>Mempromosikan dan memasarkan produk dan layanan sesuai
                                                                dengan pedoman yang diberikan.</li>
                                                        </ul>
                                                    </li>
                                                    <li><strong>Durasi Perjanjian:</strong> Perjanjian ini berlaku untuk
                                                        jangka waktu {{ $transaction->waralaba->license_duration}} tahun
                                                        dan
                                                        dapat diperpanjang
                                                        berdasarkan kesepakatan kedua belah pihak.</li>
                                                    @if($transaction->waralaba->royality > 0)
                                                    <li><strong>Pembayaran Royalti:</strong> Mitra waralaba wajib
                                                        membayar royalti sebesar Rp. {{
                                                        number_format($transaction->waralaba->royality, 0, ',', '.') }}
                                                        kepada perusahaan waralaba setiap Periode Pembayaran.</li>
                                                    @endif
                                                </ol>

                                                <p>Demikianlah perjanjian kerjasama ini dibuat dan ditandatangani oleh
                                                    kedua belah pihak sebagai tanda kesepakatan bersama.</p>

                                                <div class="row">
                                                    <p>Disetujui oleh,</p>
                                                    <div class="col-lg-6 col-6">
                                                        <br>
                                                        <br>
                                                        <p>Aditya Eka Santoso<br><small class="text-center">CEO PT.
                                                                Warabisnis Technology</small></p>
                                                    </div>
                                                    <div class="col-lg-6 col-6">
                                                        <br>
                                                        <br>
                                                        <p>{{ $transaction->fullname }}<br><small
                                                                class="text-center">Mitra Waralaba Warabiz</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3 mb-5">
                <button onclick="printInvoice()" class="btn btn-dark">Unduh</button>
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