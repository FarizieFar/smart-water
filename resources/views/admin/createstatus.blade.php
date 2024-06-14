@extends('layout.template')

@section('content')

<div class="content">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h1 class="h4">Tambah Data Status</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('status.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Status</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama device">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
