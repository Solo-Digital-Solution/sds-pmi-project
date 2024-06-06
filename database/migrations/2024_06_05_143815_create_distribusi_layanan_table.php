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
        Schema::create('distribusi_layanan', function (Blueprint $table) {
            $table->id('id_distribusi_layanan');
            $table->enum('jenis_distribusi_layanan', ['Food Item', 'Non-Food Item', 'Layanan Kesehatan', 'Layanan Air Bersih']);
            $table->string('lokasi');
            $table->enum('unit', ['KK', 'Orang']);
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distribusi_layanan');
    }
};
