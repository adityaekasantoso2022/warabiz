<x-owner-layout title="Profil" active="profile" style="margin-top: 0;">
    @push('addonStyle')
    <style>
    body {
        background: #fbfbfb !important;
    }
    </style>
    @endpush

    <section class="section">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center flex-column">
                            <div class="avatar avatar-2xl">
                                <div class="avatar"
                                    style="background-color: #0089A3; margin-right: 0.75rem; width: 5em; height: 5em; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                                    <span class="avatar-content"
                                        style="font-size: 1.5em; font-weight: bold;">{{ strtoupper(substr(Auth::user()->name, 0, 2)) }}</span>
                                </div>
                            </div>
                            <h5 class="mt-3">{{ $user->name }}</h5>
                            <p class="text-small">
                                <i class="fas fa-check-circle text-success"></i> <!-- Icon verifikasi -->
                                Terverifikasi
                                {{ $ownerVerified->created_at ? \Carbon\Carbon::parse($ownerVerified->created_at)->translatedFormat('j F Y') : '' }}
                            </p>
                        </div>
                        <div class="card-body">
                            <form action="#" method="get">
                                <div class="form-group">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Your Name" value="{{ $user->name }}" readonly
                                        style="background-color: #fff;">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" id="email" class="form-control"
                                        placeholder="Your Email" value="{{ $user->email }}" readonly
                                        style="background-color: #fff;">
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="form-label">Nomer Handphone</label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        placeholder="Your Phone" value="{{ $ownerVerified->phone_number ?? '' }}"
                                        readonly style="background-color: #fff;">
                                </div>
                                <div class="form-group">
                                    <label for="nik" class="form-label">Nomer Induk Kependudukan (NIK)</label>
                                    <input type="text" name="nik" id="nik" class="form-control" placeholder="Your Phone"
                                        value="{{ $ownerVerified->nik_number ?? '' }}" readonly
                                        style="background-color: #fff;">
                                </div>
                                <div class="form-group">
                                    <label for="address" class="form-label">Alamat</label>
                                    <textarea name="address" id="address" class="form-control" readonly
                                        style="background-color: #fff;">{{ $ownerVerified->address ?? '' }}</textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('owner.update-profile') }}" method="POST" class="user-form">
                            @csrf
                            <!-- Melindungi formulir dari serangan CSRF -->
                            @method('PUT')
                            <!-- Menggunakan metode PUT untuk pembaruan -->

                            <div class="form-group">
                                <label for="company_name" class="form-label">Nama Perusahaan</label>
                                <input type="text" name="company_name" id="company_name" class="form-control"
                                    value="{{ $ownerVerified->company_name ?? '' }}">
                            </div>

                            <div class="form-group">
                                <label for="company_category" class="form-label">Kategori Perusahaan</label>
                                <select class="form-control" id="company_category" name="company_category">
                                    <option value="Makanan_Siap_Saji"
                                        {{ $ownerVerified->company_category == 'Makanan_Siap_Saji' ? 'selected' : '' }}>
                                        Makanan Siap Saji</option>
                                    <option value="Hotel"
                                        {{ $ownerVerified->company_category == 'Hotel' ? 'selected' : '' }}>Hotel
                                    </option>
                                    <option value="Retail"
                                        {{ $ownerVerified->company_category == 'Retail' ? 'selected' : '' }}>Retail
                                    </option>
                                    <option value="Fashion"
                                        {{ $ownerVerified->company_category == 'Fashion' ? 'selected' : '' }}>Fashion
                                    </option>
                                    <option value="Elektronik"
                                        {{ $ownerVerified->company_category == 'Elektronik' ? 'selected' : '' }}>
                                        Elektronik</option>
                                    <option value="Kesehatan"
                                        {{ $ownerVerified->company_category == 'Kesehatan' ? 'selected' : '' }}>
                                        Kesehatan</option>
                                    <option value="Otomotif"
                                        {{ $ownerVerified->company_category == 'Otomotif' ? 'selected' : '' }}>Otomotif
                                    </option>
                                    <option value="Pendidikan"
                                        {{ $ownerVerified->company_category == 'Pendidikan' ? 'selected' : '' }}>
                                        Pendidikan</option>
                                    <option value="Hiburan"
                                        {{ $ownerVerified->company_category == 'Hiburan' ? 'selected' : '' }}>Hiburan
                                    </option>
                                    <option value="Lainnya"
                                        {{ $ownerVerified->company_category == 'Lainnya' ? 'selected' : '' }}>Lainnya
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="npwp" class="form-label">Nomor Pokok Wajib Pajak (NPWP)</label>
                                <input type="text" name="npwp" id="npwp" class="form-control"
                                    value="{{ $ownerVerified->npwp ?? '' }}">
                            </div>

                            <div class="form-group">
                                <label for="bank_name" class="form-label">Metode Pembayaran</label>
                                <select class="form-control" id="bank_name" name="bank_name">
                                    <option value="BNI" {{ $ownerVerified->bank_name == 'BNI' ? 'selected' : '' }}>Bank
                                        BNI
                                    </option>
                                    <option value="BCA" {{ $ownerVerified->bank_name == 'BCA' ? 'selected' : '' }}>Bank
                                        BCA
                                    </option>
                                    <option value="BRI" {{ $ownerVerified->bank_name == 'BRI' ? 'selected' : '' }}>Bank
                                        BRI
                                    </option>
                                    <option value="Mandiri"
                                        {{ $ownerVerified->bank_name == 'Mandiri' ? 'selected' : '' }}>Bank Mandiri
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="account_number" class="form-label">Nomor Rekening</label>
                                <input type="text" name="account_number" id="account_number" class="form-control"
                                    value="{{ $ownerVerified->account_number ?? '' }}">
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <ul class="nav">
                                    <li class="nav-item">
                                        <form id="logoutForm" action="{{ url('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                        <a href="#"
                                            onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"
                                            class="nav-link text-danger">
                                            <i class="fas fa-sign-out-alt me-1"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-owner-layout>