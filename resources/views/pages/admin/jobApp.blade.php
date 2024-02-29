<x-admin-layout title="Lamaran Pekerjaan" active="lamaran pekerjaan">
    @push('addonStyle')
    <style>
        /* CSS Styles */
        body {
            background: #dae3ec !important;
        }

        .jobApp-card {
            background: #fff;
            border-radius: 14px;
            color: #34364a;
            padding: 30px;
        }

        .jobApp-table {
            width: 100%;
            border-collapse: collapse;
        }

        .jobApp-table th,
        .jobApp-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .jobApp-table th {
            background-color: #f2f2f2;
        }

        .jobApp-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .jobApp-table tr:hover {
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

        .jobApp-buttons-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 5px;
        }
    </style>
    @endpush

    <section>
        <div class="container">
            <div class="jobApp-card">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Daftar Lamaran Pekerjaan</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="jobApp-list">
                        <div class="search-bar mb-3 d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <span>Cari Lamaran Pekerjaan: ‎ ‎ </span>
                                <input type="text" id="searchInput"
                                    class="form-control border px-2 py-1 rounded-3 shadow-none ml-2">
                            </div>
                            <div>
                                <label for="statusFilter">Filter Status:</label>
                                <select id="statusFilter" class="form-select" style="min-width: 250px;">
                                    <option value="">Semua</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Diterima">Diterima</option>
                                    <option value="Ditolak">Ditolak</option>
                                </select>
                            </div>
                        </div>
                        <table class="jobApp-table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>ID Lamaran</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Posisi Pekerjaan</th>
                                    <th>Nama Pelamar</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $sortedJob = $jobApps->sortByDesc('created_at');
                                    $jobIndex = 0;
                                @endphp

                                @foreach($sortedJob as $jobApp)
                                <tr class="jobApp-row"
                                    data-status="{{ $jobApp->status }}">
                                    <td>{{ ++$jobIndex }}</td>
                                    <td>{{ strtoupper('LMR-' . substr($jobApp->application_id, 0, 8)) }}</td>
                                    <td>{{ $jobApp->career->company_name }}</td>
                                    <td>{{ $jobApp->career->career_title }}</td>
                                    <td>{{ $jobApp->full_name }}</td>
                                    <td>
                                        @switch($jobApp->status)
                                            @case(30301)
                                                <span>Ditolak</span>
                                            @break
                                            @case(30302)
                                                <span>Pending</span>
                                            @break
                                            @case(30303)
                                                <span>Diterima</span>
                                            @break
                                        @endswitch
                                    </td>
                                    <td>
                                        <div class="jobApp-details jobApp-buttons-container">
                                            <a href="{{ route('admin.jobApp.details', ['id' => $jobApp->application_id]) }}"
                                                class="btn btn-circle btn-primary"
                                                style="background-color: #009bb8; border: none;">
                                                <i class="fas fa-sync-alt" style="color: white;"></i></a>
                                            <form action="{{ route('admin.jobApp.delete', $jobApp->application_id) }}"
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
            </div>
        </div>
    </section>

    @push('addonScript')
    <script>
        document.getElementById("searchInput").addEventListener("input", function () {
            var input, filter, table, tr, tdName, tdId, tdFullname, i, txtValueName, txtValueId, txtValuePemesan;
            input = this;
            filter = input.value.toUpperCase();
            table = document.querySelector(".jobApp-table");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                tdName = tr[i].getElementsByTagName("td")[2]; // Kolom untuk nama jobApp
                tdId = tr[i].getElementsByTagName("td")[1]; // Kolom untuk ID transaksi
                tdFullname = tr[i].getElementsByTagName("td")[3]; // Kolom untuk Nama Pemesan
                if (tdName && tdId && tdFullname) {
                    txtValueName = tdName.textContent || tdName.innerText;
                    txtValueId = tdId.textContent || tdId.innerText;
                    txtValuePemesan = tdFullname.textContent || tdFullname.innerText;
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
            table = document.querySelector(".jobApp-table");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                tdStatus = tr[i].getElementsByTagName("td")[5]; // Kolom untuk status transaksi
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
    @endpush
</x-admin-layout>
