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
    { Schema::create('PizzaIngredient', function (Blueprint $table){
        $table->id('pizzaingredientid')->unsigned();
        $table->string('maat');
        $table->foreignId('ingredientid')->index()->references('ingredientid')->on('Ingredient');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_pizza_ingredient');
    }
};
