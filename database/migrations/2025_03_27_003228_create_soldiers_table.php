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
        Schema::create('soldiers', function (Blueprint $table) {
            $table->id('Cod_s');
            $table->string('Nom_s');
            $table->string('Apell_s');
            $table->string('Grado_s');
            $table->unsignedBigInteger('Cod_ce1');
            $table->unsignedBigInteger('Num_com1');
            $table->unsignedBigInteger('Cod_c2');
            $table->timestamps();
            
            $table->foreign('Cod_ce1')->references('Cod_ce')->on('corps');
            $table->foreign('Num_com1')->references('Num_com')->on('companies');
            $table->foreign('Cod_c2')->references('Cod_c')->on('barracks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soldiers');
    }
};
