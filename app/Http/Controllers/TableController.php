<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemakaianAir;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class TableController extends Controller
{
    public function index(){
        $dataPemakaianAir = PemakaianAir::all(); // Mengambil semua data pemakaian air dari database
        return view('admin.table', ['dataPemakaianAir' => $dataPemakaianAir]);
    }

    public function downloadCSV()
{
    $dataPemakaianAir = PemakaianAir::all();

    $csvData = "Id,Nama Pengguna,Tanggal,Pemakaian Air,Gambar Meteran,Waktu\n";

    foreach ($dataPemakaianAir as $pemakaianAir) {
        $csvData .= "{$pemakaianAir->id},"
            . "\"{$pemakaianAir->nama_pengguna}\","
            . "{$pemakaianAir->tanggal},"
            . "{$pemakaianAir->pemakaian_air},"
            . "{$pemakaianAir->gambar_meteran},"
            . "{$pemakaianAir->waktu}\n";
    }

    $csvData = mb_convert_encoding($csvData, 'UTF-16LE', 'UTF-8');
    $headers = [
        'Content-Type' => 'text/csv; charset=UTF-16LE',
        'Content-Disposition' => 'attachment; filename="data_pemakaian_air.csv"',
    ];

    return Response::make($csvData, 200, $headers);
}
public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama_pengguna' => 'required',
        'tanggal' => 'required',
        'pemakaian_air' => 'required',
        'waktu' => 'required',
        'gambar_meteran' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('gambar_meteran')) {
        $imageName = time().'.'.$request->gambar_meteran->extension();
        $path = $request->gambar_meteran->storeAs('gambar_meteran', $imageName, 'public');
        $validatedData['gambar_meteran'] = $path;
    }

    PemakaianAir::create($validatedData);

    return redirect()->route('pemakaianair.index')
                    ->with('success', 'Data penggunaan air berhasil ditambahkan');
}
}
