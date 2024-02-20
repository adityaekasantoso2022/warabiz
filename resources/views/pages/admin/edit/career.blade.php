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
                        <input type="file" class="form-control" id="logo_url" name="logo_url" accept="image/*">
                        @if ($career->logo_url)
                            <img src="{{ $career->logo_url }}" alt="Logo Perusahaan" class="img-thumbnail" width="100">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="image_url" class="form-label">Gambar Pekerjaan</label>
                        <input type="file" class="form-control" id="image_url" name="image_url" accept="image/*">
                        @if ($career->image_url)
                            <img src="{{ $career->image_url }}" alt="Gambar Pekerjaan" class="img-thumbnail" width="100">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="company_name" class="form-label">Nama Perusahaan</label>
                        <input type="text" class="form-control" id="company_name" name="company_name"
                            value="{{ $career->company_name }}">
                    </div>
                    <div class="mb-3">
                        <label for="min_salary" class="form-label">Gaji Minimal</label>
                        <input type="text" class="form-control" id="min_salary" name="min_salary"
                            value="{{ $career->min_salary }}">
                    </div>
                    <div class="mb-3">
                        <label for="max_salary" class="form-label">Gaji Maksimal</label>
                        <input type="text" class="form-control" id="max_salary" name="max_salary"
                            value="{{ $career->max_salary }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description"
                            rows="4">{{ $career->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="profile_company" class="form-label">Profil Perusahaan</label>
                        <textarea class="form-control" id="profile_company" name="profile_company"
                            rows="4">{{ $career->profile_company }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="work_requirements" class="form-label">Syarat & Ketentuan Pekerjaan</label>
                        <textarea class="form-control" id="work_requirements" name="work_requirements"
                            rows="4">{{ $career->work_requirements }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                </form>

            </div>
        </div>
    </section>
</x-admin-layout>
