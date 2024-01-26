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
        Schema::create('orderitems', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pizza_id')->nullable(false)->references('id')->on('pizzas')->cascadeOnDelete();
            $table->foreignId('size_id')->nullable(false)->references('id')->on('sizes')->cascadeOnDelete();
            $table->foreignId('order_id')->nullable(true)->references('id')->on('orders')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
