<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemakaianAirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemakaian_air', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengguna');
            $table->date('tanggal');
            $table->integer('pemakaian_air');
            $table->time('waktu');
            $table->string('gambar_meteran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemakaian_air');
    }
};
