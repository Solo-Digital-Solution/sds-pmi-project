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
            $table->integer('sekolah')->default('0');
            $table->integer('tempat_ibadah')->default('0');
            $table->integer('rumah_sakit')->default('0');
            $table->integer('pasar')->default('0');
            $table->integer('gedung_pemerintah')->default('0');
            $table->integer('lain-lain')->default('0');
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
