<!-- resources/views/admin/edit.blade.php -->

@extends('layout.template')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title fw-bold" style="font-weight: bolder">Edit Data Penggunaan Air</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('pemakaianair.update', $pemakaianAir->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nama_pengguna">Nama Pengguna</label>
                            <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" value="{{ $pemakaianAir->nama_pengguna }}">
                        </div>

                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $pemakaianAir->tanggal }}">
                        </div>

                        <div class="form-group">
                            <label for="pemakaian_air">Pemakaian Air</label>
                            <input type="number" class="form-control" id="pemakaian_air" name="pemakaian_air" value="{{ $pemakaianAir->pemakaian_air }}">
                        </div>

                        <div class="form-group">
                            <label for="waktu">Waktu</label>
                            <input type="time" class="form-control" id="waktu" name="waktu" value="{{ $pemakaianAir->waktu }}">
                        </div>

                        <div class="form-group">
                            <label for="gambar_meteran">Gambar Meteran</label>
                            <input type="file" class="form-control-file" id="gambar_meteran" name="gambar_meteran">
                            <small class="text-muted">Max 2MB. Allowed types: jpg, png, jpeg, gif.</small>
                        </div>

                        <button type="submit" id="updateButton" class="btn btn-primary">Update Data</button>
                        <script>
                            document.getElementById('updateButton').addEventListener('click', function(event) {
                                event.preventDefault(); // Mencegah pengiriman formulir jika diperlukan
                                
                                // Lakukan logika update data di sini (misalnya, melalui AJAX, jika ada)
                                
                                // Tampilkan SweetAlert setelah proses update data
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Update Data Sukses',
                                    text: 'Data Anda telah berhasil diperbarui!',
                                    confirmButtonText: 'OK'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Kembali ke halaman sebelumnya setelah menekan tombol OK
                                        window.history.back();
                                    }
                                });
                            });
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
