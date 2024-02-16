<x-admin-layout title="Edit Karier" active="career" style="margin-top: 0;">
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

        .form-label {
            margin-bottom: 5px;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .btn-primary {
            margin-top: 15px;
        }
    </style>
    @endpush

    <section>
        <div class="container">
            <div class="career-card">
                <h3>Edit Pekerjaan</h3>
                <form method="POST" action="{{ route('admin.careers.update', $career->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="career_title" class="form-label">Nama Pekerjaan</label>
                        <input type="text" class="form-control" id="career_title" name="career_title"
                            value="{{ $career->career_title }}">
                    </div>
                    <div class="mb-3">
                        <label for="logo_url" class="form-label">Logo Perusahaan</label>
                        <input type="text" class="form-control" id="logo_url" name="logo_url"
                            value="{{ $career->logo_url }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="image_url" class="form-label"> Gambar Perusahaan</label>
                        <input type="text" class="form-control" id="image_url" name="image_url"
                            value="{{ $career->image_url }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="address" name="address"
                            value="{{ $career->address }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description"
                            rows="4">{{ $career->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                </form>

            </div>
        </div>
    </section>
</x-admin-layout>