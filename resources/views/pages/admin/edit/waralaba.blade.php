<x-admin-layout title="Edit Waralaba" active="waralaba" style="margin-top: 0;">
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

        .waralaba-form {
            margin-top: 20px;
        }

        .waralaba-form label {
            margin-bottom: 5px;
        }

        .waralaba-form .form-control {
            margin-bottom: 15px;
        }

        .waralaba-form button {
            margin-top: 15px;
        }
    </style>
    @endpush

    <section>
        <div class="container">
            <div class="waralaba-card">
                <h3>Edit Waralaba</h3>
                <form action="{{ route('admin.waralabas.update', $waralaba->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $waralaba->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="image_url" class="form-label">URL Gambar</label>
                        <input type="text" class="form-control" id="image_url" name="image_url"
                            value="{{ $waralaba->image_url }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Kategori</label>
                        <select class="form-control" id="category" name="category">
                            <option value="Keuangan" {{ $waralaba->category == 'Keuangan' ? 'selected' : '' }}>Keuangan
                            </option>
                            <option value="Waralaba" {{ $waralaba->category == 'Waralaba' ? 'selected' : '' }}>Waralaba
                            </option>
                            <option value="Finansial" {{ $waralaba->category == 'Finansial' ? 'selected' : ''
                                }}>Finansial</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="waralaba" class="form-label">Waralaba</label>
                        <textarea class="form-control" id="waralaba" name="waralaba"
                            rows="5" style="height: 250px;">{{ $waralaba->waralaba }}</textarea>
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
            var waralaba = document.getElementById("waralaba").value;

            if (title === "" || image === "" || category === "" || waralaba === "") {
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
