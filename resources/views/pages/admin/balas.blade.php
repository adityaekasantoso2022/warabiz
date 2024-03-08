<x-admin-layout title="Balas Pesan" active="bantuan" style="margin-top: 0;">
    @push('addonStyle')
    <style>
        body {
            background: #fbfbfb !important;
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
                <h3>Balas Pertanyaan</h3>
                <form action="{{ route('admin.user.update', $pesan->id) }}" method="POST" class="user-form">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" value="{{ $pesan->user->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" value="{{ $pesan->email }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control" id="kategori" value="{{ $pesan->kategori_pertanyaan }}"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="pertanyaan">Pertanyaan</label>
                        <textarea class="form-control" id="pertanyaan" rows="3" readonly>{{ $pesan->pesan }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="jawaban">Jawaban</label>
                        <textarea class="form-control" id="jawaban" name="jawaban" rows="3"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="hapusPesanKirimEmailDanRedirect()">Balas Pesan</button>
                </form>
            </div>
        </div>
    </section>
</x-admin-layout>
<script>
    function hapusPesanKirimEmailDanRedirect() {
        var pesanId = {{ $pesan->id }};
        var jawaban = document.getElementById('jawaban').value;
        var encodedJawaban = encodeURIComponent(jawaban).replace(/%20/g, ' ');
        var subject = encodeURIComponent('Balasan Pertanyaan Warabiz');
        var body = encodeURIComponent('Hallo {{ $pesan->user->name }},\n Terima kasih telah menunggu jawaban dari kami\n Berikut adalah balasan untuk pertanyaan yang Anda ajukan\n\n Pertanyaan: \n {{ $pesan->pesan }}\n\nJawaban:\n' + encodedJawaban + '\n\nTerima kasih atas pertanyaan Anda.\n\nSalam,\nTim Dukungan Warabiz');
        var mailtoLink = 'mailto:{{ $pesan->email }}?subject=' + subject + '&body=' + body;

        fetch('/hapus-pesan/' + pesanId, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        }).then(response => {
            if (response.ok) {
                console.log('Pesan berhasil dihapus');
                // Kirim email
                window.location.href = mailtoLink; 
                setTimeout(function() {
                    window.location.href = '{{ route("admin.bantuan") }}'; 
                }, 1000);
            } else {
                console.error('Gagal menghapus pesan');
            }
        }).catch(error => {
            console.error('Error:', error);
        });
    }
</script>

