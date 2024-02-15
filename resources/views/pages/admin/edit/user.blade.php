<x-admin-layout title="Update Pengguna" active="user" style="margin-top: 0;">
    @push('addonStyle')
    <style>
        body {
            background: #dae3ec !important;
        }

        .waralaba-card {
            background: #fff;
            border-radius: 14px;
            color: #34364a;
            padding: 30px;
            overflow-x: auto;
            overflow-y: auto;
        }

        .user-form {
            margin-top: 20px;
        }

        .user-form label {
            margin-bottom: 5px;
        }

        .user-form .form-control {
            margin-bottom: 15px;
        }

        .user-form button {
            margin-top: 15px;
        }
    </style>
    @endpush

    <section>
        <div class="container">
            <div class="waralaba-card">
                <h3>Update Pengguna</h3>
                <form action="{{ route('admin.user.update', $user->id) }}" method="POST" class="user-form">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-control" id="role" name="role">
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                            <!-- Tambahkan opsi role lain sesuai kebutuhan -->
                        </select>
                    </div>
                    <!-- Tambahkan field lain sesuai kebutuhan -->
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </section>
</x-admin-layout>