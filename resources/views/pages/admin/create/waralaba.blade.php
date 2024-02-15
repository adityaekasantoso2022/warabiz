<x-admin-layout title="Tambah Waralaba" active="waralaba" style="margin-top: 0;">
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
                <h3>Tambah Waralaba</h3>
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="waralaba_name" class="form-label">Nama Waralaba</label>
                        <input type="text" class="form-control" id="waralaba_name" name="waralaba_name">
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <input type="file" class="form-control" id="logo" name="logo">
                    </div>
                    <div class="mb-3">
                        <label for="concept" class="form-label">Tipe</label>
                        <select class="form-control" id="concept" name="concept">
                            <option value="Franchise">Franchise</option>
                            <option value="Joint Venture">Joint Venture</option>
                            <option value="Lisensi">Lisensi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </section>
</x-admin-layout>
