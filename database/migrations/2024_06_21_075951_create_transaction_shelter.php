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
        Schema::create('transaction_shelter', function (Blueprint $table) {
            $table->foreignId('id_dampak')->references('id_dampak')->on('dampak')->onDelete('cascade');
            $table->foreignId('id_lokasi_shelter')->references('id_lokasi_shelter')->on('shelter')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_shelter');
    }
};
