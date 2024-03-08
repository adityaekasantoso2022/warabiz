<x-user-layout title="Edit Profile" active="edit-profile">
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
                    margin-top: 20px; /* Tambahkan margin-top di sini */
                    max-width: 600px; /* Ubah lebar maksimum card */
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
                weight: 60px;
                padding: 30px;
                position: relative;
                row-gap: 20px;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    @endpush
    <section class="py-5" style="margin-top: 70px">
        <div class="container">
            <div class="card-row mx-auto"> <!-- Tambahkan kelas mx-auto di sini -->
                <h5 class="header-title">
                    <b>Edit Profile</b>
                </h5>
                <form id="myForm" action="{{ route('submit.form') }}" method="POST">
                    @csrf
                    <div class="form-group mt-1">
                        <label for="email" class="form-label fw-bold">Alamat Email</label>
                        <input type="text" name="email" id="email" class="form-control py-2 px-3 p"
                            value="user@example.com" required="" disabled>
                    </div>
                    <div class="form-group mt-3">
                        <label for="full_name" class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" name="full_name" id="full_name" class="form-control border px-2 py-2 rounded-3 shadow-none"
                            value="John Doe" required="">
                    </div>
                    <br>
                    <!-- Submit button -->
                    <button type="submit" onclick="validateForm()"
                        class="mt-4 mb-2 btn bgTheme w-100 text-white border-12 py-3" id="submitButton">
                        Save Changes</button>
                </form>
            </div>
        </div>
    </section>
</x-user-layout>
