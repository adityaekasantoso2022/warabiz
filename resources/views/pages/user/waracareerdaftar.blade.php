<x-user-layout title="Checkout" active="checkout">
    @push('addonStyle')
    <style>
        body {
            background: #dae3ec !important;
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
                        <form id="myForm" action="{{ route('transaction') }}" method="POST">
                            @csrf
                            <div class="row m-0 mt-4">
                                <div class="col-lg-6 p-0">
                                    <div class="form-group">
                                        <label for="name" class="form-label fw-bold">
                                            <p>Nama Lengkap <span style="color: red;">*</span></p>
                                        </label>
                                        <input type="text" name="name" id="name"
                                            class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                                        <p class="text-sm text-secondary mt-2">Masukan nama lengkap sesuai KTP</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0 ps-lg-4">
                                    <div class="form-group">
                                        <label for="birthday" class="form-label fw-bold">
                                            <p>Tanggal Lahir <span style="color: red;">*</span></p>
                                        </label>
                                        <input type="date" name="birthday" id="birthday"
                                            class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                                        <p class="text-sm text-secondary mt-2">Contoh: 28/01/1997</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-0 mt-4">
                                <div class="col-lg-6 p-0">
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
                                        <label for="name" class="form-label fw-bold">
                                            <p>Nomor KTP <span style="color: red;">*</span></p>
                                        </label>
                                        <input type="number" name="name" id="name"
                                            class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                                        <p class="text-sm text-secondary mt-2">Masukan nomor KTP</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-0 ps-lg-4">
                                    <div class="form-group">
                                        <label for="telepon" class="form-label fw-bold">
                                            <p>Nomor Telepon <span style="color: red;">*</span></p>
                                        </label>
                                        <input type="number" name="telepon" id="telepon"
                                            class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                                        <p class="text-sm text-secondary mt-2">Contoh: 08123456789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="margin-top: 12px;">
                                <label for="adress" class="form-label fw-bold">
                                    <p>Alamat Rumah <span style="color: red;">*</span></p>
                                </label>
                                <textarea name="adress" id="adress"
                                    class="form-control border px-2 py-1 rounded-3 shadow-none" required></textarea>
                                <p class="text-sm text-secondary mt-2">Masukan tempat tinggal sekarang</p>
                            </div>
                            <div class="row m-0 mt-4">
                                <div class="col-lg-6 p-0">
                                    <div class="form-group">
                                        <label for="pendidikan_terakhir" class="form-label fw-bold">
                                            <p>Pendidikan Terakhir <span style="color: red;">*</span></p>
                                        </label>
                                        <select name="pendidikan_terakhir" id="pendidikan_terakhir"
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
                                        <label for="portofolio" class="form-label fw-bold">
                                            <p>CV/Portofolio <span style="color: red;">*</span></p>
                                        </label>
                                        <input type="file" name="portofolio" id="portofolio"
                                            class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                                        <p class="text-sm text-secondary mt-2">Max. ukuran file 2 MB dalam format PDF
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="margin-top: 12px;">
                                <label for="pengalaman" class="form-label fw-bold">
                                    <p>Pengalaman Kerja</p>
                                </label>
                                <textarea name="pengalaman" id="pengalaman"
                                    class="form-control border px-2 py-1 rounded-3 shadow-none"
                                    style="height: 100px;"></textarea>
                                <p class="text-sm text-secondary mt-2">Pengalaman kerja opsional</p>
                            </div>
                            <div class="form-group" style="margin-top: 12px;">
                                <label for="pernyataan" class="form-label fw-bold">
                                    <p>Pernyataan <span style="color: red;">*</span></p>
                                </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="pernyataan" required>
                                    <label class="form-check-label" for="pernyataan">
                                        Saya menyatakan bahwa data yang saya berikan adalah benar dan akurat dan dapat dipertanggung jawabakan.
                                    </label>
                                </div>
                            </div>

                        </form>
                        <div class="buttons-container">
                            <button class="register-now">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-user-layout>