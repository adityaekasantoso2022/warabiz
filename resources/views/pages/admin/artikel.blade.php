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
            text-align: left;
            /* Tetap rata kiri */
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
                        <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">Tambah Artikel</a>
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
                                    <th class="text-center">Kategori</th>
                                    <th class="text-center">Konten</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($articles as $index => $article)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td><img src="{{ asset($article->image_url) }}" alt="Thumbnail"
                                            class="article-thumbnail"></td>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ $article->category }}</td>
                                    <td>{{ Str::limit($article->article, 135) }}</td>
                                    <td>
                                        <div class="artikel-action d-flex justify-content-between align-items-center">
                                            <a href="{{ route('admin.articles.edit', $article->id) }}"
                                                class="btn btn-circle btn-warning"
                                                style="background-color: #FFC107; border: none;">
                                                <i class="fas fa-edit" style="color: white;"></i>
                                            </a>
                                            <span style="width: 5px;"></span>
                                            <form action="{{ route('admin.articles.destroy', $article->id) }}"
                                                method="POST">
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
            var input, filter, table, tr, tdTitle, tdCategory, tdContent, i, txtValueTitle, txtValueCategory, txtValueContent;
            input = this;
            filter = input.value.toUpperCase();
            table = document.querySelector(".article-table");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                tdTitle = tr[i].getElementsByTagName("td")[2]; // Kolom untuk judul artikel
                tdCategory = tr[i].getElementsByTagName("td")[3]; // Kolom untuk kategori artikel
                tdContent = tr[i].getElementsByTagName("td")[4]; // Kolom untuk konten artikel
                if (tdTitle || tdCategory || tdContent) {
                    txtValueTitle = tdTitle.textContent || tdTitle.innerText;
                    txtValueCategory = tdCategory.textContent || tdCategory.innerText;
                    txtValueContent = tdContent.textContent || tdContent.innerText;
                    if (txtValueTitle.toUpperCase().indexOf(filter) > -1 || txtValueCategory.toUpperCase().indexOf(filter) > -1 || txtValueContent.toUpperCase().indexOf(filter) > -1) {
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