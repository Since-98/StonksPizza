<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::dropIfExists('cart_items');
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();

            $table->string('pizza')->default('');
            $table->string('grootte');
            $table->integer('quantity');
            $table->decimal('prijs')->default(0.0);
            $table->timestamps();
        });
    }

    public function down()
    {

    }
};
