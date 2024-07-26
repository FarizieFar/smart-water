@extends('layout.template')

@section('content')
<div class="content">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h1 class="h4">Tabel Data Pelanggan</h1>
                {{-- <button class="btn btn-success btn-sm" onclick="tambahData()">Tambah Data</button> <!-- Tambahkan tombol "Tambah Data" di sini --> --}}
            </div>
            <div class="card-body ">
                <div class="d-flex justify-content-end mb-3">
                    <!-- Tambahkan tombol tambah data di sini -->
                    <a href="{{ route('tagihanair.create') }}" class="btn btn-success btn-sm">Tambah Data</a>
                </div>
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th class="text-muted"><h6>Meter Name</h6></th>
                            <th class="text-muted"><h6>Date</h6></th>
                            <th class="text-muted"><h6>Extracted Text</h6></th>
                            <th class="text-muted"><h6>Time</h6></th>
                            <th class="text-muted"><h6>Image Filename</h6></th>
                            <th class="text-muted"><h6>Actions</h6></th> <!-- Column for actions -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bills as $bill)
                        <tr>
                            <td>{{ $bill->id }}</td>
                            <td>{{ $bill->meter_name }}</td>
                            <td>{{ $bill->date }}</td>
                            <td>{{ $bill->extracted_text }}</td>
                            <td>{{ $bill->time }}</td>
                            <td>{{ $bill->image_filename }}</td>
                            <td>
                                <!-- Action buttons for each row -->
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
@endsection
