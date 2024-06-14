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
}
