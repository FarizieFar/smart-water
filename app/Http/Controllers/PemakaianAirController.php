<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemakaianAir;
use Illuminate\Support\Facades\DB; // Import DB dari namespace yang benar

class PemakaianAirController extends Controller
{
    public function index()
{
    $dataPemakaianAir = PemakaianAir::all(); // Mengambil semua data pemakaian air dari database
    return view('admin.formtambah', ['dataPemakaianAir' => $dataPemakaianAir]); // Mengirim data ke view
}

    // app/Http/Controllers/PemakaianAirController.php

public function edit($id)
{
    $pemakaianAir = PemakaianAir::find($id);

    if (!$pemakaianAir) {
        abort(404); // Jika data tidak ditemukan, tampilkan error 404
    }

    return view('admin.edit', compact('pemakaianAir'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama_pengguna' => 'required|string|max:255',
        'tanggal' => 'required|date',
        'pemakaian_air' => 'required|integer',
        'waktu' => 'required',
        'gambar_meteran' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Bisa nullable untuk opsi tidak wajib
    ]);

    $pemakaianAir = PemakaianAir::find($id);

    if (!$pemakaianAir) {
        abort(404); // Jika data tidak ditemukan, tampilkan error 404
    }

    // Mengupdate data
    $pemakaianAir->nama_pengguna = $request->nama_pengguna;
    $pemakaianAir->tanggal = $request->tanggal;
    $pemakaianAir->pemakaian_air = $request->pemakaian_air;
    $pemakaianAir->waktu = $request->waktu;

    // Mengupdate gambar jika ada upload baru
    if ($request->hasFile('gambar_meteran')) {
        $imagePath = $request->file('gambar_meteran')->store('meteran_images', 'public');
        $pemakaianAir->gambar_meteran = $imagePath;
    }

    $pemakaianAir->save();

    return redirect()->route('table.index')->with('success', 'Data berhasil diupdate!');
}

    public function store(Request $request)
    {
        $request->validate([
            'nama_pengguna' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'pemakaian_air' => 'required|integer',
            'waktu' => 'required',
            'gambar_meteran' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('gambar_meteran')->store('meteran_images', 'public');

        // Gunakan DB::table() dengan benar setelah di-import
        DB::table('pemakaian_air')->insert([
            'nama_pengguna' => $request->nama_pengguna,
            'tanggal' => $request->tanggal,
            'pemakaian_air' => $request->pemakaian_air,
            'waktu' => $request->waktu,
            'gambar_meteran' => $imagePath,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
    public function destroy($id)
{
    $pemakaianAir = PemakaianAir::find($id);

    if (!$pemakaianAir) {
        abort(404); // Jika data tidak ditemukan, tampilkan error 404
    }

    $pemakaianAir->delete();

    return redirect()->back()->with('success', 'Data berhasil dihapus!');
}
}
