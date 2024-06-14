<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create(['name' => 'Device A', 'status' => 'On']);
        Status::create(['name' => 'Device B', 'status' => 'Off']);
        Status::create(['name' => 'Device C', 'status' => 'On']);
    }
}
