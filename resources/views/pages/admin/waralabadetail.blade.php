<x-admin-layout title="Dashboard" active="dashboard">
    @push('addonStyle')
        <style>
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

        .waralaba-table {
            width: 100%;
            margin-top: 10px;
            border-collapse: collapse;
        }

        .waralaba-table th,
        .waralaba-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
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

        .status-label {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 5px;
            font-size: 12px;
            font-weight: bold;
            color: white;
        }

        .proses-verifikasi {
            background-color: #f16336;
        }

        .proses-pembangunan {
            background-color: #3095b5;
        }

        .persiapan-pembukaan {
            background-color: #0578ff;
        }

        .selesai {
            background-color: #009d64;
        }

        .ditolak {
            background-color: #cf0606;
        }

        .non-check-icon {
            color: #ff5151;
            font-size: 30px;
            margin-bottom: 15px;
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


    <div class="row justify-content-center">
        @if($waralaba->isEmpty())
            <div class="col-md-3">
                <div class=" text-center">
                    <div class="card-body">
                        <i class="fas fa-times-circle fa-5x non-check-icon"></i>
                        <h5>Tidak Ada Waralaba</h5>
                        <p>Lakukan Penambahan Data untuk menampilkan Waralaba disini</p>
                    </div>
                </div>
            </div>
        @else
            <div class="waralaba-list">
            <div class="search-bar mb-3 d-flex justify-content-between align-items">
                    <span><b>List Waralaba</b></span>
                    <div class="d-flex align-items-center">
                        <span>Cari Waralaba: ‎ ‎ </span>
                        <input type="text" id="searchInput" class="form-control border px-2 py-1 rounded-3 shadow-none ml-2">
                    </div>
                </div>
                <table class="waralaba-table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>ID Waralaba</th>
                            <th>Nama Waralaba</th>
                            <th>Harga Waralaba</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($waralabas as $index => $waralaba)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>TRX-{{ substr($waralaba->uuid, 2, 6) }}</td>
                                <td>{{ $waralaba->waralaba_name }}</td>
                                <td>{{ $waralaba->price->format('d-m-Y h:i:s') }}</td>
                                <td>Bank {{ $waralaba->payment_method }}</td>
                                <td>
                                    <div class="waralaba-details">
                                        <a href="{{ route('waralaba.detail', ['waralabaId' => $waralaba->uuid]) }}" class="btn btn-circle btn-primary" style="background-color: #009bb8; border: none;"><i class="fas fa-eye" style="color: white;"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-dashboard-admin-layout>
