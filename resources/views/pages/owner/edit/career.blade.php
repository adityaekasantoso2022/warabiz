<x-owner-layout title="Edit Karier" active="career" style="margin-top: 0;">
    @push('addonStyle')
    <style>
        body {
            background: #EDF2F7 !important;
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
                <form method="POST" action="{{ route('owner.careers.update', $career->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="company_name" class="form-label">Nama Perusahaan</label>
                        <input type="text" class="form-control" id="company_name" name="company_name"
                            value="{{ $career->company_name }}">
                    </div>
                    <div class="mb-3">
                        <label for="logo_url" class="form-label">Logo Perusahaan</label>
                        <input type="file" class="form-control" id="logo_url" name="logo_url" accept="image/*">
                        @if ($career->logo_url)
                        <img src="{{ $career->logo_url }}" alt="Logo Perusahaan" class="img-thumbnail" width="100">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="image_url" class="form-label">Gambar Perusahaan</label>
                        <input type="file" class="form-control" id="image_url" name="image_url" accept="image/*">
                        @if ($career->image_url)
                        <img src="{{ $career->image_url }}" alt="Logo Perusahaan" class="img-thumbnail" width="100">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="profile_company" class="form-label">Profile Perusahaan</label>
                        <textarea id="profile_company" name="profile_company" rows="5" cols="30"
                            class="form-control tinymce-editor">{{ $career->profile_company }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="career_title" class="form-label">Posisi Pekerjaan</label>
                        <input type="text" class="form-control" id="career_title" name="career_title"
                            value="{{ $career->career_title }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi Pekerjaan</label>
                        <textarea id="description" name="description" rows="5" cols="30"
                            class="form-control tinymce-editor">{{ $career->description }}</textarea>
                    </div>
                    <div class="row m-0 mt-4">
                        <div class="col-lg-6 p-0">
                            <div class="mb-3">
                                <label for="min_salary" class="form-label">Gaji Minimal (Opsional)</label>
                                <input type="text" class="form-control" id="min_salary"value="{{ $career->min_salary }}" name="min_salary"
                                    onkeyup="formatRupiah(this)">
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 ps-lg-4">
                            <div class="mb-3">
                                <label for="max_salary" class="form-label">Gaji Maksimal(Opsional)</label>
                                <input type="text" class="form-control" id="max_salary" value="{{ $career->max_salary }}" name="max_salary"
                                    onkeyup="formatRupiah(this)">
                            </div>
                        </div>
                    </div>

                    <script>
                        // Fungsi untuk mengubah nilai input menjadi format mata uang Rupiah
                        function formatRupiah(input) {
                            var value = input.value;

                            // Hapus tanda titik dan koma
                            value = value.replace(/[^\d]/g, '');

                            // Format Rupiah dengan tanda titik
                            value = formatNumber(value);

                            // Tampilkan nilai yang sudah diformat
                            input.value = "Rp. " + value;
                        }

                        // Fungsi untuk format angka dengan tanda titik
                        function formatNumber(num) {
                            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
                        }

                        // Fungsi untuk menghapus tanda titik saat form disubmit
                        document.querySelector('form').addEventListener('submit', function () {
                            var minInput = document.getElementById('min_salary');
                            var maxInput = document.getElementById('max_salary');
                            minInput.value = minInput.value.replace(/[^\d]/g, '');
                            maxInput.value = maxInput.value.replace(/[^\d]/g, '');
                        });
                    </script>
                    <div class="mb-3">
                        <label for="work_requirements" class="form-label">Syarat & Ketentuan Pekerjaan</label>
                        <textarea id="work_requirements" name="work_requirements" rows="5" cols="30"
                            class="form-control tinymce-editor">{{ $career->work_requirements }}</textarea>
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
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                </form>

            </div>
        </div>
    </section>
</x-owner-layout>