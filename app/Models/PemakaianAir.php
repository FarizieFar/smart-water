<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemakaianAir extends Model
{
    use HasFactory;

    protected $table = 'pemakaian_air';

    protected $fillable = [
        'nama_pengguna',
        'tanggal',
        'pemakaian_air',
        'waktu',
        'gambaran_meteran'
    ];
}
