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
        Schema::dropIfExists('medewerkers');

                Schema::create('medewerkers', function (Blueprint $table) {
                    $table->id();
                    $table->string("Voornaam");
                    $table->string("Achternaam");
                    $table->integer("Inkomen");
                    $table->string("Functie");
                    $table->timestamps();
                });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
