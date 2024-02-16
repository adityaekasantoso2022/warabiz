<x-admin-layout title="Edit Transaksi" active="transaksi" style="margin-top: 0;">
    @push('addonStyle')
    <style>
        body {
            background: #dae3ec !important;
        }

        .transaction-card {
            background: #fff;
            border-radius: 14px;
            color: #34364a;
            padding: 30px;
            overflow-x: auto;
            overflow-y: auto;
        }

        .transaction-form {
            margin-top: 20px;
        }

        .transaction-form label {
            margin-bottom: 5px;
        }

        .transaction-form .form-control {
            margin-bottom: 15px;
        }

        .transaction-form button {
            margin-top: 15px;
        }
    </style>
    @endpush

    <section>
        <div class="container">
            <div class="transaction-card">
                <h3>Edit Transaksi</h3>
                <form action="{{ route('admin.transactions.update', $transaction->uuid) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="waralaba_id" class="form-label">ID Waralaba</label>
                        <input type="text" class="form-control" id="waralaba_id" name="waralaba_id" value="{{ $transaction->waralaba_id }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="waralaba_name" class="form-label">Nama Waralaba</label>
                        <input type="text" class="form-control" id="waralaba_name" name="waralaba_name" value="{{ $transaction->waralaba_name }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Nama Pembeli</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" value="{{ $transaction->fullname }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Pembeli</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $transaction->email }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">No. Handphone Pembeli</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $transaction->phone_number }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Lokasi Pembangunan Waralaba</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ $transaction->address }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="payment_method" class="form-label">Metode Pembayaran</label>
                        <input type="text" class="form-control" id="payment_method" name="payment_method" value="{{ $transaction->payment_method }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="0" {{ $transaction->status == 0 ? 'selected' : '' }}>Verfikasi Pembayaran
                            </option>
                            <option value="1" {{ $transaction->status == 1 ? 'selected' : '' }}>Pembangunan
                            </option>
                            <option value="2" {{ $transaction->status == 2 ? 'selected' : ''}}>Pembukaan Waralaba
                            </option>
                            <option value="3" {{ $transaction->status == 3 ? 'selected' : ''}}>Selesai
                            </option>
                            <option value="4" {{ $transaction->status == 4 ? 'selected' : ''}}>Gagal
                            </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
</x-admin-layout>
