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
        Schema::create('evakuasi_korban', function (Blueprint $table) {
            $table->id('id_evakuasi_korban');
            $table->integer('luka_ringan_berat')->default('0');
            $table->integer('meninggal')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evakuasi_korban');
    }
};
