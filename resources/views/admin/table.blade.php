@extends('layout.template')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title fw-bold" style="font-weight: bolder">Tabel Penggunaan Air</h4>
                        <div class="input-group input-group-sm w-25">
                            <input type="text" class="form-control" placeholder="Cari...">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Tambahkan tombol tambah data di sini -->
                        <a href="{{ route('pemakaianair.index') }}" class="btn btn-success btn-sm">Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter">
                            <thead class="text-primary">
                                <tr>
                                    <th>Id</th>
                                    <th>Nama Pengguna</th>
                                    <th>Tanggal</th>
                                    <th class="text-center">Pemakaian Air</th>
                                    <th>Waktu</th>
                                    <th>Citra</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dataPemakaianAir as $pemakaianAir)
                                <tr>
                                    <td>{{ $pemakaianAir->id }}</td>
                                    <td>{{ $pemakaianAir->nama_pengguna }}</td>
                                    <td>{{ $pemakaianAir->tanggal }}</td>
                                    <td class="text-center">{{ $pemakaianAir->pemakaian_air }}</td>
                                    <td>{{ $pemakaianAir->waktu }}</td>
                                    <td>{{ $pemakaianAir->gambar_meteran }}</td>
                                    <td>
                                        <!-- Action buttons -->
                                        <button class="btn btn-sm btn-info">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
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
</div>

@endsection
