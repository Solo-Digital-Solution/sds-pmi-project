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
        Schema::create('giat_pmi', function (Blueprint $table) {
            $table->id('id_giat_pmi');
            $table->foreignId('id_evakuasi_korban')->references('id_evakuasi_korban')->on('evakuasi_korban')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giat_pmi');
    }
};
