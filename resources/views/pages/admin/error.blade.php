<x-admin-layout title="Error" active="error">
    @push('addonStyle')
    <style>
        body {
            background: #dae3ec !important;
        }

        .error-container {
            text-align: center;
            margin-top: 100px;
        }

        .error-container h1 {
            font-size: 72px;
            color: #FF0000;
        }

        .error-container p {
            font-size: 24px;
            color: #34364a;
        }

        .btn-home {
            margin-top: 20px;
            background-color: #4F94D7;
            border-radius: 12px;
            color: white;
            font-weight: 500;
            font-size: 16px;
            line-height: 150%;
            padding: 12px 32px;
            text-decoration: none;
        }
    </style>
    @endpush

    <section class="py-5">
        <div class="error-container">
            <h1>Error</h1>
            <p>Data yang akan anda Cari tidak ada ataupun telah Terhapus, Mohon coba lagi lain kali</p>
            <a href="{{ route('admin.dashboard') }}" class="btn-home">Back to Dashboard Admin</a>
        </div>
    </section>
</x-admin-layout>
