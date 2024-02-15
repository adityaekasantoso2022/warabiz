<x-admin-layout title="Artikel" active="articel" style="margin-top: 0;">
    @push('addonStyle')
    <style>
        body {
            background: #dae3ec !important;
        }

        .artikel-card {
            background: #fff;
            border-radius: 14px;
            color: #34364a;
            padding: 30px;
            overflow-x: auto;
            overflow-y: auto;
        }

        .article-table {
            width: 100%;
            border-collapse: collapse;
        }

        .article-table th,
        .article-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left; /* Tetap rata kiri */
        }

        .article-table th {
            background-color: #f2f2f2;
        }

        .article-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .article-table tr:hover {
            background-color: #f2f2f2;
        }

        .article-thumbnail {
            max-width: 100px;
            max-height: 100px;
        }

        .add-article-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .edit-article-icon,
        .delete-article-icon {
            font-size: 18px;
            margin-right: 5px;
            cursor: pointer;
        }

        .edit-article-icon:hover,
        .delete-article-icon:hover {
            filter: brightness(0.8);
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

    </style>
    @endpush
    <section>
        <div class="container">
            <div class="artikel-card">
            <div class="row">
                    <div class="col-md-6">
                        <h3>Daftar Artikel</h3>
                    </div>
                    <div class="col-md-6 text-end">
                        <button class="btn btn-primary">Tambah Artikel</button>
                    </div>

                </div>
                <div class="row justify-content-center">
                    <div class="transaction-list">
                        <div class="search-bar mb-3 d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <span>Cari Artikel: ‎ ‎ </span>
                                <input type="text" id="searchInput"
                                    class="form-control border px-2 py-1 rounded-3 shadow-none ml-2">
                            </div>
                        </div>
                        <table class="article-table">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Gambar</th>
                                    <th class="text-center">Judul</th>
                                    <th class="text-center">Konten</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="{{ asset('path_to_thumbnail_image.jpg') }}" alt="Thumbnail"
                                            class="article-thumbnail"></td>
                                    <td>Disini adalah judul artikel yang sangan menarik</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.</td>
                                    <td>
                                    <div class="artikel-action">
                                            <a href="#" class="btn btn-circle btn-warning"
                                                style="background-color: #FFC107; border: none;"><i class="fas fa-edit"
                                                    style="color: white;"></i></a>
                                            <a href="#" class="btn btn-circle btn-danger"
                                                style="background-color: #F44336; border: none;"><i
                                                    class="fas fa-trash-alt" style="color: white;"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Tambahkan baris untuk artikel lain di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
