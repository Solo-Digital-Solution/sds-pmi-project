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
        Schema::create('kejadian', function (Blueprint $table) {
            $table->id('id_kejadian');
            $table->string('nama_kejadian');
            $table->text('lokasi');
            $table->text('kecamatan');
            $table->text('kelurahan');
            $table->double('latitude');
            $table->double('longitude');
            $table->dateTime('waktu_kejadian');
            $table->boolean('dukungan_inter');
            $table->text('gambaran_situasi');
            $table->text('akses_lokasi');
            $table->enum('status', ['Invalid', 'Aktif', 'Selesai', 'Menunggu Validasi']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kejadian');
    }
};
