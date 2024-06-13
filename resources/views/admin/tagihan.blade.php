@extends('layout.template')

@section('content')
<div class="content">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h1 class="h4">Tabel Data Pelanggan</h1>
                {{-- <button class="btn btn-success btn-sm" onclick="tambahData()">Tambah Data</button> <!-- Tambahkan tombol "Tambah Data" di sini --> --}}
            </div>
            <div class="card-body">
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
                        <!-- Realistic dummy data -->
                        <tr>
                            <td>1</td>
                            <td>Meter 123456</td>
                            <td>2024-06-01</td>
                            <td>123456789012</td> <!-- Integer value -->
                            <td>09:30 AM</td>
                            <td>invoice12345.jpg</td>
                            <td>
                                <!-- Action buttons for the first row -->
                                <!-- Edit button -->
                                <button class="btn btn-sm btn-info">Edit</button>
                                <!-- Delete button -->
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Meter 789012</td>
                            <td>2024-06-02</td>
                            <td>987654321098</td> <!-- Integer value -->
                            <td>12:45 PM</td>
                            <td>receipt_storeXYZ.jpg</td>
                            <td>
                                <!-- Action buttons for the second row -->
                                <!-- Edit button -->
                                <button class="btn btn-sm btn-info">Edit</button>
                                <!-- Delete button -->
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Meter 555666</td>
                            <td>2024-06-03</td>
                            <td>555666777888</td> <!-- Integer value -->
                            <td>03:20 PM</td>
                            <td>contract_agreement.docx</td>
                            <td>
                                <!-- Action buttons for the third row -->
                                <!-- Edit button -->
                                <button class="btn btn-sm btn-info">Edit</button>
                                <!-- Delete button -->
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
