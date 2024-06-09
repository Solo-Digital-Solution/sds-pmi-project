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
        Schema::create('layanan_korban', function (Blueprint $table) {
            $table->foreignId('id_giat_pmi')->references('id_giat_pmi')->on('giat_pmi')->onDelete('cascade');
            $table->foreignId('id_distribusi_layanan')->references('id_distribusi_layanan')->on('distribusi_layanan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan_korban');
    }
};
