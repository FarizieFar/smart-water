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
}
