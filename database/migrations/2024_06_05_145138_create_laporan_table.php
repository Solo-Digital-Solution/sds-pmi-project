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
            $table->id('id_laporan');
            $table->foreignId('id_kejadian')->references('id_kejadian')->on('kejadian');
            $table->foreignId('id_dampak')->references('id_dampak')->on('dampak');
            $table->foreignId('id_mobilisasi')->references('id_mobilisasi')->on('mobilisasi');
            $table->foreignId('id_giat_pmi')->references('id_giat_pmi')->on('giat_pmi');
            $table->foreignId('id_personil_dihubungi')->references('id_personil_dihubungi')->on('personil_dihubungi');
            $table->foreignId('id_petugas_posko')->references('id_petugas_posko')->on('petugas_posko');
            $table->foreignId('id_dokumentasi')->references('id_dokumentasi')->on('dokumentasi');
            $table->string('giat_pemerintah');
            $table->string('kebutuhan');
            $table->string('hambatan');
            $table->string('nama_laporan');
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
