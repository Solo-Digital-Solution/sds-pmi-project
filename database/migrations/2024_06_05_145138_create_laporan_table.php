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
        Schema::create('laporan', function (Blueprint $table) {
            $table->string('id_laporan')->primary();
            // $table->foreignId('id_kejadian')->references('id_kejadian')->on('kejadian')->onDelete('cascade');
            $table->foreignId('id_dampak')->references('id_dampak')->on('dampak')->onDelete('cascade');
            $table->foreignId('id_mobilisasi')->references('id_mobilisasi')->on('mobilisasi')->onDelete('cascade');
            $table->foreignId('id_giat_pmi')->references('id_giat_pmi')->on('giat_pmi')->onDelete('cascade');
            $table->text('giat_pemerintah');
            $table->text('kebutuhan');
            $table->text('hambatan');
            $table->text('nama_laporan');
            $table->dateTime('update');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
