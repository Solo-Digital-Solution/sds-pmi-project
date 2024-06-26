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
            $table->integer('kend_ops')->default('0');
            $table->integer('truk_angkutan')->default('0');
            $table->integer('truk_tangki')->default('0');
            $table->integer('double_cabin')->default('0');
            $table->integer('alat_du')->default('0');
            $table->integer('ambulans')->default('0');
            $table->integer('alat_watsan')->default('0');
            $table->integer('rs_lapangan')->default('0');
            $table->integer('alat_pkdd')->default('0');
            $table->integer('gudang_lapangan')->default('0');
            $table->integer('posko_aju')->default('0');
            $table->integer('alat_it_lapangan')->default('0');
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
