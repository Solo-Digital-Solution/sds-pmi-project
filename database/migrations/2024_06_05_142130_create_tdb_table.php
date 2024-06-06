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
        Schema::create('tdb', function (Blueprint $table) {
            $table->id('id_tdb');
            $table->integer('kend_ops');
            $table->integer('truk_angkutan');
            $table->integer('truk_tangki');
            $table->integer('double_chain');
            $table->integer('alat_du');
            $table->integer('ambulans');
            $table->integer('alat_watsan');
            $table->integer('rs_lapangan');
            $table->integer('alat_pkdd');
            $table->integer('gudang_lapangan');
            $table->integer('posko_aju');
            $table->integer('alat_it_lapangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tdb');
    }
};
