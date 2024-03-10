<x-admin-layout title="Verifikasi Owner" active="verifowner" style="margin-top: 0;">
    @push('addonStyle')
    <style>
    /* CSS Styles */
    body {
        background: #fbfbfb !important;
    }

    .waralaba-card {
        background: #fff;
        border-radius: 14px;
        color: #34364a;
        padding: 30px;
        overflow-x: auto;
        overflow-y: auto;
    }

    .verifOwner-table {
        width: 100%;
        border-collapse: collapse;
    }

    .verifOwner-table th,
    .verifOwner-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    .verifOwner-table th {
        background-color: #f2f2f2;
    }

    .verifOwner-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .verifOwner-table tr:hover {
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

    .verifOwner-buttons-container {
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
                        <h3>Verifikasi Owner</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="verifOwner-list">
                        <div class="search-bar mb-3 d-flex justify-content-end align-items-center">
                            <div>
                                <label for="statusFilter">Filter Status Verifikasi:</label>
                                <select id="statusFilter" class="form-select">
                                    <option value="">Semua</option>
                                    <option value="2">Pending</option>
                                    <option value="3">Diterima</option>
                                    <option value="1">Ditolak</option>
                                </select>
                            </div>
                        </div>
                        <table class="verifOwner-table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Kategori Perusahaan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                $sortedVeirfOwners = $verifOwners->sortByDesc('created_at');
                                $verifOwnerIndex = 0; // Inisialisasi nomor urut transaksi
                                @endphp

                                @foreach($sortedVeirfOwners as $verifOwner)
                                <tr class="verifOwner-row" data-status="{{ $verifOwner->status }}">
                                    <td>{{ ++$verifOwnerIndex }}</td>
                                    <td>VEO-{{ strtoupper(substr($verifOwner->uuid, 0, 4)) }}</td>
                                    <td>{{ $verifOwner->fullname }}</td>
                                    <td>{{ $verifOwner->email }}</td>
                                    <td>{{ $verifOwner->address }}</td>
                                    <td>{{ $verifOwner->company_name }}</td>
                                    <td>{{ $verifOwner->company_category }}</td>
                                    <td>
                                        @switch($verifOwner->status)
                                        @case(1)
                                        <span>Ditolak</span>
                                        @break
                                        @case(2)
                                        <span>Panding</span>
                                        @break
                                        @case(3)
                                        <span>Diterima</span>
                                        @break
                                        @endswitch
                                    </td>
                                    <td>
                                        <div class="verifOwner-details verifOwner-buttons-container">
                                            <a href="{{ route('admin.verifOwner.edit', ['id' => $verifOwner->uuid]) }}"
                                                class="btn btn-circle btn-primary"
                                                style="background-color: #009bb8; border: none;">
                                                <i class="fas fa-sync-alt" style="color: white;"></i>
                                            </a>
                                            <form action="{{ route('admin.verifOwner.destroy', $verifOwner->uuid) }}"
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

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ambil elemen select dengan id 'statusFilter'
        const statusFilter = document.getElementById('statusFilter');

        // Tambahkan event listener untuk menangani perubahan nilai pada elemen select
        statusFilter.addEventListener('change', function() {
            // Ambil nilai yang dipilih
            const selectedStatus = statusFilter.value;

            // Ambil semua elemen baris pada tabel kecuali baris header
            const rows = document.querySelectorAll('.verifOwner-row');

            // Loop melalui setiap baris
            rows.forEach(row => {
                const rowStatus = row.getAttribute('data-status');

                // Jika nilai status yang dipilih adalah 'Semua' atau nilai status baris sama dengan nilai status yang dipilih
                // Tampilkan baris, jika tidak sembunyikan baris
                if (selectedStatus === '' || rowStatus === selectedStatus) {
                    row.style.display = 'table-row';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
    </script>
</x-admin-layout>