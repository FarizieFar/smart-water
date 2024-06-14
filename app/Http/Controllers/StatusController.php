<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;


class StatusController extends Controller
{
    public function index()
    {
        $devices = Status::all();
        return view('admin.status', compact('devices'));
    }

    public function turnOn($id)
    {
        $device = Status::findOrFail($id);
        $device->status = 'On';
        $device->save();

        return redirect()->back()->with('success', 'Perangkat berhasil dinyalakan.');
    }

    public function turnOff($id)
    {
        $device = Status::findOrFail($id);
        $device->status = 'Off';
        $device->save();

        return redirect()->back()->with('success', 'Perangkat berhasil dimatikan.');
    }

    public function create()
    {
        return view('admin.createstatus');
    }

    public function store(Request $request)
    {
        // Validasi data jika diperlukan
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        $status = new Status();
        $status->name = $request->name;
        $status->save();

        // Redirect ke halaman status perangkat dengan pesan sukses atau langsung kembali ke halaman sebelumnya
        return redirect()->route('status.index')->with('success', 'Status added successfully!');
    }

    public function destroy($id)
    {
        $device = Status::findOrFail($id);
        $device->delete();

        return redirect()->route('status.index')->with('success', 'Status deleted successfully!');
    }
}
