<x-admin-layout title="Edit Lamaran Pekerjaan" active="lamaran pekerjaan">
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
                    <form action="{{ route('admin.jobApp.update', ['id' => $jobApp->application_id]) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Gunakan metode PUT untuk operasi update -->

                        <!-- Input untuk full_name -->
                        <label for="full_name">Full Name:</label>
                        <input type="text" name="full_name" value="{{ $jobApp->full_name }}" disabled>

                        <!-- Input untuk gender -->
                        <label for="gender">Gender:</label>
                        <input type="text" name="gender" value="{{ $jobApp->gender }}" disabled>

                        <!-- Input untuk date_of_birth -->
                        <label for="date_of_birth">Date of Birth:</label>
                        <input type="date" name="date_of_birth" value="{{ $jobApp->date_of_birth }}" disabled>

                        <!-- Input untuk religion -->
                        <label for="religion">Religion:</label>
                        <input type="text" name="religion" value="{{ $jobApp->religion }}" disabled>

                        <!-- Input untuk email -->
                        <label for="email">Email:</label>
                        <input type="email" name="email" value="{{ $jobApp->email }}" disabled>

                        <!-- Input untuk phone_number -->
                        <label for="phone_number">Phone Number:</label>
                        <input type="text" name="phone_number" value="{{ $jobApp->phone_number }}" disabled>

                        <!-- Input untuk address -->
                        <label for="address">Address:</label>
                        <input type="text" name="address" value="{{ $jobApp->address }}"disabled>

                        <!-- Input untuk last_education -->
                        <label for="last_education">Last Education:</label>
                        <input type="text" name="last_education" value="{{ $jobApp->last_education }}"disabled>

                        <!-- Input untuk portfolio_url -->
                        <label for="portfolio_url">Portfolio URL:</label>
                        <input type="text" name="portfolio_url" value="{{ $jobApp->portfolio_url }}"disabled>

                        <!-- Input untuk work_experience -->
                        <label for="work_experience">Work Experience:</label>
                        <textarea name="work_experience" disabled>{{ $jobApp->work_experience }}</textarea>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value=30301 {{ $jobApp->status == 30301 ? 'selected' : '' }}>
                                    Ditolak
                                </option>
                                <option value=30302 {{ $jobApp->status == 30302 ? 'selected' : '' }}>
                                    Pending
                                </option>
                                <option value=30303 {{ $jobApp->status == 30303 ? 'selected' : ''}}>
                                    Diterima
                                </option>
                            </select>
                        <!-- Tombol Submit -->
                        <button type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
