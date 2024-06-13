<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WaterBillController extends Controller
{
    public function index(){
        $bills = WaterBill::all();
        return view('tagihan.index', compact('bills'));
    }

    public function create()
    {
        // Logic untuk menampilkan form pembuatan tagihan air baru
    }

    public function store(Request $request)
    {
        // Logic untuk menyimpan tagihan air baru ke database
    }

    public function edit($id)
    {
        // Logic untuk menampilkan form pengeditan tagihan air berdasarkan ID
    }

    public function update(Request $request, $id)
    {
        // Logic untuk menyimpan perubahan pada tagihan air ke database
    }

    public function destroy($id)
    {
        // Logic untuk menghapus tagihan air dari database
    }
}
