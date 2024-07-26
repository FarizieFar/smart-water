<!-- resources/views/pelanggan/create.blade.php -->

@extends('layout.template')

@section('content')
<div class="content">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h1 class="h4">Tambah Data Pelanggan</h1>
                <a href="{{ route('tagihan.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('tagihanair.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="meter_name">Meter Name</label>
                        <input type="text" class="form-control" id="meter_name" name="meter_name" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="extracted_text">Extracted Text</label>
                        <input type="text" class="form-control" id="extracted_text" name="extracted_text" required>
                    </div>
                    <div class="form-group">
                        <label for="time">Time</label>
                        <input type="time" class="form-control" id="time" name="time" required>
                    </div>
                    <div class="form-group">
                        <label for="image_filename">Image Filename</label>
                        <input type="text" class="form-control" id="image_filename" name="image_filename" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
