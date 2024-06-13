<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemakaianAir;
use Illuminate\Support\Facades\Response;

class TableController extends Controller
{
    public function index(){
        $dataPemakaianAir = PemakaianAir::all(); // Mengambil semua data pemakaian air dari database
        return view('admin.table', ['dataPemakaianAir' => $dataPemakaianAir]);
    }

    public function downloadCSV()
{
    $dataPemakaianAir = PemakaianAir::all();

    $csvData = "Id,Nama Pengguna,Tanggal,Pemakaian Air,Waktu\n";

    foreach ($dataPemakaianAir as $pemakaianAir) {
        $csvData .= "{$pemakaianAir->id},"
            . "\"{$pemakaianAir->nama_pengguna}\","
            . "{$pemakaianAir->tanggal},"
            . "{$pemakaianAir->pemakaian_air},"
            . "{$pemakaianAir->waktu}\n";
    }

    $csvData = mb_convert_encoding($csvData, 'UTF-16LE', 'UTF-8');
    $headers = [
        'Content-Type' => 'text/csv; charset=UTF-16LE',
        'Content-Disposition' => 'attachment; filename="data_pemakaian_air.csv"',
    ];

    return Response::make($csvData, 200, $headers);
}
}
