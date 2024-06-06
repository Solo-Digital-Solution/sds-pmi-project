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
            $table->id('id_layanan_korban');
            $table->foreignId('id_distribusi_layanan')->references('id_distribusi_layanan')->on('distribusi_layanan');
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
