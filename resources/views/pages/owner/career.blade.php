<x-owner-layout title="Career" active="career" style="margin-top: 0;">
    <style>
        body {
            background: #dae3ec !important;
        }

        .career-card {
            background: #fff;
            border-radius: 14px;
            color: #34364a;
            padding: 30px;
            overflow-x: auto;
            overflow-y: auto;
        }

        .career-table {
            width: 100%;
            border-collapse: collapse;
        }

        .career-table th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .career-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .career-table th {
            background-color: #f2f2f2;
        }

        .career-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .career-table tr:hover {
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
            height: 50px;
            border-radius: 50%;
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

        .career-thumbnail {
            max-width: 100px;
            max-height: 100px;
        }
    </style>

    <section>
        <div class="container">
            <div class="career-card">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Daftar Pekerjaan</h3>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="{{ route('owner.career.create') }}" class="btn btn-primary">Tambah Karier</a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="career-list">
                        <div class="search-bar mb-3 d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <span>Cari Pekerjaan: ‎ ‎ </span>
                                <input type="text" id="searchInput"
                                    class="form-control border px-2 py-1 rounded-3 shadow-none ml-2">
                            </div>
                        </div>
                        <table class="career-table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Posisi Pekerjaan</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($careers as $index => $career)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>{{ $career->company_name }}</td>
                                    <td>{{ $career->career_title }}</td>
                                    <td>{{ Str::limit(strip_tags($career->description), 135) }}</td>
                                    <td>
                                        <div class="career-details d-flex justify-content-between align-items-center">
                                            <a href="{{ route('owner.careers.edit', $career->id) }}"
                                                class="btn btn-circle btn-warning"
                                                style="background-color: #FFC107; border: none;">
                                                <i class="fas fa-edit" style="color: white;"></i>
                                            </a>
                                            <span style="width: 5px;"></span>
                                            <form action="{{ route('owner.careers.destroy', $career->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-circle btn-danger"
                                                    style="background-color: #F44336; border: none;"><i
                                                        class="fas fa-trash-alt" style="color: white;"></i></button>
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
</x-owner-layout>
