<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shelter', function (Blueprint $table) {
            $table->id('id_lokasi_shelter');
            $table->text('lokasi_shelter');
            $table->integer('jumlah_kk');
            $table->integer('jumlah_jiwa');
            $table->integer('jumlah_laki');
            $table->integer('jumlah_perempuan');
            $table->integer('dibawah_lima');
            $table->integer('antara_lima_dan_delapanbelas');
            $table->integer('lebih_delapanbelas');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shelter');
    }
};
