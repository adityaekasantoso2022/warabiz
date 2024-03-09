<x-admin-layout title="Edit Verifikasi Owner" active="verifowner">
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

        .waralaba-img {
            width: 250px;
            height: 150px;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .waralaba-thumbnail {
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
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Informasi Verified Owner</h5>
                            <div class="info-item">
                                <label>Nama</label>
                                <p>{{ $verifOwner->fullname }}</p>
                            </div>
                            <div class="info-item">
                                <label>Email</label>
                                <p>{{ $verifOwner->email }}</p>
                            </div>
                            <div class="info-item">
                                <label>Alamat</label>
                                <p>{{ $verifOwner->address }}</p>
                            </div>
                            <div class="info-item">
                                <label>Nomor Telepon</label>
                                <p>{{ $verifOwner->phone_number }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Informasi Bisnis</h5>
                            <div class="info-item">
                                <label>Nama Perusahaan</label>
                                <p>{{ $verifOwner->company_name }}</p>
                            </div>
                            <div class="info-item">
                                <label>Kategori Perusahaan</label>
                                <p>{{ $verifOwner->company_category }}</p>
                            </div>
                            <div class="info-item">
                                <label>Gambar Perusahaan</label>
                                <?php
                                $file_extension = pathinfo($verifOwner->company_pict, PATHINFO_EXTENSION);
                                if (in_array($file_extension, ['jpg', 'jpeg', 'png', 'gif', 'bmp'])) {
                                    // Display image if the format is an image
                                    echo '<img src="' . $verifOwner->company_pict . '" alt="Gambar Perusahaan" style="max-width:400px; max-height: auto; display: block; margin: auto;">';
                                } else {
                                    // Display link to file if the format is other than image
                                    echo '<a href="' . $verifOwner->company_pict . '">Download Gambar Perusahaan</a>';
                                }
                                ?>
                            </div>
                            <div class="info-item">
                                <label>NPWP</label>
                                <p>{{ $verifOwner->npwp }}</p>
                            </div>
                            <div class="info-item">
                                <label>Nama Bank</label>
                                <p>{{ $verifOwner->bank_name }}</p>
                            </div>
                            <div class="info-item">
                                <label>Nomor Rekening</label>
                                <p>{{ $verifOwner->account_number }}</p>
                            </div>
                            <form action="{{ route('admin.verifOwner.update', $verifOwner->uuid) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value=0 {{ $verifOwner->status == 0 ? 'selected' : '' }}>
                                            Error
                                        </option>
                                        <option value=1 {{ $verifOwner->status == 1 ? 'selected' : '' }}>
                                            Ditolak
                                        </option>
                                        <option value=2 {{ $verifOwner->status == 2 ? 'selected' : '' }}>
                                            Diproses
                                        </option>
                                        <option value=3 {{ $verifOwner->status == 3 ? 'selected' : '' }}>
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
        </div>
    </section>
</x-admin-layout>
