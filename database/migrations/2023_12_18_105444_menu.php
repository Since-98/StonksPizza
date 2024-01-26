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


                Schema::create('menu', function (Blueprint $table) {
                    $table->id();
                    $table->string("pizza");
                    $table->string("ingrediënten");
                    $table->integer("hoeveelheid");
                    $table->integer("prijs");
                    $table->timestamps();
                });
            

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
