<x-admin-layout title="Tambah Waralaba" active="waralaba" style="margin-top: 0;">
    @push('addonStyle')
    <style>
        body {
            background: #fbfbfb !important;
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
                <h3>Tambah Waralaba</h3>
                <form method="POST" action="{{ route('admin.waralaba.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="waralaba_name" class="form-label">Nama Waralaba</label>
                        <input type="text" class="form-control" id="waralaba_name" name="waralaba_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="image_url_1" class="form-label">Gambar 1</label>
                        <input type="file" class="form-control" id="image_url_1" name="image_url_1" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="image_url_2" class="form-label">Gambar 2</label>
                        <input type="file" class="form-control" id="image_url_2" name="image_url_2" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="image_url_3" class="form-label">Gambar 3</label>
                        <input type="file" class="form-control" id="image_url_3" name="image_url_3" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="image_url_4" class="form-label">Gambar 4</label>
                        <input type="file" class="form-control" id="image_url_4" name="image_url_4" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="image_url_5" class="form-label">Gambar 5</label>
                        <input type="file" class="form-control" id="image_url_5" name="image_url_5" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Kategori</label>
                        <select class="form-control" id="category_id" name="category_id" required>
                            <option value=10101>Makanan dan Minuman</option>
                            <option value=10102>Pendidikan</option>
                            <option value=10103>Ritel</option>
                            <option value=10104>Kesehatan dan Kecantikan</option>
                            <option value=10105>Otomotif</option>
                            <option value=10106>Layanan Keuangan</option>
                            <option value=10107>Teknologi dan Komunikasi</option>
                            <option value=10108>Hiburan</option>
                            <option value=10109>Penginapan dan Wisata</option>
                            <option value=10110>Layanan Bisnis</option>
                            <option value=10111>Minyak dan Gas</option>
                            <option value=10112>Penjualan Retail Berlisensi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga Waralaba</label>
                        <input type="text" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Kontak Waralaba</label>
                        <input type="text" class="form-control" id="contact" name="contact" required>
                    </div>
                    <div class="mb-3">
                        <label for="brochure_link" class="form-label">Upload Brosur</label>
                        <input type="file" class="form-control" id="brochure_link" name="brochure_link" accept="file/*" required>
                    </div>
                    <div class="mb-3">
                        <label for="since" class="form-label">Tanggal Berdiri Waralaba</label>
                        <input type="date" class="form-control" id="since" name="since" required>
                    </div>
                    <div class="mb-3">
                        <label for="outlet_total" class="form-label">Total Outlet</label>
                        <input type="text" class="form-control" id="outlet_total" name="outlet_total" required>
                    </div>
                    <div class="mb-3">
                        <label for="license_duration" class="form-label">Durasi Lisensi</label>
                        <input type="text" class="form-control" id="license_duration" name="license_duration" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi Waralaba</label>
                        <textarea class="form-control" id="description" name="description"
                            style="height: 150px;">{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="royality" class="form-label">Royality Waralaba</label>
                        <input type="number" class="form-control" id="royality" name="royality" required>
                    </div>
                    <div class="mb-3">
                        <label for="income" class="form-label">Income Waralaba</label>
                        <input type="number" class="form-control" id="income" name="income" required>
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating Waralaba</label>
                        <input type="number" class="form-control" id="rating" name="rating" required>
                    </div>
                    <div class="mb-3">
                        <label for="concept" class="form-label">Tipe Konsep</label>
                        <select class="form-control" id="concept" name="concept">
                            <option value="Franchise">Franchise</option>
                            <option value="Booth">Booth</option>
                            <option value="Restoran">Restoran</option>
                            <option value="Mini Resto">Mini Resto</option>
                            <option value="Joint Venture">Joint Venture</option>
                            <option value="Lisensi">Lisensi</option>
                            <option value="Pengelolaan Sendiri">Pengelolaan Sendiri</option>
                            <option value="Kemitraan">Kemitraan</option>
                            <option value="Konsesi">Konsesi</option>
                            <option value="Pelepasan Hak">Pelepasan Hak</option>
                            <option value="Pengelolaan Waralaba">Pengelolaan Waralaba</option>
                            <option value="Konsinyasi">Konsinyasi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="concept_size" class="form-label">Ukuran Konsep</label>
                        <input type="text" class="form-control" id="concept_size" name="concept_size">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </section>
</x-admin-layout>
