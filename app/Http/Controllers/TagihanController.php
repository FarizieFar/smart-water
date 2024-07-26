<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WaterBill;

class TagihanController extends Controller
{
    // public function index(){
    //     return view('admin.tagihan');
    // }

    public function index()
    {
        $bills = WaterBill::all(); // Ambil semua data dari tabel water_bills
        return view('admin.tagihan', compact('bills'));
    }

    public function create()
    {
        return view('admin.tagihanair');
    }

    public function store(Request $request)
    {
        // Validasi request jika diperlukan
        $validatedData = $request->validate([
            'meter_name' => 'required|string',
            'date' => 'required|date',
            'extracted_text' => 'required|string',
            'time' => 'required|string',
            'image_filename' => 'required|string',
        ]);

        // Simpan data ke dalam database
        WaterBill::create($validatedData);

        // Redirect ke halaman yang sesuai atau beri respons sesuai kebutuhan
        return redirect()->route('tagihan.index')->with('success', 'Data pelanggan berhasil ditambahkan.');
    }
    
}
