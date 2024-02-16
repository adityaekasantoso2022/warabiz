<x-admin-layout title="Tambah Karier" active="career" style="margin-top: 0;">
    @push('addonStyle')
    <style>
        body {
            background: #dae3ec !important;
        }

        .career-card {
            background: #fff;
            border-radius: 14px;
            color: #34364a;
            padding: 30px;
            overflow-x: auto;
            overflow-y: auto;
        }

        .career-form {
            margin-top: 20px;
        }

        .career-form label {
            margin-bottom: 5px;
        }

        .career-form .form-control {
            margin-bottom: 15px;
        }

        .career-form button {
            margin-top: 15px;
        }
    </style>
    @endpush

    <section>
        <div class="container">
            <div class="career-card">
                <h3>Tambah Karier</h3>
                <form method="POST" action="{{ route('admin.careers.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="career_title" class="form-label">Judul Karier</label>
                        <input type="text" class="form-control" id="career_title" name="career_title" value="{{ old('career_title') }}">
                    </div>
                    <div class="mb-3">
                        <label for="image_url" class="form-label">Pilih Gambar</label>
                        <input type="file" class="form-control" id="image" name="image_url" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <textarea class="form-control" id="address" name="address" style="height: 100px;">{{ old('address') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" style="height: 250px;">{{ old('description') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </section>
</x-admin-layout>
