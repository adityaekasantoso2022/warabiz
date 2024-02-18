<x-admin-layout title="Waralaba" active="waralaba" style="margin-top: 0;">
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

        .waralaba-table {
            width: 100%;
            border-collapse: collapse;
        }

        .waralaba-table th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .waralaba-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .waralaba-table th {
            background-color: #f2f2f2;
        }

        .waralaba-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .waralaba-table tr:hover {
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
                        <h3>Daftar Waralaba</h3>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="{{ route('admin.waralaba.create.form') }}" class="btn btn-primary">Tambah Waralaba</a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="waralaba-list">
                        <div class="search-bar mb-3 d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <span>Cari Waralaba: ‎ ‎ </span>
                                <input type="text" id="searchInput"
                                    class="form-control border px-2 py-1 rounded-3 shadow-none ml-2">
                            </div>
                        </div>
                        <table class="waralaba-table">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Logo</th>
                                    <th>Nama Waralaba</th>
                                    <th>Tipe</th>
                                    <th>Harga</th>
                                    <th>Dibuat</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($waralabas as $index => $waralaba)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td class="text-center"><img class="small-circle-img" src="{{ $waralaba->logo }}" alt="Waralaba Image">
                                    </td>
                                    <td>{{ $waralaba->waralaba_name }}</td>
                                    <td>{{ $waralaba->concept }}</td>
                                    <td>Rp. {{ number_format(floatval($waralaba->price), 0, ',', '.') }}</td>
                                    <td>{{ $waralaba->created_at->setTimezone('Asia/Jakarta')->format('d/m/Y') }}</td>
                                    <td class="text-center">
                                        <div class="waralaba-details">
                                            <a href="{{ route('admin.waralaba.show', $waralaba->id) }}" class="btn btn-circle btn-primary"
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
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    document.getElementById("searchInput").addEventListener("input", function () {
        var input, filter, table, tr, tdName, tdId, tdConcept, tdPrice, i, txtValueName, txtValueId, txtValueConcept, txtValuePrice;
        input = this;
        filter = input.value.toUpperCase();
        table = document.querySelector(".waralaba-table");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            tdName = tr[i].getElementsByTagName("td")[2];
            tdId = tr[i].getElementsByTagName("td")[1];
            tdConcept = tr[i].getElementsByTagName("td")[3];
            tdPrice = tr[i].getElementsByTagName("td")[4];
            if (tdName || tdId || tdConcept || tdPrice) {
                txtValueName = tdName.textContent || tdName.innerText;
                txtValueId = tdId.textContent || tdId.innerText;
                txtValueConcept = tdConcept.textContent || tdConcept.innerText;
                txtValuePrice = tdPrice.textContent || tdPrice.innerText;
                if (txtValueName.toUpperCase().indexOf(filter) > -1 || txtValueId.toUpperCase().indexOf(filter) > -1 || txtValueConcept.toUpperCase().indexOf(filter) > -1 || txtValuePrice.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    });
</script>
    </x-user-layout>
