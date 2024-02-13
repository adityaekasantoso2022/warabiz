<x-user-layout title="Edit Profile" active="edituser">
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

        @media (min-width: 767px) {
            .benefit {
                padding: 60px 0px;
            }

            .hero {
                background: none !important;
                margin-top: 75px;
                margin-bottom: -33px !important;
                height: 80vh !important;
            }

            .card-row {
                margin-top: 20px;
                max-width: 600px;
            }
        }

        .header-primary {
            color: #34364a;
            font-size: 38px;
            font-weight: 700;
            line-height: 48px;
        }

        .card-row {
            background: #fff;
            border-radius: 10px;
            box-sizing: border-box;
            color: #34364a;
            height: 100%;
            padding: 30px;
            position: relative;
            margin-left: auto;
            margin-right: auto;
        }

        /* Ubah gaya input */
        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 0.5rem 1rem;
        }

        /* Ubah gaya tombol */
        #submitButton {
            background-color: #009BB8;
            border-color: #009BB8;
            border-radius: 12px;
            color: white;
            font-weight: bold;
            padding: 0.5rem 1rem;
        }

        #submitButton:hover {
            background-color: #00829B;
            border-color: #00829B;
        }
    </style>
    @endpush

    <section class="py-5" style="margin-top: 70px">
        <div class="container">
            <div class="card-row mx-auto">
                <h5 class="header-title">
                    <b>Edit Profile</b>
                </h5>

                <form method="POST" action="{{ route('user.update-profile') }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-1">
                        <label for="name" class="form-label fw-bold">Nama Lengkap:</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                            class="form-control border px-2 py-2 rounded-3 shadow-none" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="email" class="form-label fw-bold">Alamat Email:</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}"
                            class="form-control border px-2 py-2 rounded-3 shadow-none" readonly>
                    </div>
                    <button type="submit" onclick="validateForm()"
                        class="mt-4 mb-2 btn bgTheme w-100 text-white border-12 py-3" id="submitButton">
                        Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </section>
</x-user-layout>