<x-user-layout title="Riwayat Transaksi" active="riwayat-transaksi">
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
        }

        .transaction-table th,
        .transaction-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .transaction-table th {
            background-color: #f2f2f2;
        }

        .transaction-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .transaction-table tr:hover {
            background-color: #f2f2f2;
        }

        .search-bar {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-bottom: 20px;
        }

        #searchInput {
            width: 200px;
            margin-right: 5px;
        }

        #searchButton {
            max-width: 80px;
            padding: 6px 12px;
        }
        .proses-verifikasi {
            background-color: #F16336;
            color: white;
            display: inline-block;
            padding: 6px 10px;
            border-radius: 5px; /* Atur sesuai kebutuhan Anda */
            font-size: 12px; /* Ubah ukuran teks sesuai kebutuhan */
            
        }

        .proses-pembangunan {
            background-color: #3095B5;
            color: white;
            display: inline-block;
            padding: 6px 10px;
            border-radius: 5px; /* Atur sesuai kebutuhan Anda */
            font-size: 12px; /* Ubah ukuran teks sesuai kebutuhan */
        }
        .persiapan-pembukaan {
            background-color: #0578FF;
            color: white;
            display: inline-block;
            padding: 6px 10px;
            border-radius: 5px; /* Atur sesuai kebutuhan Anda */
            font-size: 12px; /* Ubah ukuran teks sesuai kebutuhan */
        }
        .selesai {
            background-color: #009D64;
            color: white;
            display: inline-block;
            padding: 6px 10px;
            border-radius: 5px; /* Atur sesuai kebutuhan Anda */
            font-size: 12px; /* Ubah ukuran teks sesuai kebutuhan */
        }
        .ditolak {
            background-color: #CF0606;
            color: white;
            display: inline-block;
            padding: 6px 10px;
            border-radius: 5px; /* Atur sesuai kebutuhan Anda */
            font-size: 12px; /* Ubah ukuran teks sesuai kebutuhan */
        }



    </style>
    @endpush
    <section class="py-5" style="margin-top: 10px">
        <div class="container">
            <div class="mt-5 row pricing testimonials mentors checkout gy-4" id="reviews">
                <div class="bantuan-card">
                    <div class="row justify-content-center">
                        @if($transactions->isEmpty())
                        <p>Tidak ada transaksi</p>
                        @else
                        <div class="transaction-list">
                            <div class="search-bar mb-3">
                                <span><b>Pencarian: ‎ ‎ </b></span>
                                <div class="search-input-wrapper">
                                    <input type="text" id="searchInput" class="form-control border px-2 py-1 rounded-3 shadow-none" placeholder="Cari transaksi..">
                                </div>
                            </div>
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
                                        <td>TRX-{{ substr($transaction->uuid, 2, 6) }}</td>
                                        <td>{{ $transaction->waralaba_name }}</td>
                                        <td>{{ $transaction->created_at->format('d-m-Y h:i:s') }}</td>
                                        <td>Bank {{ $transaction->payment_method }}</td>
                                        <td>
                                            @switch($transaction->status)
                                                @case(0)
                                                    <span class="proses-verifikasi">Verifikasi Pembayaran</span>
                                                    @break
                                                @case(1)
                                                    <span class="proses-pembangunan">Proses Pembangunan</span>
                                                    @break
                                                @case(2)
                                                   <span class="persiapan-pembukaan">Peoses Pembukaan Waralaba</span>
                                                    @break
                                                @case(3)
                                                <span class="selesai">Selesai</span>
                                                    @break
                                                @case(4)
                                                <span class="ditolak">Ditolak</span>
                                                    @break
                                                    
                                            @endswitch
                                        </td>
                                        <td>
                                            <div class="transaction-details">
                                                <a href="{{ route('transaction.detail', ['transactionId' => $transaction->uuid]) }}" class="btn btn-circle btn-primary" style="background-color: #009bb8; border: none;"><i class="fas fa-eye" style="color: white;"></i></a>
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
    <script>
        document.getElementById("searchInput").addEventListener("input", function () {
            var input, filter, table, tr, tdName, tdId, i, txtValueName, txtValueId;
            input = this;
            filter = input.value.toUpperCase();
            table = document.querySelector(".transaction-table");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                tdName = tr[i].getElementsByTagName("td")[2]; // Kolom untuk nama transaksi
                tdId = tr[i].getElementsByTagName("td")[1]; // Kolom untuk ID transaksi
                if (tdName || tdId) {
                    txtValueName = tdName.textContent || tdName.innerText;
                    txtValueId = tdId.textContent || tdId.innerText;
                    if (txtValueName.toUpperCase().indexOf(filter) > -1 || txtValueId.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        });
    </script>
</x-user-layout>
