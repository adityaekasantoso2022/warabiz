<x-admin-layout title="Detail Lamaran - {{ $jobApp->application_id }}" active="lamaran pekerjaan">
    @push('addonStyle')
    <!-- Masukkan gaya tambahan di sini -->
    <style>
        body {
            background: #FEFEFE !important;
        }

        .card {
            margin-bottom: 20px;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
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
    <section class="section">
        <div class="row">
            <div class="col-md-12"> <!-- Menggunakan col-md-12 untuk membuat kartu menempati seluruh lebar layar -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Data Lamaran Pekerjaan</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="application-tab" data-toggle="tab" href="#application"
                                    role="tab" aria-controls="application" aria-selected="true">Informasi Lamaran</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Profil</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="portfolio-tab" data-toggle="tab" href="#portfolio" role="tab"
                                    aria-controls="portfolio" aria-selected="false">Portofolio</a>
                            </li>
                        </ul>
                        <br>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="application" role="tabpanel"
                                aria-labelledby="application-tab">
                                <p class='my-2'>
                                <div class="row mb-2">
                                    <div class="col-sm-4">ID Lamaran</div>
                                    <div class="col-sm-8">LMR-{{ substr($jobApp->application_id, 2, 6) }}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-4">Waktu Dibuat</div>
                                    <div class="col-sm-8">{{ $jobApp->created_at->isoFormat('D MMMM YYYY, HH:mm', 'DD
                                        MMMM YYYY, HH:mm') }} WIB</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-4">Nama Perusahaan</div>
                                    <div class="col-sm-8">{{ $jobApp->career->company_name }}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-4">Posisi Pekerjaan</div>
                                    <div class="col-sm-8">{{ $jobApp->career->career_title }}</div>
                                </div>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row mb-2">
                                    <div class="col-sm-4">Nama Lengkap</div>
                                    <div class="col-sm-8">{{ $jobApp->full_name}} </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-4">Jenis Kelamin</div>
                                    <div class="col-sm-8">{{ $jobApp->gender}} </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-4">Tanggal Lahir</div>
                                    <div class="col-sm-8">{{ \Carbon\Carbon::parse($jobApp->date_of_birth)->isoFormat('D MMMM YYYY', 'Do MMMM YYYY') }}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-4">Agama</div>
                                    <div class="col-sm-8">{{ $jobApp->religion}} </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-4">Pendidikan Terakhir</div>
                                    <div class="col-sm-8">{{ $jobApp->last_education}} </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-4">Email</div>
                                    <div class="col-sm-8">{{ $jobApp->email}} </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-4">Nomor Handphone</div>
                                    <div class="col-sm-8">{{ $jobApp->phone_number}} </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-sm-4">Pengalaman Kerja</div>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" rows="5"
                                            readonly>{{ $jobApp->work_experience }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="portfolio-tab">
                                <div class="col-sm-8">
                                    @if (Str::endsWith($jobApp->portfolio_url, ['.jpg', '.jpeg', '.png', '.gif',
                                    '.bmp']))
                                    <img src="{{ $jobApp->portfolio_url }}" alt="Portfolio Image" class="img-fluid">
                                    @else
                                    <iframe src="{{ $jobApp->portfolio_url }}" width="100%" height="500px"
                                        frameborder="0"></iframe>
                                        <a href="{{ $jobApp->portfolio_url }}" target="_blank">Lihat Dokumen</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Update Status Lamaran</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.jobApp.update', ['id' => $jobApp->application_id]) }}"
                            method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value=30301 {{ $jobApp->status == 30301 ? 'selected' : '' }}>
                                        Ditolak
                                    </option>
                                    <option value=30302 {{ $jobApp->status == 30302 ? 'selected' : '' }}>
                                        Pending
                                    </option>
                                    <option value=30303 {{ $jobApp->status == 30303 ? 'selected' : '' }}>
                                        Diterima
                                    </option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        $('#myTab a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    });
</script>