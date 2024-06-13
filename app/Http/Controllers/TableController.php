<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemakaianAir;

class TableController extends Controller
{
    public function index(){
        $dataPemakaianAir = PemakaianAir::all(); // Mengambil semua data pemakaian air dari database
        return view('admin.table', ['dataPemakaianAir' => $dataPemakaianAir]);
    }
}
