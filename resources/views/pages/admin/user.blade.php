<x-admin-layout title="Pengguna" active="user" style="margin-top: 0;">
    @push('addonStyle')
    <style>
        body {
            background: #FEFEFE !important;
        }

        .waralaba-card {
            background: #fff;
            border-radius: 14px;
            color: #34364a;
            padding: 30px;
            overflow-x: auto;
            overflow-y: auto;
        }

        .user-table {
            width: 100%;
            border-collapse: collapse;
        }

        .user-table th{
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .user-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .user-table th {
            background-color: #f2f2f2;
        }

        .user-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .user-table tr:hover {
            background-color: #f2f2f2;
        }

        .search-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        #searchInput {
            width: 200px;
            margin-right: 5px;
        }

        #searchButton {
            max-width: 80px;
            padding: 6px 12px;
        }

        .status-label {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 5px;
            font-size: 12px;
            font-weight: bold;
            color: white;
        }


        .small-circle-img {
            width: 50px;
            /* Ukuran gambar profil */
            height: 50px;
            border-radius: 50%;
            /* Lingkaran */
            object-fit: contain;
        }


        @media screen and (max-width: 576px) {
            .search-bar {
                flex-direction: column;
                align-items: flex-start;
            }

            #searchInput {
                width: 100%;
                margin: 5px 0;
            }
        }
    </style>
    @endpush
    <section>
        <div class="container">
            <div class="waralaba-card">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Daftar Pengguna</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="user-list">
                        <div class="search-bar mb-3 d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <span>Cari Pengguna: ‎ ‎ </span>
                                <input type="text" id="searchInput"
                                    class="form-control border px-2 py-1 rounded-3 shadow-none ml-2">
                            </div>
                        </div>
                        <table class="user-table">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $index => $user)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="text-center">{{ $user->role }}</td>
                                    <td class="text-center">
                                        <div class="user-details">
                                            <a href="{{ route('admin.user.edit', $user->id) }}"
                                                class="btn btn-circle btn-warning"
                                                style="background-color: #FFC107; border: none;"><i class="fas fa-edit"
                                                    style="color: white;"></i></a>
                                            <form action="{{ route('admin.user.destroy', $user->id) }}" method="post"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-circle btn-danger"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">
                                                    <i class="fas fa-trash-alt" style="color: white;"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    document.getElementById("searchInput").addEventListener("input", function () {
        var input, filter, table, tr, tdName, tdEmail, i, txtValueName, txtValueEmail;
        input = this;
        filter = input.value.toUpperCase();
        table = document.querySelector(".user-table");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            tdName = tr[i].getElementsByTagName("td")[1]; // Kolom untuk nama lengkap
            tdEmail = tr[i].getElementsByTagName("td")[2]; // Kolom untuk email
            if (tdName || tdEmail) {
                txtValueName = tdName.textContent || tdName.innerText;
                txtValueEmail = tdEmail.textContent || tdEmail.innerText;
                if (txtValueName.toUpperCase().indexOf(filter) > -1 || txtValueEmail.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    });
</script>

    </x-user-layout>
