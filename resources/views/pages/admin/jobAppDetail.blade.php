<x-admin-layout title="Detail Lamaran - {{ $jobApp->application_id }}" active="lamaran pekerjaan">
    @push('addonStyle')
    <!-- Masukkan gaya tambahan di sini -->
    <style>
        /* Tambahkan gaya tambahan di sini */

        .card {
            margin-bottom: 20px;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .info-item {
            margin-bottom: 10px;
        }

        .info-item label {
            font-weight: bold;
        }

        .lamaran-img {
            width: 250px;
            height: 150px;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .lamaran-thumbnail {
            width: 100px;
            height: 100px;
            max-width: 100px;
            /* Sesuaikan lebar maksimum gambar thumbnail */
            border-radius: 4px;
        }
    </style>
    @endpush

    <section class="py-5">
        <div class="container">
            <div class="card">
                <h3>Detail Lamaran Pekerjaan</h3>
                <div class="row">
                    <div class="col-md-6">
                        <dl class="row">
                            <dt class="col-sm-4">ID Lamaran</dt>
                            <dd class="col-sm-8">LMR-{{ substr($jobApp->application_id, 2, 6) }}</dd>

                            <dt class="col-sm-4">Nama Pelamar</dt>
                            <dd class="col-sm-8">{{ $jobApp->full_name }}</dd>

                            <dt class="col-sm-4">Jenis Kelamin</dt>
                            <dd class="col-sm-8">{{ $jobApp->gender }}</dd>

                            <dt class="col-sm-4">Tanggal Lahir</dt>
                            <dd class="col-sm-8">{{ $jobApp->date_of_birth }}</dd>

                            <dt class="col-sm-4">Agama</dt>
                            <dd class="col-sm-8">{{ $jobApp->religion }}</dd>

                            <dt class="col-sm-4">Email</dt>
                            <dd class="col-sm-8">{{ $jobApp->email }}</dd>

                            <dt class="col-sm-4">Nomor Telepon</dt>
                            <dd class="col-sm-8">{{ $jobApp->phone_number }}</dd>

                            <dt class="col-sm-4">Alamat</dt>
                            <dd class="col-sm-8">{{ $jobApp->address }}</dd>

                            <dt class="col-sm-4">Pendidikan Terakhir</dt>
                            <dd class="col-sm-8">{{ $jobApp->last_education }}</dd>

                            <dt class="col-sm-4">URL Portofolio</dt>
                            <dd class="col-sm-8">{{ $jobApp->portfolio_url }}</dd>

                            <dt class="col-sm-4">Pengalaman Kerja</dt>
                            <dd class="col-sm-8">{{ $jobApp->work_experience }}</dd>

                            <dt class="col-sm-4">Status Lamaran</dt>
                            <dd class="col-sm-8">
                                @switch($jobApp->status)
                                    @case(30301)
                                        Ditolak
                                        @break
                                    @case(30302)
                                        Menunggu Konfirmasi
                                        @break
                                    @case(30303)
                                        Diterima
                                        @break
                                @endswitch
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
