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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            // $table->string('type');
            // $table->string('type');
            $table->integer('cost')->unsigned();
            $table->text('description')->nullable();
            $table->text('bonus')->nullable();
            $table->text('ability')->nullable();
            $table->integer('cooldown')->nullable();
            $table->integer('mana_cost')->nullable();
            $table->text('recipe')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
