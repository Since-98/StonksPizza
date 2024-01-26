<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winkelmandtjes', function (Blueprint $table) {
            $table->foreignId('id');
            $table->string('pizza');
            $table->string('ingredient');
            $table->decimal('prijs');
            $table->integer('hoeveelheid'); // Change 'int' to 'integer'
            $table->decimal('grootte');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('winkelmandtjes');
    }
};
