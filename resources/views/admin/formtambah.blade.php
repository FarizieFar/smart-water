@extends('layout.template')

@section('content')
<div class="content">
<div class="container mt-5">
    <h2>Form Pemakaian Air</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <form action="{{ route('pemakaianair.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama_pengguna">Nama Pengguna</label>
            <input type="text" name="nama_pengguna" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pemakaian_air">Pemakaian Air (liter)</label>
            <input type="number" name="pemakaian_air" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="waktu">Waktu</label>
            <input type="time" name="waktu" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="gambar_meteran">Gambar Meteran</label>
            <input type="file" name="gambar_meteran" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
@endsection