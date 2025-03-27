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
        Schema::create('barrack_company', function (Blueprint $table) {
            $table->unsignedBigInteger('Cod_c1');
            $table->unsignedBigInteger('Num_com2');
            
            $table->foreign('Cod_c1')->references('Cod_c')->on('barracks');
            $table->foreign('Num_com2')->references('Num_com')->on('companies');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barrack_company');
    }
};
