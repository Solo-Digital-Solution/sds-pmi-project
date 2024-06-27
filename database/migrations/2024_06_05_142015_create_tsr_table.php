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
            $table->integer('medis');
            $table->integer('paramedis');
            $table->integer('relief');
            $table->integer('logistics');
            $table->integer('watsan');
            $table->integer('it_telekom');
            $table->integer('sheltering');
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
