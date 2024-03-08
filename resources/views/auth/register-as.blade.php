<x-auth-layout>
    @push('addonStyle')
    <style>
        body {
            background: #fbfbfb !important;
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-card {
            background: #fff;
            border: none;
            border-radius: 10px;
            display: flex;
            flex-direction: row;
            /* Mengubah arah flex ke horizontal */
            justify-content: space-between;
            /* Menyebarkan ruang antara elemen-elemen dalam kartu */
            padding: 30px;
            height: 580px;
            width: 1000px;
        }

        .left-content {
            flex-direction: column;
            justify-content: center;
            flex: 1;
            /* Menyebarkan ruang yang tersedia secara merata */
            padding: 0 50px;
            /* Jarak antara konten dengan tepi kartu */

        }

        .right-content {
            flex-direction: column;
            justify-content: center;
            flex: 1;
            /* Menyebarkan ruang yang tersedia secara merata */
            padding: 0 10px;
            /* Jarak antara konten dengan tepi kartu */
        }

        .daftar {
            font-size: 24px;
            /* Ukuran teks */
            font-weight: bold;
            /* Ketebalan teks */
            margin-bottom: 40px;
            /* Jarak antara teks dan kartu */
            margin-top: 40px;
            /* Jarak antara teks dan kartu */
        }

        .card {
            background: #FAF9F9;
            /* Warna abu-abu */
            border: none;
            border-radius: 10px;
            padding: 30px;
            height: 130px;
            width: 400px;
            /* Lebar kartu */
            margin-bottom: 20px;
            /* Jarak antara dua kartu */
            position: relative;
            /* Menjadikan posisi relatif untuk pseudo-element */
        }

        .card img {
            width: 70px;
            /* Ukuran gambar */
            height: 70px;
            /* Ukuran gambar */
            border-radius: 50%;
            /* Membuat gambar menjadi lingkaran */
            position: absolute;
            /* Menjadikan posisi absolut */
            left: 20px;
            /* Menggeser ke kiri */
            top: 50%;
            /* Posisi di tengah vertikal */
            transform: translateY(-50%);
            /* Menggeser ke atas sebesar setengah dari tingginya */
        }

        .card h2 {
            font-size: 18px;
            margin-bottom: 10px;
            /* Jarak antara judul dan paragraf */
            padding-left: 80px;
            /* Menggeser judul ke kanan untuk memberikan ruang pada gambar */
        }

        .card p {
            font-size: 16px;
            margin: 0;
            /* Hapus margin untuk menghindari jarak tambahan */
            padding-left: 80px;
            /* Menggeser paragraf ke kanan untuk memberikan ruang pada gambar */
        }

        .big-image {
            width: 100%;
            /* Lebar gambar menyesuaikan lebar konten */
            height: 520px;
            /* Tinggi gambar menyesuaikan proporsi */
            border-radius: 8px;
            background-color: #009BB8;
            /* Menambahkan warna latar belakang */
        }

        .login-link {
            margin-top: 30px;
            /* Jarak antara teks dan kartu */
            text-align: center;
            /* Posisi teks ke tengah */
            font-size: 16px;
            /* Ukuran teks */
            cursor: pointer; 
        }


        @media screen and (max-width: 768px) {
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-card {
            background: #fff;
            border: none;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 4px;
            width: calc(100 - 40px); /* Lebar kartu penuh dengan padding dihapus untuk perangkat seluler */
            max-width: none; /* Remove max-width for better responsiveness */
        }

        .left-content, .right-content {
            padding: 20px;
            width: 100%;
            max-width: none; /* Remove max-width for better responsiveness */
        }

        .card {
            margin: 30px 0;
            width: 100%;
        }

        .card img {
            width: 50px; /* Adjust image size for mobile */
            height: auto;
        }

        .right-content {
            display: block; /* Show right content on mobile */
            margin-top: 20px;
        }

        .big-image {
            display: none; /* Hide big image on mobile */
        }
    }    </style>
    @endpush

    <section class="register-as">
    <div class="container">
        <div class="register-card">
            <div class="left-content">
                <h2 class='daftar'>Daftar sebagai</h2>
                <a href="{{ route('register') }}">
                    <div class="card">
                        <img class="icon" src="https://padiumkm.id/_next/static/media/buyer.18a44b13.svg"
                            alt="Circle Image">
                        <h2 style="color: black;">Pembeli</h2>
                        <p style="color: black;">Temukan waralaba sesuai keinginanmu</p>
                    </div>
                </a>
                <a href="link_menuju_halaman_penjual">
                    <div class="card">
                        <img src="https://padiumkm.id/_next/static/media/seller.3c2c3760.svg" alt="Circle Image">
                        <h2 style="color: black;">Penjual</h2>
                        <p style="color: black;">Tingkatkan penjualan waralabamu</p>
                    </div>
                </a>
                <hr>
                <div class="login-link">Sudah memiliki akun? <span style="color: #009BB8;">Masuk</span></div>
            </div>
            <div class="right-content">
                <img src="https://padiumkm.id/_next/static/media/register-as.cf421d13.svg" alt="Big Image"
                    class="big-image">
            </div>
        </div>
    </div>
</section>
</x-auth-layout>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.login-link span').addEventListener('click', function() {
                window.location.href = "{{ route('login') }}";
            });
        });
    </script>
