<x-owner-layout title="Tambah Pekerjaan" active="career" style="margin-top: 0;">
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
                <form method="POST" action="{{ route('owner.careers.store') }}" enctype="multipart/form-data">
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
                        <textarea id="profile_company" name="profile_company" rows="5" cols="30"
                            class="form-control tinymce-editor"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="career_title" class="form-label">Posisi Pekerjaan</label>
                        <input type="text" class="form-control" id="career_title" name="career_title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi Pekerjaan</label>
                        <textarea id="description" name="description" rows="5" cols="30"
                            class="form-control tinymce-editor"></textarea>
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

                    <script>
                        // Fungsi untuk mengubah nilai input menjadi format mata uang Rupiah
                        function formatRupiah(input) {
                            var value = input.value;

                            // Hapus karakter non-digit
                            value = value.replace(/[^\d]/g, '');

                            // Format menjadi mata uang Rupiah
                            value = 'Rp. ' + new Intl.NumberFormat('id-ID').format(value);

                            // Tampilkan nilai yang sudah diformat
                            input.value = value;
                        }

                        // Event listener untuk memanggil fungsi formatRupiah saat input diubah
                        document.getElementById('min_salary').addEventListener('input', function (e) {
                            formatRupiah(e.target);
                        });

                        document.getElementById('max_salary').addEventListener('input', function (e) {
                            formatRupiah(e.target);
                        });
                    </script>
                    <div class="mb-3">
                        <label for="work_requirements" class="form-label">Syarat & Ketentuan</label>
                        <textarea id="work_requirements" name="work_requirements" rows="5" cols="30"
                            class="form-control tinymce-editor"></textarea>
                    </div>
                    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
                        type="text/javascript"></script>
                    <script
                        src="https://cdn.tiny.cloud/1/e6lfcgsxma4viss20i5oitxdkrt8oyovotn6tknfg1qmum2p/tinymce/5/tinymce.min.js"
                        referrerpolicy="origin"></script>
                    <script type="text/javascript">
                        tinymce.init({
                            selector: 'textarea.tinymce-editor',
                            height: 300,
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
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </section>
</x-owner-layout>