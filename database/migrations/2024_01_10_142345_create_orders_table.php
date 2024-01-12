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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bestelling_id')->nullable();
            $table->unsignedBigInteger('pizza_id');
            $table->string('pizza_afmeting');
            $table->string('ingredient_erbij')->nullable();
            $table->integer('aantal');
            $table->decimal('regel_prijs', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
