<x-admin-layout title="Edit Artikel" active="articel" style="margin-top: 0;">
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

        .article-form {
            margin-top: 20px;
        }

        .article-form label {
            margin-bottom: 5px;
        }

        .article-form .form-control {
            margin-bottom: 15px;
        }

        .article-form button {
            margin-top: 15px;
        }
    </style>
    @endpush

    <section>
        <div class="container">
            <div class="artikel-card">
                <h3>Edit Artikel</h3>
                <form action="{{ route('admin.articles.update', $article->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="image_url" class="form-label">URL Gambar</label>
                        <input type="text" class="form-control" id="image_url" name="image_url"
                            value="{{ $article->image_url }}">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Kategori</label>
                        <select class="form-control" id="category" name="category">
                            <option value="Keuangan" {{ $article->category == 'Keuangan' ? 'selected' : '' }}>Keuangan
                            </option>
                            <option value="Waralaba" {{ $article->category == 'Waralaba' ? 'selected' : '' }}>Waralaba
                            </option>
                            <option value="Finansial" {{ $article->category == 'Finansial' ? 'selected' : ''
                                }}>Finansial</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="article" class="form-label">Artikel</label>
                        <textarea class="form-control" id="article" name="article"
                            rows="5" style="height: 250px;">{{ $article->article }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
    <script>
        function validateForm() {
            // Validasi apakah data kosong
            var title = document.getElementById("title").value;
            var image = document.getElementById("image").value;
            var category = document.getElementById("category").value;
            var article = document.getElementById("article").value;

            if (title === "" || image === "" || category === "" || article === "") {
                alert("Semua kolom harus diisi!");
                return false;
            }

            // Validasi ukuran gambar
            var imageSize = document.getElementById("image").files[0].size; // ukuran dalam byte
            var maxSize = 2 * 1024 * 1024; // 2 MB

            if (imageSize > maxSize) {
                document.getElementById("imageError").innerHTML = "Ukuran gambar tidak boleh lebih dari 2 MB";
                return false;
            }

            return true;
        }
    </script>
</x-admin-layout>
