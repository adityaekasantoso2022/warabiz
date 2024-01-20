<x-auth-layout>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-6 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html"><img src="{{ asset('assets/frontend/image/logo.svg') }}" alt="Logo" /></a>
                    </div>
                    <h1 class="auth-title">Registrasi</h1>
                    <p class="auth-subtitle mb-5">
                    Buat akun dengan mengisi data pribadi Anda
                    </p>

                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group position-relative  mb-4">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text"
                                class="form-control form-control-xl @error('name') is-invalid @enderror"
                                placeholder="Masukan Nama lengkap" name="name" value="{{ old('name') }}" />
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group position-relative  mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="text"
                                class="form-control form-control-xl @error('email') is-invalid @enderror"
                                placeholder="Masukan Alamat Email " name="email" value="{{ old('email') }}" />
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group position-relative  mb-4">
                            <label for="password" class="form-label">Password </label>
                            <input type="password"
                                class="form-control form-control-xl  @error('password') is-invalid @enderror"
                                placeholder="Password" name="password" />
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group position-relative  mb-4">
                            <label for="password" class="form-label">Konfirmasi Password </label>
                            <input id="password-confirm" type="password" class="form-control form-control-xl"
                                name="password_confirmation" autocomplete="new-password"
                                placeholder="Konfirmasi Password">
                        </div>

                        <button class="btn btn-primary btn-block btn-auth shadow-lg mt-5" type="submit">
                            Daftar
                        </button>
                    </form>
                    <div class="text-center mt-5 text-auth fs-4">
                        <p class="text-gray-600">
                            Sudah punya akun?
                            <a href="{{ route('login') }}" class="font-bold">Masuk</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <div id="auth-right"></div>
            </div>
        </div>
    </div>

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
        </style>
    @endpush
</x-auth-layout>
