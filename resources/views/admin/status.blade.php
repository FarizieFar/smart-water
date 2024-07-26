@extends('layout.template')

@section('content')

<div class="content">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h1 class="h4">Status Perangkat</h1>
                
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-end mb-3">
                <!-- Tambahkan tombol tambah data di sini -->
                <a href="{{route('status.create')}}" class="btn btn-success btn-sm">Tambah Data</a>
                </div>
                <table class="table table-hover">
                    <thead class="thead-dark">   
                        <tr>
                            <th class="text-muted"><h6>ID</h6></th>
                            <th class="text-muted"><h6>Nama</h6></th>
                            <th class="text-muted"><h6>Status</h6></th>
                            <th class="text-muted"><h6>Aksi</h6></th>
                            <th class="text-muted"><h6>Hapus</h6></th> <!-- Kolom untuk tombol delete -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($devices as $device)
                        <tr>
                            <td>{{ $device->id }}</td>
                            <td>{{ $device->name }}</td>
                            <td>
                                <span class="badge {{ $device->status == 'On' ? 'badge-success' : 'badge-danger' }}">
                                    {{ $device->status }}
                                </span>
                            </td>
                            <td>
                                @if($device->status == 'On')
                                    <form action="{{ route('status.turnOff', $device->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Matikan</button>
                                    </form>
                                @else
                                    <form action="{{ route('status.turnOn', $device->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-success">Nyalakan</button>
                                    </form>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('status.delete', $device->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus status ini?')">Hapus</button>
                                </form>
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
