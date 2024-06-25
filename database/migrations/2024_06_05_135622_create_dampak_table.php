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
            $table->foreignId('id_korban_terdampak')->references('id_korban_terdampak')->on('korban_terdampak')->onDelete('cascade');
            $table->foreignId('id_korban_jiwa')->references('id_korban_jiwa')->on('korban_jiwa')->onDelete('cascade');
            $table->foreignId('id_kerusakan_rumah')->references('id_kerusakan_rumah')->on('kerusakan_rumah')->onDelete('cascade');
            $table->foreignId('id_kerusakan_fasilitas')->references('id_kerusakan_fasilitas')->on('kerusakan_fasilitas')->onDelete('cascade');
            $table->foreignId('id_kerusakan_infrastruktur')->references('id_kerusakan_infrastruktur')->on('kerusakan_infrastruktur')->onDelete('cascade');
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
