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
        Schema::create('service_soldier', function (Blueprint $table) {
        $table->unsignedBigInteger('Cod_ser1');
        $table->unsignedBigInteger('Cod_s1');
        $table->date('Fecha');
        
        $table->foreign('Cod_ser1')->references('Cod_ser')->on('services');
        $table->foreign('Cod_s1')->references('Cod_s')->on('soldiers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_soldier');
    }
};
