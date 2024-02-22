<x-admin-layout title="Detail Waralaba - {{ $waralaba->waralaba_name }}" active="waralaba">
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
                    <!-- Informasi Umum Waralaba -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Informasi Umum Waralaba</h5>
                            <img src="{{ $waralaba->image_url_1 }}" alt="Gambar Waralaba" class="waralaba-img">
                            <div class="info-item">
                                <label>Nama Waralaba</label>
                                <p>{{ $waralaba->waralaba_name }}</p>
                            </div>
                            <div class="info-item">
                                <label>Harga</label>
                                <p>Rp {{ number_format($waralaba->price, 0, ',', '.') }}</p>
                            </div>
                            <div class="info-item">
                                <label>Deskripsi</label>
                                <p>{{ $waralaba->description }}</p>
                            </div>
                            <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Informasi Lainnya</h5>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <div class="waralaba-thumbnail">
                                        <img src="{{ $waralaba->image_url_2 }}" alt="Gambar Produk 2" class="img-fluid"
                                            style="width: 100px; height: 100px;">
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="waralaba-thumbnail">
                                        <img src="{{ $waralaba->image_url_3 }}" alt="Gambar Produk 3" class="img-fluid"
                                            style="width: 100px; height: 100px;">
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="waralaba-thumbnail">
                                        <img src="{{ $waralaba->image_url_4 }}" alt="Gambar Produk 4" class="img-fluid"
                                            style="width: 100px; height: 100px;">
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="waralaba-thumbnail">
                                        <img src="{{ $waralaba->image_url_5 }}" alt="Gambar Produk 5" class="img-fluid"
                                            style="width: 100px; height: 100px;">
                                    </div>
                                </div>
                            </div>

                            <div class="info-item">
                                <label>Dibuat Oleh</label>
                                @php
                                try {
                                $creatorName = $waralaba->creator->name;
                                } catch (\Exception $e) {
                                $creatorName = null;
                                }
                                @endphp
                            
                                @if ($creatorName)
                                <p>{{ $creatorName }}</p>
                                @else
                                <p>Dibuat oleh admin</p>
                                @endif
                            </div>
                            <div class="info-item">
                                <label>Tahun Berdiri</label>
                                <p>{{ \Carbon\Carbon::parse($waralaba->since)->translatedFormat('d F Y') }}</p>
                            </div>
                            <div class="info-item">
                                <label>Total Outlet</label>
                                <p>{{ $waralaba->outlet_total }}</p>
                            </div>
                            <div class="info-item">
                                <label>Kontak</label>
                                <p>{{ $waralaba->contact }}</p>
                            </div>

                            <div class="info-item">
                                <label>Jumlah Waralaba Terjual</label>
                                <p>{{ $waralaba->soldCount() }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Konsep Bisnis</h5>
                            <div class="info-item">
                                <label>Konsep Waralana</label>
                                <p>{{ $waralaba->concept }}</p>
                            </div>
                            <div class="info-item">
                                <label>Ukuran Konsep</label>
                                <p>{{ $waralaba->concept_size }}</p>
                            </div>
                            <div class="info-item">
                                <label>Durasi Lisensi</label>
                                <p>{{ $waralaba->license_duration }} Tahun</p>
                            </div>
                            <div class="info-item">
                                <label>Income</label>
                                <p>Rp {{ number_format($waralaba->income, 0, ',', '.') }}</p>
                            </div>
                            <div class="info-item">
                                <label>Royalty Fee</label>
                                <p>Rp {{ number_format($waralaba->royality, 0, ',', '.') }}</p>
                            </div>

                            <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Riwayat Transaksi</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Nama Pembeli</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($waralaba->transactions as $index => $transaction)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $transaction->created_at->format('d/m/Y H:i') }}</td>
                                        <td>{{ $transaction->fullname }}</td>
                                        <td>
                                            <a href="{{ route('admin.transactions.edit', ['id' => $transaction->uuid]) }}"
                                                class="btn btn-circle btn-primary"
                                                style="background-color: #009bb8; border: none;">
                                                <i class="fas fa-eye" style="color: white;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>