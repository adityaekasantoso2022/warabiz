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

        .status-label {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 5px;
            font-size: 12px;
            font-weight: bold;
            color: white;
        }

        .proses-verifikasi {
            background-color: #138EE6;
        }

        .proses-pembangunan {
            background-color: #DECF4D;
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
        .pending {
            background-color: #f16336;
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
    <section class="py-5" style="margin-top: 10px">
        <div class="container">
            <div class="mt-5 row pricing testimonials mentors checkout gy-4" id="reviews">
                <div class="bantuan-card">
                    <!-- Display job applications -->
                    <h2>Job Applications</h2>
                    <table class="transaction-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <!-- Add more table headers as needed -->
                                <th>Job Title</th>
                                <th>Company Name</th>
                                <th>Application Date</th>
                                <!-- Add more headers as needed -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appliedCareers as $index => $appliedCareer)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <!-- Replace these with actual attributes from your JobApplication model -->
                                    <td>{{ $appliedCareer->job_title }}</td>
                                    <td>{{ $appliedCareer->company_name }}</td>
                                    <td>{{ $appliedCareer->created_at->format('d-m-Y H:i:s') }}</td>
                                    <!-- Add more cells with actual attributes -->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Display saved jobs -->
                    <h2>Saved Jobs</h2>
                    <table class="transaction-table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <!-- Add more table headers as needed -->
                                <th>Saved Job Title</th>
                                <th>Saved Company Name</th>
                                <th>Saved Date</th>
                                <!-- Add more headers as needed -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($savedJobs as $index => $savedJob)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $savedJob->career->career_title }}</td>
                                    <td>{{ $savedJob->career->company_name }}</td>
                                    <td>{{ $savedJob->created_at->format('d-m-Y H:i:s') }}</td>
                                    <!-- Add more cells with actual attributes -->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-user-layout>
