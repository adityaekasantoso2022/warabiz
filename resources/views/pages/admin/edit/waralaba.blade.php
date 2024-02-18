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
                <form method="POST" action="{{ route('admin.waralaba.update', $waralaba->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="waralaba_name" class="form-label">Nama Waralaba</label>
                        <input type="text" class="form-control" id="waralaba_name" name="waralaba_name" value="{{ $waralaba->waralaba_name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
                        @if ($waralaba->logo)
                            <img src="{{ $waralaba->logo }}" alt="Logo Waralaba" class="img-thumbnail" width="100">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="image_url_1" class="form-label">Gambar 1</label>
                        <input type="file" class="form-control" id="image_url_1" name="image_url_1" accept="image/*">
                        @if ($waralaba->image_url_1)
                            <img src="{{ $waralaba->image_url_1 }}" alt="Gambar 1 Waralaba" class="img-thumbnail" width="100">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="image_url_2" class="form-label">Gambar 1</label>
                        <input type="file" class="form-control" id="image_url_2" name="image_url_2" accept="image/*">
                        @if ($waralaba->image_url_2)
                            <img src="{{ $waralaba->image_url_2 }}" alt="Gambar 2 Waralaba" class="img-thumbnail" width="100">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="image_url_3" class="form-label">Gambar 1</label>
                        <input type="file" class="form-control" id="image_url_3" name="image_url_3" accept="image/*">
                        @if ($waralaba->image_url_3)
                            <img src="{{ $waralaba->image_url_3 }}" alt="Gambar 3 Waralaba" class="img-thumbnail" width="100">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="image_url_4" class="form-label">Gambar 4</label>
                        <input type="file" class="form-control" id="image_url_4" name="image_url_4" accept="image/*">
                        @if ($waralaba->image_url_4)
                            <img src="{{ $waralaba->image_url_4 }}" alt="Gambar 4 Waralaba" class="img-thumbnail" width="100">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="image_url_5" class="form-label">Gambar 5</label>
                        <input type="file" class="form-control" id="image_url_5" name="image_url_5" accept="image/*">
                        @if ($waralaba->image_url_5)
                            <img src="{{ $waralaba->image_url_5 }}" alt="Gambar 5 Waralaba" class="img-thumbnail" width="100">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Kategori</label>
                        <select class="form-control" id="category_id" name="category_id" required>
                            <option value=10101 {{ $waralaba->category_id == 10101 ? 'selected' : '' }}>Makanan dan Minuman</option>
                            <option value=10102 {{ $waralaba->category_id == 10102 ? 'selected' : '' }}>Pendidikan</option>
                            <option value=10103 {{ $waralaba->category_id == 10103 ? 'selected' : '' }}>Ritel</option>
                            <option value=10104 {{ $waralaba->category_id == 10104 ? 'selected' : '' }}>Kesehatan dan Kecantikan</option>
                            <option value=10105 {{ $waralaba->category_id == 10105 ? 'selected' : '' }}>Otomotif</option>
                            <option value=10106 {{ $waralaba->category_id == 10106 ? 'selected' : '' }}>Layanan Keuangan</option>
                            <option value=10107 {{ $waralaba->category_id == 10107 ? 'selected' : '' }}>Teknologi dan Komunikasi</option>
                            <option value=10108 {{ $waralaba->category_id == 10108 ? 'selected' : '' }}>Hiburan</option>
                            <option value=10109 {{ $waralaba->category_id == 10109 ? 'selected' : '' }}>Penginapan dan Wisata</option>
                            <option value=10110 {{ $waralaba->category_id == 10110 ? 'selected' : '' }}>Layanan Bisnis</option>
                            <option value=10111 {{ $waralaba->category_id == 10111 ? 'selected' : '' }}>Minyak dan Gas</option>
                            <option value=10112 {{ $waralaba->category_id == 10112 ? 'selected' : '' }}>Penjualan Retail Berlisensi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga Waralaba</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $waralaba->price }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Kontak Waralaba</label>
                        <input type="text" class="form-control" id="contact" name="contact" value="{{ $waralaba->contact }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="brochure_link" class="form-label">Upload Brosur</label>
                        <input type="file" class="form-control" id="brochure_link" name="brochure_link" accept="file/*">
                        @if ($waralaba->brochure_link)
                            <a href="{{ $waralaba->brochure_link }}" target="_blank" rel="noopener noreferrer">Lihat Brosur</a>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="since" class="form-label">Tanggal Berdiri Waralaba</label>
                        <input type="date" class="form-control" id="since" name="since" value="{{ $waralaba->since }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="outlet_total" class="form-label">Total Outlet</label>
                        <input type="text" class="form-control" id="outlet_total" name="outlet_total" value="{{ $waralaba->outlet_total }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="license_duration" class="form-label">Durasi Lisensi</label>
                        <input type="text" class="form-control" id="license_duration" name="license_duration" value="{{ $waralaba->license_duration }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi Waralaba</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $waralaba->description }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="royality" class="form-label">Royalty Waralaba</label>
                        <input type="number" class="form-control" id="royality" name="royality" value="{{ $waralaba->royality }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="income" class="form-label">Income Waralaba</label>
                        <input type="number" class="form-control" id="income" name="income" value="{{ $waralaba->income }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating Waralaba</label>
                        <input type="number" class="form-control" id="rating" name="rating" value="{{ $waralaba->rating }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="concept" class="form-label">Tipe Konsep</label>
                        <select class="form-control" id="concept" name="concept">
                            <option value="Franchise" {{ $waralaba->concept == 'Franchise' ? 'selected' : '' }}>Franchise</option>
                            <option value="Booth" {{ $waralaba->concept == 'Booth' ? 'selected' : '' }}>Booth</option>
                            <option value="Restoran" {{ $waralaba->concept == 'Restoran' ? 'selected' : '' }}>Restoran</option>
                            <option value="Mini Resto" {{ $waralaba->concept == 'Mini Resto' ? 'selected' : '' }}>Mini Resto</option>
                            <option value="Joint Venture" {{ $waralaba->concept == 'Joint Venture' ? 'selected' : '' }}>Joint Venture</option>
                            <option value="Lisensi" {{ $waralaba->concept == 'Lisensi' ? 'selected' : '' }}>Lisensi</option>
                            <option value="Pengelolaan Sendiri" {{ $waralaba->concept == 'Pengelolaan Sendiri' ? 'selected' : '' }}>Pengelolaan Sendiri</option>
                            <option value="Kemitraan" {{ $waralaba->concept == 'Kemitraan' ? 'selected' : '' }}>Kemitraan</option>
                            <option value="Konsesi" {{ $waralaba->concept == 'Konsesi' ? 'selected' : '' }}>Konsesi</option>
                            <option value="Pelepasan Hak" {{ $waralaba->concept == 'Pelepasan Hak' ? 'selected' : '' }}>Pelepasan Hak</option>
                            <option value="Pengelolaan Waralaba" {{ $waralaba->concept == 'Pengelolaaan Waralaba' ? 'selected' : '' }}>Pengelolaan Waralaba</option>
                            <option value="Konsinyasi" {{ $waralaba->concept == 'Konsinyasi' ? 'selected' : '' }}>Konsinyasi</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="concept_size" class="form-label">Ukuran Konsep</label>
                        <input type="text" class="form-control" id="concept_size" name="concept_size" value="{{ $waralaba->concept_size }}">
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
