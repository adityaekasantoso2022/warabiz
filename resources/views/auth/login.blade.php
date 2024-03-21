<x-auth-layout>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-6 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html"><img src="{{ asset('assets/frontend/image/logo.svg') }}" alt="Logo" /></a>
                    </div>
                    <h1 class="auth-title">Selamat Datang</h1>
                    <p class="auth-subtitle mb-5">
                        Silahkan masuk menggunakan akun Anda
                    </p>

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group position-relative mb-4">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text"
                                class="form-control form-control-xl @error('email') is-invalid @enderror"
                                placeholder="Masukan email kamu" name="email" value="{{ old('email') }}" />
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group position-relative mb-4">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="password"
                                class="form-control form-control-xl @error('password') is-invalid @enderror"
                                placeholder="Password" name="password" />
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" />
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Ingat Saya
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block btn-auth shadow-lg mt-5" type="submit">
                            Masuk
                        </button>
                    </form>
                    <div class="text-center mt-5 text-auth fs-4">
                        <p class="text-gray-600">
                            Belum punya akun?
                            <a href="{{ route('register') }}" class="font-bold">Buat Akun</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <div id="auth-right">
                    <img src="{{ asset('assets/frontend/image/login-right.svg') }}" alt="Gambar Samping"
                        class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const rememberMeCheckbox = document.getElementById('flexCheckDefault');
            const emailInput = document.querySelector('input[name="email"]');

            // Ketika halaman dimuat, cek apakah ada nilai yang tersimpan di localStorage untuk email
            const savedEmail = localStorage.getItem('rememberedEmail');
            if (savedEmail) {
                emailInput.value = savedEmail;
                rememberMeCheckbox.checked = true;
            }

            // Ketika checkbox "Ingat Saya" berubah status
            rememberMeCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    // Simpan nilai email ke localStorage jika checkbox dicentang
                    localStorage.setItem('rememberedEmail', emailInput.value);
                } else {
                    // Hapus nilai email dari localStorage jika checkbox tidak dicentang
                    localStorage.removeItem('rememberedEmail');
                }
            });
        });
    </script>

    @push('addonStyle')
    <style>
    .form-check-input:checked {
        background-color: #4F94D7;
        border-color: #4F94D7;
    }

    .text-auth .text-gray-600 a {
        color: #4F94D7;
    }

    .text-auth .text-gray-600 a:hover {
        color: #4d88c3;
    }

    .text-auth p a {
        color: #4F94D7;
    }

    .text-auth p a:hover {
        color: #4d88c3;
    }

    /* Perubahan warna button */
    .btn-auth {
        background-color: #FF823C;
        border-color: #FF823C;
    }

    .btn-auth:hover {
        background-color: #007d91;
        border-color: #007d91;
    }
</style>
    @endpush
</x-auth-layout>
