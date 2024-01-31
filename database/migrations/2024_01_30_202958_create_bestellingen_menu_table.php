<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */


        public function up()
        {
            Schema::create('bestellingen_cartIitem', function (Blueprint $table) {
                $table->id();

                // Add any additional columns you need for the pivot table here
                $table->timestamps();

                $table->foreignId('bestelling_id')->references('id')->on('bestellingen')->onDelete('cascade');
                $table->foreignId('cart_items_id')->references('id')->on('cart')->onDelete('cascade');
            });
        }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bestellingen_menu');
    }
};
