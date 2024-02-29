<x-user-layout title="Riwayat Waracareer" active="riwayat-transaksi">
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

        .job-card {
            background: #fff;
            border-radius: 12px;
            color: #34364a;
            padding: 28px;
            margin-bottom: 20px;
            overflow-x: auto;
            overflow-y: auto;
            display: flex;
            justify-content: space-between;
            flex-direction: column;
        }

        .transaction-table {
            width: 100%;
            border-collapse: collapse;
        }

        .transaction-table th,
        .transaction-table td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 15px;
            text-align: left;
        }

        .transaction-table th {
            background-color: #f2f2f2;
            text-align: center;
        }

        .transaction-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .transaction-table tr:hover {
            background-color: #f2f2f2;
        }

        .header-title {
            font-size: 17px;
            font-weight: 700;
            margin-bottom: 3px;
        }

        .header-description {
            margin-bottom: 20px;
        }
        .status-label {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 5px;
            font-size: 12px;
            font-weight: bold;
            color: white;
        }
        .pending {
            background-color: #f16336;
        }

        .diterima {
            background-color: #009d64;
        }
        .ditolak {
            background-color: #cf0606;
        }
    </style>
    @endpush

    <section class="py-5" style="margin-top: 20px">
        <div class="container">
            <div class="mt-5 row gy-4">
                <div class="col-md-7">
                    <div class="job-card">
                        <h2 class="header-title">Lamaran Anda</h2>
                        <p class="header-description">Temukan lama pekerjaan yang anda daftar</p>
                        <table class="transaction-table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>ID Lamaran</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Posisi Pekerjaan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appliedCareers as $index => $appliedCareer)
                                <tr>
                                    <td style="text-align: center;">{{ $index + 1 }}</td>
                                    <td>{{ strtoupper('LMR-' . substr($appliedCareer->application_id, 0, 8)) }}</td>
                                    <td>{{ $appliedCareer->career->company_name }}</td>
                                    <td>{{ $appliedCareer->career->career_title }}</td>
                                    <td style="text-align: center;">
                                        @switch($appliedCareer->status)
                                            @case(30301)
                                                <span class="status-label ditolak">Ditolak</span>
                                                @break
                                            @case(30302)
                                                <span class="status-label pending">Pending</span>
                                                @break
                                            @case(30303)
                                                <span class="status-label diterima">Diterima</span>
                                                @break
                                        @endswitch
                                    </td>
                                    <td style="text-align: center;">
                                        <div class="transaction-details">
                                            <a href="#" class="btn btn-circle btn-primary" style="background-color: #009bb8; border: none;">
                                                <i class="fas fa-info-circle" style="color: white;"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="job-card">
                        <h2 class="header-title">Pekerjaan Disimpan</h2>
                        <p class="header-description">Temukan pekerjaan yang anda simpan</p>
                        <table class="transaction-table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Posis Pekerjaan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($savedJobs as $index => $savedJob)
                                <tr>
                                    <td style="text-align: center;">{{ $index + 1 }}</td>
                                    <td>{{ $savedJob->career->company_name }}</td>
                                    <td>{{ $savedJob->career->career_title }}</td>
                                    <td style="text-align: center;">
                                        <div class="transaction-details">
                                            <a href="{{ route('career.show', $savedJob->career->id) }}" class="btn btn-circle btn-primary" style="background-color: #009bb8; border: none;">
                                                <i class="fas fa-eye" style="color: white;"></i>
                                            </a>
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
</x-user-layout>
