<x-user-layout title="Payment" active="payment">
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

        .hero {
            background: none !important;

            margin-bottom: -33px !important;
            height: 80vh !important;
        }

        .hero p {
            font-weight: 400;
            font-size: 16px;
            color: rgba(19, 19, 19, 0.8);
            margin: 0px !important
        }

        .hero .hero-text {
            color: #34364a;
            font-size: 68px;
            font-weight: 700;
            line-height: 78px;
        }

        .hero .btn-cta {
            background: #4F94D7;
            border-radius: 12px;
            color: white;
            font-weight: 500;
            font-size: 16px;
            line-height: 150%;
            padding: 12px 32px;
        }

        .navbar-expand-lg {
            background-color: white !important;
            box-shadow: -1.5px 4px 16px rgb(118 126 148 / 20%);
            transition: background-color 200ms linear;
        }

        .benefit {
            background: #03173C;
            padding: 20px 0px;
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
        }

        .header-primary {
            color: #34364a;
            font-size: 38px;
            font-weight: 700;
            line-height: 48px;
        }

        .pricing .syaratketentuan {
            background: #fff;
            border-radius: 16px;
            padding: 30px;
        }

        @media only screen and (min-width: 768px) and (max-width: 1250px) {
            .course-card .course-footer .star-rating img {
                width: 20px !important;
            }
        }
    </style>
    @endpush
    <section class="py-5" style="margin-top: 10px">
        <div class="container">
            <div class="mt-5 row pricing testimonials mentors checkout gy-4" id="syarat ketentuan">
                <div class="container-fluid ">
                    <form>
                        @csrf
                        <div class="syaratketentuan ">
                            <h5 class="header-title mb-3">Syarat & Ketentuan Penggunaan Warabiz</h5>
                            <p class="header-title mb-3">Sebelum mengakses Situs ini lebih jauh, Anda diwajibkan terlebih dahulu membaca syarat dan ketentuan yang berlaku. Syarat dan Ketentuan berikut adalah ketentuan dalam pengunjungan Situs, isi dan/atau konten, layanan, serta fitur lainnya yang ada di dalam Situs. Dengan mengakses atau menggunakan Situs atau aplikasi lainnya yang disediakan oleh atau dalam Situs, berarti Anda telah memahami dan menyetujui serta terikat dan tunduk dengan segala syarat dan ketentuan yang berlaku di Situs ini. Syarat dan Ketentuan ini merupakan perjanjian sah yang berlaku dan mengikat Pengguna dengan Kami sehubungan dengan penggunaan Situs. Untuk itu, Anda menyatakan dan menjamin bahwa Anda adalah orang yang berhak dan cakap untuk mengadakan perjanjian yang mengikat berdasarkan hukum yang berlaku di wilayah Negara Republik Indonesia. Jika Anda tidak menyetujui sebagian atau seluruh ketentuan di dalam Syarat dan Ketentuan ini, maka Anda tidak diperkenankan untuk menggunakan Situs.</p>
                            <ol>
                                <li>
                                    <p>Definisi</p>
                                    <p class="header-title mb-2">Setiap kata atau istilah berikut yang digunakan di dalam Syarat dan Ketentuan ini memiliki arti seperti berikut di bawah, kecuali jika kata atau istilah yang bersangkutan di dalam pemakaiannya dengan tegas menentukan lain</p>
                                    <p class="header-title mb-1">1.1 <b>“Kami”</b>, berarti PT Dwi Cermat Indonesia, perseroan terbatas yang didirikan berdasarkan hukum yang berlaku di wilayah Negara Republik Indonesia yang berkedudukan di Jakarta Barat, selaku pemilik dan pengelola Situs.</p>
                                    <p class="header-title mb-1">1.2 <b>Layanan</b>, berarti setiap dan keseluruhan jasa serta informasi yang ada pada Situs, termasuk namun tidak terbatas pada informasi yang disediakan, fitur dan layanan aplikasi, dukungan data, serta website yang Kami sediakan.</p>
                                    <p class="header-title mb-1">1.3 <b>Anda</b> atau <b>Pengguna</b>, berarti setiap orang yang mengakses dan menggunakan produk dan layanan yang disediakan oleh Kami, termasuk diantaranya Pengguna Belum Terdaftar dan Pengguna Terdaftar.</p>
                                    <p class="header-title mb-1">1.4 <b>Pengguna Belum Terdaftar</b>, berarti setiap orang yang mengakses Situs Kami dan belum melakukan registrasi.</p>
                                    <p class="header-title mb-1">1.5 <b>Pengguna Terdaftar</b>, berarti setiap orang yang mengakses dan menggunakan produk dan layanan yang disediakan oleh Kami, serta telah melakukan registrasi dan memiliki akun pada Situs Kami.</p>
                                    <p class="header-title mb-1">1.6 <b>Pihak Ketiga</b>, berarti pihak lainnya, termasuk namun tidak terbatas pihak bank, multifinance, peer to peer lending, broker dan penyedia layanan asuransi, agen penjual efek reksa dana, transfer dana, telekomunikasi yang menyediakan layanannya dalam Situs.</p>
                                    <p class="header-title mb-1">1.7 <b>Informasi Pribadi</b>, berarti setiap dan seluruh Data Pribadi yang diberikan oleh Pengguna di Situs Kami, termasuk namun tidak terbatas pada nama lengkap, tempat dan tanggal lahir, jenis kelamin, alamat, nomor identitas, informasi pengguna, kartu keluarga, akta kelahiran, surat nikah, , KTP, NPWP, surat izin usaha, surat penjaminan, data penghasilan, lokasi pengguna, kontak pengguna, serta dokumen dan data pendukung lainnya sebagaimana diminta pada ringkasan pendaftaran akun serta pada ringkasan aplikasi pengajuan.</p>
                                    <p class="header-title mb-1">1.8 <b>Data Pribadi</b>, berarti data tentang orang perseorangan yang teridentifikasi atau dapat diidentifikasi secara tersendiri atau dikombinasi dengan informasi lainnya baik secara langsung maupun tidak langsung melalui sistem elektronik atau nonelektronik.</p>
                                    <p class="header-title mb-1">1.9 <b>Situs</b>, berarti sistus website warabiz.com.</p>
                                    <p class="header-title mb-3">1.10 <b>Syarat dan Ketentuan</b>, adalah syarat dan ketentuan ini berikut dengan perubahannya dari waktu ke waktu.</p>
                                </li>
                                <li>
                                    <p>Pilih waralaba yang sesuai dengan kebutuhan dan budget Anda.</p>
                                </li>
                                <li>
                                    <p>Hubungi pemilik waralaba yang bersangkutan melalui platform Warabiz untuk
                                        mendapatkan informasi lebih lanjut.</p>
                                </li>
                                <li>
                                    <p>Setelah memutuskan waralaba yang akan Anda ambil, Anda akan diberikan petunjuk
                                        pembayaran oleh pemilik waralaba atau melalui platform Warabiz.</p>
                                </li>
                                <li>
                                    <p>Lakukan pembayaran sesuai petunjuk yang diberikan. Pembayaran biasanya dilakukan
                                        melalui transfer bank atau metode pembayaran online lainnya yang disepakati.</p>
                                </li>
                                <li>
                                    <p>Setelah pembayaran diterima, pemilik waralaba akan memberikan informasi lebih
                                        lanjut mengenai proses selanjutnya, termasuk pengiriman dokumen resmi dan
                                        pelatihan waralaba.</p>
                                </li>
                                <li>
                                    <p>Setelah proses pembayaran selesai, Anda dapat memulai usaha waralaba Anda sesuai
                                        dengan ketentuan yang telah disepakati.</p>
                                </li>
                            </ol>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-user-layout>
