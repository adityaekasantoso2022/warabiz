<x-admin-layout title="Tambah Artikel" active="articel" style="margin-top: 0;">
    @push('addonStyle')
    <style>
        body {
            background: #FEFEFE !important;
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
                <form method="POST" action="{{ route('admin.articles.store') }}" enctype="multipart/form-data"
                    onsubmit="return validateForm()">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Pilih Gambar</label>
                        <input type="file" class="form-control" id="image" name="image_url" accept="image/*">
                        <small class="form-text text-muted">Format: PNG, JPG, JPEG | Maks 2MB</small>
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
                        <textarea id="article" name="article" rows="5" cols="40"
                            class="form-control tinymce-editor">{{ old('article') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </section>
</x-admin-layout>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdn.tiny.cloud/1/e6lfcgsxma4viss20i5oitxdkrt8oyovotn6tknfg1qmum2p/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
<script type="text/javascript">
    tinymce.init({
        selector: 'textarea.tinymce-editor',
        height: 400,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        content_css: '//www.tiny.cloud/css/codepen.min.css'
    });
</script>

<script>
    function validateForm() {
        // Validasi apakah data kosong
        var title = document.getElementById("title").value;
        var image = document.getElementById("image").value;
        var category = document.getElementById("category").value;
        var article = tinyMCE.get('article').getContent();

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