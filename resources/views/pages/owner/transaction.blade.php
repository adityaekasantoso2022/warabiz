<x-owner-layout title="Transaksi" active="transaksi" style="margin-top: 0;">
    @push('addonStyle')
    <style>
        /* CSS Styles */
        body {
            background: #dae3ec !important;
        }

        .waralaba-card {
            background: #fff;
            border-radius: 14px;
            color: #34364a;
            padding: 30px;
            overflow-x: auto;
            overflow-y: auto;
        }

        .transaction-table {
            width: 100%;
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
            justify-content: space-between;
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

        .status-label {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 5px;
            font-size: 12px;
            font-weight: bold;
            color: white;
        }

        .small-circle-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: contain;
        }

        @media screen and (max-width: 576px) {
            .search-bar {
                flex-direction: column;
                align-items: flex-start;
            }

            #searchInput {
                width: 100%;
                margin: 5px 0;
            }
        }

        .transaction-buttons-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 5px;
        }
    </style>
    @endpush

    <section>
        <div class="container">
            <div class="waralaba-card">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Transaksi Penjualan</h3>
                    </div>
                </div>

                @if ($transactions->isEmpty())
                    <div class="row justify-content-center">
                        <p>Belum ada transaksi</p>
                    </div>
                @else
                    <div class="row justify-content-center">
                        <div class="transaction-list">
                            <div class="search-bar mb-3 d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <span>Cari Transaksi: ‎ ‎ </span>
                                    <input type="text" id="searchInput"
                                        class="form-control border px-2 py-1 rounded-3 shadow-none ml-2">
                                </div>
                                <div>
                                    <label for="statusFilter">Filter Status:</label>
                                    <select id="statusFilter" class="form-select">
                                        <option value="">Semua</option>
                                        <option value="Verifikasi Pembayaran">Verifikasi Pembayaran</option>
                                        <option value="Proses Pembangunan">Proses Pembangunan</option>
                                        <option value="Proses Pembukaan">Proses Pembukaan</option>
                                        <option value="Selesai">Selesai</option>
                                        <option value="Gagal">Gagal</option>
                                    </select>
                                </div>
                            </div>

                            <table class="transaction-table">
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
                                    @php
                                        $sortedTransactions = $transactions->sortByDesc('created_at');
                                        $transactionIndex = 0; // Inisialisasi nomor urut transaksi
                                    @endphp

                                    @foreach($sortedTransactions as $transaction)
                                    <tr class="transaction-row"
                                        data-status="{{ $transaction->status }}">
                                        <td>{{ ++$transactionIndex }}</td>
                                        <td>TRX-{{ substr($transaction->uuid, 2, 6) }}</td>
                                        <td>{{ $transaction->waralaba_name }}</td>
                                        <td>{{ $transaction->fullname }}</td>
                                        <td>{{ $transaction->created_at->setTimezone('Asia/Jakarta')->format('d/m/Y H:i') }}</td>
                                        <td>{{ $transaction->payment_method }}</td>
                                        <td>
                                            @switch($transaction->status)
                                                @case(0)
                                                    <span>Pending</span>
                                                    @break
                                                @case(20202)
                                                    <span>Verifikasi Pembayaran</span>
                                                    @break
                                                @case(20203)
                                                    <span>Proses Pembangunan</span>
                                                    @break
                                                @case(20204)
                                                    <span>Proses Pembukaan</span>
                                                    @break
                                                @case(20205)
                                                    <span>Selesai</span>
                                                    @break
                                                @case(20206)
                                                    <span>Gagal</span>
                                                    @break
                                            @endswitch
                                        </td>
                                        <td>
                                            <div class="transaction-details transaction-buttons-container">
                                                <a href="{{ route('owner.transactions.edit', ['id' => $transaction->uuid]) }}"
                                                    class="btn btn-circle btn-primary"
                                                    style="background-color: #009bb8; border: none;">
                                                    <i class="fas fa-sync-alt" style="color: white;"></i>
                                                </a>

                                                <form action="{{ route('owner.transactions.destroy', $transaction->uuid) }}"
                                                    method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-circle btn-danger"
                                                        style="background-color: #F44336; border: none;">
                                                        <i class="fas fa-trash-alt" style="color: white;"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <script>
        document.getElementById("searchInput").addEventListener("input", function () {
            var input, filter, table, tr, tdName, tdId, tdPemesan, i, txtValueName, txtValueId, txtValuePemesan;
            input = this;
            filter = input.value.toUpperCase();
            table = document.querySelector(".transaction-table");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                tdName = tr[i].getElementsByTagName("td")[2]; // Kolom untuk nama waralaba
                tdId = tr[i].getElementsByTagName("td")[1]; // Kolom untuk ID transaksi
                tdPemesan = tr[i].getElementsByTagName("td")[3]; // Kolom untuk Nama Pemesan
                if (tdName && tdId && tdPemesan) {
                    txtValueName = tdName.textContent || tdName.innerText;
                    txtValueId = tdId.textContent || tdId.innerText;
                    txtValuePemesan = tdPemesan.textContent || tdPemesan.innerText;
                    if (txtValueName.toUpperCase().indexOf(filter) > -1 || txtValueId.toUpperCase().indexOf(filter) > -1 || txtValuePemesan.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        });

        document.getElementById("statusFilter").addEventListener("change", function () {
            var filter, table, tr, tdStatus, i, txtValueStatus;
            filter = this.value.toUpperCase();
            table = document.querySelector(".transaction-table");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                tdStatus = tr[i].getElementsByTagName("td")[6]; // Kolom untuk status transaksi
                if (tdStatus) {
                    txtValueStatus = tdStatus.textContent || tdStatus.innerText;
                    if (filter === '' || txtValueStatus.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        });
    </script>
</x-owner-layout>
