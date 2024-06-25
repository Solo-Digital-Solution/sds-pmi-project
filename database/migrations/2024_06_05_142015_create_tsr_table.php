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
        Schema::create('tsr', function (Blueprint $table) {
            $table->id('id_tsr');
            $table->integer('medis')->default('0');
            $table->integer('paramedis')->default('0');
            $table->integer('relief')->default('0');
            $table->integer('logistics')->default('0');
            $table->integer('watsan')->default('0');
            $table->integer('it_telekom')->default('0');
            $table->integer('sheltering')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tsr');
    }
};
