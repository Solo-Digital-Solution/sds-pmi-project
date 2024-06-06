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
        Schema::create('dampak', function (Blueprint $table) {
            $table->id('id_dampak');
            $table->foreignId('id_korban_terdampak')->references('id_korban_terdampak')->on('korban_terdampak');
            $table->foreignId('id_korban_jiwa')->references('id_korban_jiwa')->on('korban_jiwa');
            $table->foreignId('id_kerusakan_rumah')->references('id_kerusakan_rumah')->on('kerusakan_rumah');
            $table->foreignId('id_kerusakan_fasilitas')->references('id_kerusakan_fasilitas')->on('kerusakan_fasilitas');
            $table->foreignId('id_kerusakan_infrastruktur')->references('id_kerusakan_infrastruktur')->on('kerusakan_infrastruktur');
            $table->foreignId('id_lokasi_shelter')->references('id_lokasi_shelter')->on('shelter');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dampak');
    }
};
