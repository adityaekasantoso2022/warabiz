<x-user-layout title="Warabiz-Warapartner" active="warapartner">
    @push('addonStyle')
    <style>
    body {
        background: #FEFEFE !important;
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
        color: #131313;
    }

    .bgTheme {
        background: #4F94D7 !important;
    }

    .navbar .btn-signup,
    .navbar-expand-lg .login {
        border-radius: 12px;
        padding: 7.6px 32px 8px 32px;
        color: white;
    }

    .hero h1 {
        font-weight: 500 !important;
        letter-spacing: 1px;
        line-height: 150%;
    }

    .nav-pills .nav-link.active {
        background-color: #3ECAB0;
        box-shadow: 0 0 3px #3ECAB0;
    }

    .nav-pills .nav-link {
        background-color: #0A2048;
        border: 0;
        border-radius: 0.25rem;
        color: rgba(255, 255, 255, 0.6);
    }

    .navbar-expand-lg {
        background-color: white !important;
        box-shadow: -1.5px 4px 16px rgb(118 126 148 / 20%);
        transition: background-color 200ms linear;
    }

    .warapartner-card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        padding: 50px;
        margin: auto;
        margin-top: 40px;
        margin-bottom: 80px;
        max-width: 840px;
        width: 100%;

    }

    @media (min-width: 992px) {
        .warapartner-card {
            margin-top: 210px !important;
        }
    }


    /*bwa */
    .header-title {
        color: #34364a;
        font-weight: 700;
        font-size: 28px;
        line-height: 46px
    }

    .custom-color {
        background-color: #4594A7;
    }

    .subtitle {
        font-size: 18px;
        color: #34364a;
        line-height: 32px
    }

    #hero-section .btn-free-warapartner,
    #testimonial-section-v3 .btn-free-warapartner {
        margin-right: 14px
    }

    .text-primary-green {
        color: #47bb8e !important
    }

    @media (max-width: 768px) {
        .warapartner-card {
            padding: 30px;
        }

        .mt-md-5 {
            margin-top: 0 !important;
        }

        .col-lg-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-free-warapartner {
            margin-bottom: 10px;
        }
    }

    .in-progress-icon {
        color: #FFBD13;
        font-size: 40px;
        margin-bottom: 15px;
    }

    .non-check-icon {
        color: #FF5151;
        font-size: 40px;
        margin-bottom: 15px;
    }

    .border {
        border: 1px solid #ccc;
    }

    .rounded-10 {
        border-radius: 10px;
    }
    </style>
    @endpush
    @if (optional($verifiedOwner)->status === 2)
    <div class="container" style="margin-top: 190px; margin-bottom: 160px;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center border rounded-10 p-4">
                    <div class="card-body">
                        <i class="fas fa-spinner fa-5x in-progress-icon"></i>
                        <h5 class="card-title"><b>Pengajuan Warapartner Dalam Proses</b></h5>
                        <p class="card-text">Silahkan melakukan pengecekan secara berkala <br>Maksimal 2 x 24 Jam di
                            hari kerja</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @elseif (optional($verifiedOwner)->status === 1)
    <div class="container" style="margin-top: 190px;margin-bottom: 160px;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center border rounded-10 p-4">
                    <div class="card-body">
                        <i class="fas fa-times-circle fa-5x non-check-icon"></i>
                        <h5 class="card-title"><b>Pengajuan Warapartner Ditolak</b></h5>
                        <p class="card-text">Mohon maaf pengajuan anda menjadi mitra ditolak <br>karena tidak memenuhi
                            persyaratan dan ketentuan kami</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <section class="py-3"
        style="background-image: url('{{ asset('assets/frontend/image/bg/bg-warapartner.svg') }}'); background-size: 100% auto; background-position: center; background-repeat: no-repeat;">
        <div class="warapartner-card">
            <div style="display: flex; align-items: center; margin-bottom: 26px;">
                <img src="{{ asset('assets/frontend/image/logo-mini.svg') }}" alt="Logo Warapartner"
                    style="height: 40px; margin-right: 10px;">
                <h4 style="color: #222222; font-size:22px; font-weight: bold; margin-left: 10px;">Pendaftaran
                    Warapartner</h4>
            </div>
            <h5 style="color: black;">
                <b>Informasi Pemilik Waralaba</b>
            </h5>
            <form id="myForm" action="{{ route('verified.warapartner')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                <div class="form-group">
                    <label for="fullname" class="form-label fw-bold">
                        <p>Nama Lengkap <span style="color: red;">*</span></p>
                    </label>
                    <input type="text" name="fullname" id="fullname"
                        class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                    <p class="text-sm text-secondary mt-2">Nama lengkap sesuai KTP</p>
                </div>
                <div class="row m-0 mt-4">
                    <div class="col-lg-6 p-0">
                        <div class="form-group">
                            <label for="email" class="form-label fw-bold">
                                <p>Alamat Email <span style="color: red;">*</span></p>
                            </label>
                            <input type="email" name="email" id="email"
                                class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                            <p class="text-sm text-secondary mt-2">
                                Email yang digunakan untuk login
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 ps-lg-4">
                        <div class="form-group">
                            <label for="phone_number" class="form-label fw-bold">
                                <p>Nomer Hp Aktif <span style="color: red;">*</span></p>
                            </label>
                            <input type="number" name="phone_number" id="phone_number"
                                class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                            <p class="text-sm text-secondary mt-2">
                                Contoh: 081234567890
                            </p>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="address" class="form-label fw-bold">
                        <p>Alamat Rumah <span style="color: red;">*</span></p>
                    </label>
                    <textarea name="address" id="address" class="form-control border px-2 py-1 rounded-3 shadow-none"
                        required cols="30" rows="3"></textarea>
                    <p class="text-sm text-secondary mt-2">Contoh: Jl. DI Panjaitan, No.128, Purwokerto, Banyumas, Jawa
                        Tengah</p>
                </div>
                <div class="row m-0 mt-4">
                    <div class="col-lg-6 p-0">
                        <div class="form-group">
                            <label for="ktp_upload" class="form-label fw-bold">
                                <p>Foto KTP <span style="color: red;">*</span></p>
                            </label>
                            <input type="file" name="ktp_upload" id="ktp_upload"
                                class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                            <p class="text-sm text-secondary mt-2">
                                Format: PDF, JPG, PNG, JPEG. Max. 2 Mb.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 ps-lg-4 mb-4">
                        <div class="form-group">
                            <label for="nik_number" class="form-label fw-bold">
                                <p>Nomor KTP <span style="color: red;">*</span></p>
                            </label>
                            <input type="number" name="nik_number" id="nik_number"
                                class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                            <p class="text-sm text-secondary mt-2">
                                Masukan nomor KTP
                            </p>
                        </div>
                    </div>
                </div>
                <h5 style="color: black;">
                    <b>Informasi Perusahaan</b>
                </h5>
                <div class="row m-0 mt-1">
                    <div class="col-lg-6 p-0">
                        <div class="form-group">
                            <label for="company_name" class="form-label fw-bold">
                                <p>Nama Perusahaan <span style="color: red;">*</span></p>
                            </label>
                            <input type="text" name="company_name" id="company_name"
                                class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                            <p class="text-sm text-secondary mt-2">
                                Masukan nama perusahaan anda
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 ps-lg-4">
                        <div class="form-group">
                            <label for="company_category" class="form-label fw-bold">
                                <p>Kategori Perusahaan <span style="color: red;">*</span></p>
                            </label>
                            <select name="company_category" id="company_category"
                                class="form-select border px-2 py-1 rounded-3 shadow-none" required>
                                <option value="" selected disabled>Pilih Kategori</option>
                                <option value="Makanan_Siap_Saji">Makanan Siap Saji</option>
                                <option value="Hotel">Hotel</option>
                                <option value="Retail">Retail</option>
                                <option value="Fashion">Fashion</option>
                                <option value="Elektronik">Elektronik</option>
                                <option value="Kesehatan">Kesehatan</option>
                                <option value="Otomotif">Otomotif</option>
                                <option value="Pendidikan">Pendidikan</option>
                                <option value="Hiburan">Hiburan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <p class="text-sm text-secondary mt-2">Pilih kategori perusahaan anda</p>
                        </div>
                    </div>
                </div>

                <div class="row m-0 mt-4 mb-3">
                    <div class="col-lg-6 p-0 mb-3">
                        <div class="form-group">
                            <label for="company_pict" class="form-label fw-bold">
                                <p>Foto Perusahaan <span style="color: red;">*</span></p>
                            </label>
                            <input type="file" class="form-control border px-2 py-1 rounded-3 shadow-none"
                                class="form-control" id="company_pict" name="company_pict" accept="file/*" required>
                            <p class="text-sm text-secondary mt-2">Format: PDF, JPG, PNG, JPEG. Max. 2 Mb.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 ps-lg-4">
                        <div class="form-group">
                            <label for="npwp" class="form-label fw-bold">
                                <p>NPWP <span style="color: red;">*</span></p>
                            </label>
                            <input type="text" name="npwp" id="npwp"
                                class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                            <p class="text-sm text-secondary mt-2">
                                Masukan nomor NPWP
                            </p>
                        </div>
                    </div>
                </div>
                <h5 style="color: black;">
                    <b>Informasi Rekening Pembayaran</b>
                </h5>
                <div class="row m-0 mt-1">
                    <div class="col-lg-6 p-0">
                        <div class="form-group">
                            <label for="bank_name" class="form-label fw-bold">
                                <p>Rekening Bank <span style="color: red;">*</span></p>
                            </label>
                            <select name="bank_name" id="bank_name"
                                class="form-select border px-2 py-1 rounded-3 shadow-none" required>
                                <option value="" selected disabled>Pilih Bank</option>
                                <option value="BCA">Bank BCA</option>
                                <option value="BNI">Bank BNI</option>
                                <option value="BRI">Bank BRI</option>
                                <option value="Mandiri">Bank Mandiri</option>
                            </select>
                            <p class="text-sm text-secondary mt-2">Pilih bank untuk menerima pembayaran</p>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 ps-lg-4">
                        <div class="form-group">
                            <label for="account_number" class="form-label fw-bold">
                                <p>Nomer Rekening <span style="color: red;">*</span></p>
                            </label>
                            <input type="number" name="account_number" id="account_number"
                                class="form-control border px-2 py-1 rounded-3 shadow-none" required>
                            <p class="text-sm text-secondary mt-2">
                                Masukan nomor Rekening
                            </p>
                        </div>
                    </div>
                </div>
                <button type="submit" class="mt-4 mb-2 btn custom-color w-100 text-white border-12 py-3"
                    id="submitButton">Kirim</button>
            </form>
        </div>
        @endif
    </section>
</x-user-layout>