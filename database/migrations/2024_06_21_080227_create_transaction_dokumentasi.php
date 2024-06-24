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
        Schema::create('transaction_dokumentasi', function (Blueprint $table) {
            $table->foreignId('id_laporan')->references('id_laporan')->on('laporan')->onDelete('cascade');
            $table->foreignId('id_dokumentasi')->references('id_dokumentasi')->on('dokumentasi')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_dokumentasi');
    }
};
