<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function index(){
        return view('admin.tagihan');
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
