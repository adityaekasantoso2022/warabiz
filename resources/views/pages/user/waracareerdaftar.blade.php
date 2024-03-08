<x-user-layout title="Daftar Pekerjaan" active="waracareer">
    @push('addonStyle')
    <style>
    body {
        background: #fbfbfb !important;
    }

    .navbar .navbar-nav a:hover.btn-signup {
        color: white !important;
    }

    .navbar .navbar-nav a:hover {
        color: #131313 !important;
    }

    .navbar .navbar-nav .active {
        color: #131313 !important;
    }

    .profil-name {
        color: #131313
    }

    .navbar-expand-lg {
        background-color: white !important;
        box-shadow: -1.5px 4px 16px rgb(118 126 148 / 20%);
        transition: background-color 200ms linear;
    }

    .header-primary {
        color: #34364a;
        font-size: 38px;
        font-weight: 700;
        line-height: 48px;
    }

    .course-card {
        background: #fff;
        border: none;
        border-radius: 14px;
        box-sizing: border-box;
        color: #34364a;
        display: flex;
        flex-direction: column;
        padding: 30px;
        position: relative;
        width: 100%;
        max-width: 100%;
    }

    .form-label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .centered-card {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px 20px;
        /* padding top and bottom 30px, left and right 20px */
    }

    .form-group {
        margin-bottom: 10px;
    }

    .buttons-container {
        display: flex;
        justify-content: flex-end;
    }

    .register-now {
        background-color: #1ab059;
        color: #fff;
        width: 100%;
        cursor: pointer;
        border: 0;
        border-radius: 30px;
        margin-top: 20px;
        margin-bottom: 10px;
        font-size: 14px;
        padding: 10px;
        height: 50px;
        max-width: 150px;
    }

    .form-check-input {
        border: 1px solid #ccc;
        border-radius: 1px;
        margin-right: 5px;
        box-shadow: 0 0 0 2px #fff, 0 0 0 3px #ccc;
    }
    .register-now:disabled {
        opacity: 0.6;
        cursor: not-allowed; 
    }

    @media (max-width: 768px) {
        .centered-card {
            margin-top: 0px;
        }
    }
    </style>
    @endpush
    <section class="py-5" style="margin-top: 50px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="centered-card">
                    <div class="course-card">
                        <h4 class="header-title mb-1">
                            <b>Lamaran Pekerjaan</b>
                        </h4>
                        <form id="myForm" action="{{ route('careerJob.store') }}" enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            <div class="row m-0 mt-4">
                                <div class="col-lg-6 p-0">
                                    <div class="form-group">
                                        <label for="full_name" class="form-label fw-bold">
                                            <p>Nama Lengkap <span style="color: red;">*</span></p>
                                        </label>
                                        <input type="text" name="full_name" id="full_name"
                                            class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                                        <p class="text-sm text-secondary mt-2">Masukan nama lengkap sesuai KTP</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0 ps-lg-4">
                                    <div class="form-group">
                                        <label for="gender" class="form-label fw-bold">
                                            <p>Jenis Kelamin <span style="color: red;">*</span></p>
                                        </label>
                                        <select name="gender" id="gender"
                                            class="form-select border px-2 py-1 rounded-3 shadow-none" required>
                                            <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <p class="text-sm text-secondary mt-2">Pilih jenis kelamin Anda</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-0 mt-4">
                                <div class="col-lg-6 p-0">
                                    <div class="form-group">
                                        <label for="date_of_birth" class="form-label fw-bold">
                                            <p>Tanggal Lahir <span style="color: red;">*</span></p>
                                        </label>
                                        <input type="date" name="date_of_birth" id="date_of_birth"
                                            class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                                        <p class="text-sm text-secondary mt-2">Contoh: 28/01/1997</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0 ps-lg-4">
                                    <div class="form-group">
                                        <label for="religion" class="form-label fw-bold">
                                            <p>Agama <span style="color: red;">*</span></p>
                                        </label>
                                        <select name="religion" id="religion"
                                            class="form-select border px-2 py-1 rounded-3 shadow-none" required>
                                            <option value="" selected disabled>Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                        <p class="text-sm text-secondary mt-2">Pilih agama Anda</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-0 mt-4">
                                <div class="col-lg-6 p-0">
                                    <div class="form-group">
                                        <label for="email" class="form-label fw-bold">
                                            <p>Alamat Email<span style="color: red;">*</span></p>
                                        </label>
                                        <input type="email" name="email" id="email"
                                            class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                                        <p class="text-sm text-secondary mt-2">Masukan alamat email</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0 ps-lg-4">
                                    <div class="form-group">
                                        <label for="phone_number" class="form-label fw-bold">
                                            <p>Nomor Telepon <span style="color: red;">*</span></p>
                                        </label>
                                        <input type="number" name="phone_number" id="phone_number"
                                            class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                                        <p class="text-sm text-secondary mt-2">Contoh: 08123456789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="margin-top: 12px;">
                                <label for="address" class="form-label fw-bold">
                                    <p>Alamat Rumah <span style="color: red;">*</span></p>
                                </label>
                                <textarea name="address" id="address"
                                    class="form-control border px-2 py-1 rounded-3 shadow-none" required></textarea>
                                <p class="text-sm text-secondary mt-2">Masukan tempat tinggal sekarang</p>
                            </div>
                            <div class="row m-0 mt-4">
                                <div class="col-lg-6 p-0">
                                    <div class="form-group">
                                        <label for="last_education" class="form-label fw-bold">
                                            <p>Pendidikan Terakhir <span style="color: red;">*</span></p>
                                        </label>
                                        <select name="last_education" id="last_education"
                                            class="form-select border px-2 py-1 rounded-3 shadow-none" required>
                                            <option value="" selected disabled>Pilih Pendidikan Terakhir</option>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA/SMK">SMA/SMK</option>
                                            <option value="Diploma">Diploma</option>
                                            <option value="Sarjana">Sarjana</option>
                                            <option value="Magister">Magister</option>
                                            <option value="Doktor">Doktor</option>
                                        </select>
                                        <p class="text-sm text-secondary mt-2">Pilih pendidikan terakhir Anda</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0 ps-lg-4">
                                    <div class="form-group">
                                        <label for="portfolio_url" class="form-label fw-bold">
                                            <p>CV/Portofolio <span style="color: red;">*</span></p>
                                        </label>
                                        <input type="file" name="portfolio_url" id="portfolio_url"
                                            class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                                        <p class="text-sm text-secondary mt-2">Max. ukuran file 2 MB dalam format PDF
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="margin-top: 12px;">
                                <label for="work_experience" class="form-label fw-bold">
                                    <p>Pengalaman Kerja</p>
                                </label>
                                <textarea name="work_experience" id="work_experience"
                                    class="form-control border px-2 py-1 rounded-3 shadow-none"
                                    style="height: 100px;"></textarea>
                                <p class="text-sm text-secondary mt-2">Pengalaman kerja opsional</p>
                            </div>
                            <!-- Input tersembunyi untuk user_id dan career_id -->
                            <input type="hidden" name="career_id" value="{{ $career->id }}">
                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                            <div class="form-group" style="margin-top: 12px;">
                                <label for="pernyataan" class="form-label fw-bold">
                                    <p>Pernyataan <span style="color: red;">*</span></p>
                                </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="pernyataan" required>
                                    <label class="form-check-label" for="pernyataan">
                                        Saya menyatakan bahwa data yang saya berikan adalah benar dan akurat dan dapat
                                        dipertanggung jawabakan.
                                    </label>
                                </div>
                            </div>
                            <div class="buttons-container">
                                <button class="register-now" id="submitButton" disabled>Kirim</button>
                            </div>

                            <script>
                            document.getElementById('pernyataan').addEventListener('change', function() {
                                var button = document.getElementById('submitButton');
                                button.disabled = !this.checked;
                            });
                            </script>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        var pernyataanCheckbox = document.getElementById('pernyataan');

        if (!pernyataanCheckbox.checked) {
            alert('Anda harus menyetujui pernyataan sebelum mengirim formulir.');
            event.preventDefault(); // Mencegah formulir dikirimkan jika checkbox tidak dicentang
        }
    });
    </script>
</x-user-layout>