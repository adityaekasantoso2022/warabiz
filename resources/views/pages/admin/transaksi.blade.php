<x-admin-layout title="Transaksi" active="transaksi" style="margin-top: 0;">
    @push('addonStyle')
    <style>
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
            /* Ukuran gambar profil */
            height: 50px;
            border-radius: 50%;
            /* Lingkaran */
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
    </style>
    @endpush
    <section>
        <div class="container">
            <div class="waralaba-card">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Daftar Transaksi</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="transaction-list">
                        <div class="search-bar mb-3 d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <span>Cari Transaksi: ‎ ‎ </span>
                                <input type="text" id="searchInput"
                                    class="form-control border px-2 py-1 rounded-3 shadow-none ml-2">
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
                                <tr>
                                    <td>1</td>
                                    <td>TRX-176262</td>
                                    <td>Mie Gacoan</td>
                                    <td>Arif Munandar</td>
                                    <td>14-01-2023 10:00:59</td>
                                    <td>Bank BRI</td>
                                    <td>Sukses</td>
                                    <td>
                                        <div class="transaction-details">
                                            <a href="#" class="btn btn-circle btn-primary"
                                                style="background-color: #009bb8; border: none;"><i class="fas fa-eye"
                                                    style="color: white;"></i></a>
                                            <a href="#" class="btn btn-circle btn-warning"
                                                style="background-color: #FFC107; border: none;"><i class="fas fa-edit"
                                                    style="color: white;"></i></a>
                                            <a href="#" class="btn btn-circle btn-danger"
                                                style="background-color: #F44336; border: none;"><i
                                                    class="fas fa-trash-alt" style="color: white;"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>ument.getElementById("searchInput").addEventListener("input", function () {
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