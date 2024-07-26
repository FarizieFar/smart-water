<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterBill extends Model
{
    use HasFactory;

    protected $table = 'water_bill';

    protected $fillable = [
        'meter_name',
        'date',
        'extracted_text',
        'time',
        'image_filename',
    ];
}
