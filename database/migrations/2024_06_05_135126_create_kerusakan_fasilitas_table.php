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
        Schema::create('kerusakan_fasilitas', function (Blueprint $table) {
            $table->id('id_kerusakan_fasilitas');
            $table->integer('sekolah');
            $table->integer('tempat_ibadah');
            $table->integer('rumah_sakit');
            $table->integer('pasar');
            $table->integer('gedung_pemerintah');
            $table->integer('lain-lain');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kerusakan_fasilitas');
    }
};
