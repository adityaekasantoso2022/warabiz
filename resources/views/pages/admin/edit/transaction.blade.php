<x-admin-layout title="Edit Transaksi" active="transaksi">
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
                            <h5 class="card-title">Informasi Transaksi</h5>
                            <div class="info-item">
                                <label>Nomor Transaksi</label>
                                <p>TRX-{{ substr($transaction->uuid, 2, 6) }}</p>
                            </div>
                            <div class="info-item">
                                <label>Nama Waralaba</label>
                                <p>{{ $transaction->waralaba_name }}</p>
                            </div>
                            <div class="info-item">
                                <label>Lokasi Pendirian</label>
                                <p>{{ $transaction->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Informasi Pembeli</h5>
                            <div class="info-item">
                                <label>Nama Pembeli</label>
                                <p>{{ $transaction->fullname }}</p>
                            </div>
                            <div class="info-item">
                                <label>Alamat Email</label>
                                <p>{{ $transaction->email }}</p>
                            </div>
                            <div class="info-item">
                                <label>Nomer Handphone</label>
                                <p>{{ $transaction->phone_number }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bukti Pembayaran</h5>
                            <?php
                            $file_extension = pathinfo($transaction->payment_proof, PATHINFO_EXTENSION);
                            if (in_array($file_extension, ['jpg', 'jpeg', 'png', 'gif', 'bmp'])) {
                                // Display image if the format is an image
                                echo '<img src="' . $transaction->payment_proof . '" alt="Bukti Pembayaran" style="max-width:400px; max-height: auto; display: block; margin: auto;">';
                            } elseif ($file_extension === 'pdf') {
                                // Display PDF preview if the format is a PDF
                                echo '<iframe src="' . $transaction->payment_proof . '" width="100%" height="600px"></iframe>';
                            } else {
                                // Display link to file if the format is other than image or PDF
                                echo '<a href="' . $transaction->payment_proof . '">Download Bukti Pembayaran</a>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Konfirmasi Pembayaran</h5>
                            <div class="info-item">
                                <label>Tanggal Transaksi</label>
                                <p>{{ $transaction->created_at->setTimezone('Asia/Jakarta')->format('d/m/Y H:i') }} WIB
                                </p>
                            </div>
                            <div class="info-item">
                                <label>Metode Pembayaran</label>
                                <p>{{ $transaction->payment_method }}</p>
                            </div>
                            <div class="info-item">
                                <label>Total Pembayaran</label>
                                <p>Rp. {{ $transaction->total_payment }}</p>
                            </div>
                            <form action="{{ route('admin.transactions.update', $transaction->uuid) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="0" {{ $transaction->status == 0 ? 'selected' : '' }}>Verifikasi
                                            Pembayaran</option>
                                        <option value="1" {{ $transaction->status == 1 ? 'selected' : '' }}>Pembangunan
                                        </option>
                                        <option value="2" {{ $transaction->status == 2 ? 'selected' : ''}}>Pembukaan
                                            Waralaba</option>
                                        <option value="3" {{ $transaction->status == 3 ? 'selected' : ''}}>Selesai
                                        </option>
                                        <option value="4" {{ $transaction->status == 4 ? 'selected' : ''}}>Gagal
                                        </option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                @if ($transaction->status == 3)
                                <a href="{{ route('admin.transactions.show', ['id' => $transaction->uuid]) }}"
                                    class="btn btn-success">Unduh Invoice</a>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>