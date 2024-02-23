<x-owner-layout title="Career" active="career" style="margin-top: 0;">
    <style>
        body {
            background: #dae3ec !important;
        }

        .career-card {
            background: #fff;
            border-radius: 14px;
            color: #34364a;
            padding: 30px;
            overflow-x: auto;
            overflow-y: auto;
        }

        .career-table {
            width: 100%;
            border-collapse: collapse;
        }

        .career-table th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .career-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .career-table th {
            background-color: #f2f2f2;
        }

        .career-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .career-table tr:hover {
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

        .small-circle-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: contain;
        }

        .career-thumbnail {
            max-width: 100px;
            max-height: 100px;
        }
    </style>

    <section>
        <div class="container mb-5">
            <div class="career-card">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <h3>Daftar Pekerjaan</h3>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="{{ route('owner.career.create') }}" class="btn btn-primary">Tambah Karier</a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="career-list">
                        <div class="search-bar mb-3">
                            <div class="d-flex align-items-center">
                                <input type="text" id="searchInput1" class="form-control border px-2 py-1 rounded-3 shadow-none ml-2" placeholder="Cari Pekerjaan">
                            </div>
                        </div>
                        <table class="career-table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Posisi Pekerjaan</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($careers as $index => $career)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>{{ $career->company_name }}</td>
                                    <td>{{ $career->career_title }}</td>
                                    <td>{{ Str::limit(strip_tags($career->description), 135) }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('owner.careers.edit', $career->id) }}" class="btn btn-warning me-2" style="background-color: #FFC107; border: none;">
                                                <i class="fas fa-edit" style="color: white;"></i>
                                            </a>
                                            <form action="{{ route('owner.careers.destroy', $career->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" style="background-color: #F44336; border: none;"><i class="fas fa-trash-alt" style="color: white;"></i></button>
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

    <section>
        <div class="container mb-5">
            <div class="career-card">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <h3>Daftar Pelamar</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="search-bar mb-3">
                            <div class="d-flex align-items-center">
                                <input type="text" id="searchInput2" class="form-control border px-2 py-1 rounded-3 shadow-none ml-2" placeholder="Cari Pelamar">
                            </div>
                            <div>
                                <label for="statusFilter">Filter Status:</label>
                                <select id="statusFilter" class="form-select" style="min-width: 250px;">
                                    <option value="">Semua</option>
                                    <option value="Ditolak">Ditolak</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Diterima">Diterima</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="career-list">
                                <table class="career-table">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID Lamaran</th>
                                            <th>Posisi Pekerjaan</th>
                                            <th>Nama Pelamar</th>
                                            <th>Tanggal Dibuat</th>
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
                                        <tr class="jobApp-row" data-status="{{ $jobApp->status }}">
                                            <td class="text-center">{{ ++$jobIndex }}</td>
                                            <td>LMR-{{ substr($jobApp->application_id, 0, 8) }}</td>
                                            <td>{{ $jobApp->career->career_title }}</td>
                                            <td>{{ $jobApp->full_name }}</td>
                                            <td class="text-center">{{ \Carbon\Carbon::parse($jobApp->created_at)->format('d/m/Y H:i') }}</td>
                                            <td class="text-center">
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
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('admin.jobApp.details', ['id' => $jobApp->application_id]) }}" class="btn btn-primary me-2">
                                                        <i class="fas fa-sync-alt"></i>
                                                    </a>
                                                    <form action="{{ route('admin.jobApp.delete', $jobApp->application_id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fas fa-trash-alt"></i>
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
            </div>
        </div>
    </section>

    <script>
        // Fungsi pencarian di Bagian Daftar Pekerjaan
        document.getElementById('searchInput1').addEventListener('keyup', function() {
            const searchText = this.value.toLowerCase();
            const rows = document.querySelectorAll('.career-table tbody tr');

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchText) ? '' : 'none';
            });
        });

        // Fungsi pencarian dan filter status di Bagian Daftar Pelamar
        document.getElementById('searchInput2').addEventListener('keyup', filterJobApps);
        document.getElementById('statusFilter').addEventListener('change', filterJobApps);

        function filterJobApps() {
            const searchText = document.getElementById('searchInput2').value.toLowerCase();
            const statusFilter = document.getElementById('statusFilter').value.toLowerCase();
            const rows = document.querySelectorAll('.career-table tbody tr');

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                const status = row.dataset.status.toLowerCase();
                const isMatchSearchText = text.includes(searchText);
                const isMatchStatus = statusFilter === '' || status === statusFilter.toLowerCase();

                row.style.display = isMatchSearchText && isMatchStatus ? '' : 'none';
            });
        }
    </script>
</x-owner-layout>
