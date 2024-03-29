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
        Schema::dropIfExists('pizza');
        
        Schema::create('pizzas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->boolean('is_custom')->nullable(false);
            $table->foreignId('user_id')->nullable(true)->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
};

