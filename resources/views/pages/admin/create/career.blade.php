<x-admin-layout title="Tambah Pekerjaan" active="career" style="margin-top: 0;">
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
                <h3>Tambah Pekerjaan</h3>
                <form method="POST" action="{{ route('admin.careers.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="company_name" class="form-label">Nama Perusahaan</label>
                        <input class="form-control" id="company_name" name="company_name">
                    </div>
                    <div class="mb-3">
                        <label for="logo_url" class="form-label">Logo Perusahaan</label>
                        <input type="file" class="form-control" id="logo_url" name="logo_url" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="image_url" class="form-label">Gambar Perusahaan</label>
                        <input type="file" class="form-control" id="image_url" name="image_url" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="profile_company" class="form-label">Profile Perusahaan</label>
                        <textarea class="form-control" id="profile_company" name="profile_company"
                            style="height: 100px;"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="career_title" class="form-label">Posisi Pekerjaan</label>
                        <input type="text" class="form-control" id="career_title" name="career_title">
                    </div>
                    <div class="row m-0 mt-4">
                        <div class="col-lg-6 p-0">
                            <div class="mb-3">
                                <label for="min_salary" class="form-label">Gaji Minimal</label>
                                <input type="text" class="form-control" id="min_salary" name="min_salary">
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 ps-lg-4">
                            <div class="mb-3">
                                <label for="max_salary" class="form-label">Gaji Maksimal</label>
                                <input type="text" class="form-control" id="max_salary" name="max_salary">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi Pekerjaan</label>
                        <textarea class="form-control" id="description" name="description"
                            style="height: 150px;"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="work_requirements" class="form-label">Syarat & Ketentuan</label>
                        <textarea class="form-control" id="work_requirements" name="work_requirements"
                            style="height: 150px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </section>
</x-admin-layout>
