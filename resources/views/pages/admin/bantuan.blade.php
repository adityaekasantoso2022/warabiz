<x-admin-layout title="Bantuan" active="bantuan" style="margin-top: 0;">
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

        .career-thumbnail {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
    @endpush

    <section>
        <div class="container">
            <div class="waralaba-card">
                <div class="row justify-content-center">
                    <div class="career-list">
                        <table class="career-table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Kategori</th>
                                    <th>Pesan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $index => $faq)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>{{ $faq->user->name }}</td>
                                    <td>{{ $faq->email }}</td>
                                    <td>{{ $faq->kategori_pertanyaan }}</td>
                                    <td>{{ $faq->pesan }}</td>
                                    <td>
                                        <div class="career-details d-flex justify-content-between align-items-center">
                                            <a href="{{ route('pesan.balas', $faq->id) }}" class="btn btn-circle btn-primary"
                                                style="background-color: #009bb8; border: none;">
                                                <i class="fas fa-envelope" style="color: white;"></i>
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
</x-admin-layout>