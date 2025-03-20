<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('image', 255)->nullable();
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->integer('cost');
            $table->integer('sell_value');
            $table->enum('type', ['Basic', 'Upgraded', 'Non-purchasable']);
            $table->enum('category', [
                'Consumables', 'Attributes', 'Equipment', 'Miscellaneous', 'Secret Shop',
                'Accessories', 'Support', 'Magical', 'Armor', 'Weapons', 'Armaments',
                'Boss Rewards', 'Collectible Items'
            ]);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('items');
    }
};