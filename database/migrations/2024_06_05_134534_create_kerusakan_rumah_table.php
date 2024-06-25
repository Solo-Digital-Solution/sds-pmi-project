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
        Schema::create('kerusakan_rumah', function (Blueprint $table) {
            $table->id('id_kerusakan_rumah');
            $table->integer('rusak_berat')->default('0');
            $table->integer('rusak_sedang')->default('0');
            $table->integer('rusak_ringan')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kerusakan_rumah');
    }
};
