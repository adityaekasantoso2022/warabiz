<x-admin-layout title="Edit Artikel" active="article" style="margin-top: 0;">
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
            <h3>Tambah Artikel</h3>
            <form action="{{ route('admin.articles.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>
                <div class="mb-3">
                    <label for="image_url" class="form-label">URL Gambar</label>
                    <input type="text" class="form-control" id="image_url" name="image_url" value="{{ old('image_url') }}">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <select class="form-control" id="category" name="category">
                        <option value="Keuangan">Keuangan</option>
                        <option value="Waralaba">Waralaba</option>
                        <option value="Finansial">Finansial</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="article" class="form-label">Artikel</label>
                    <textarea class="form-control" id="article" name="article">{{ old('article') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
    </section>
</x-admin-layout>
