<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('bio')->nullable();
            $table->enum('primary_attribute', ['Strength', 'Agility', 'Intelligence', 'Universal']);
            $table->enum('attack_type', ['Melee', 'Ranged']);
            $table->enum('complexity', ['Easy', 'Medium', 'Hard']);
            $table->integer('carry')->nullable();
            $table->integer('support')->nullable();
            $table->integer('nuker')->nullable();
            $table->integer('disabler')->nullable();
            $table->integer('jungler')->nullable();
            $table->integer('durable')->nullable();
            $table->integer('escape')->nullable();
            $table->integer('pusher')->nullable();
            $table->integer('initiator')->nullable();
            $table->float('primary_strength');
            $table->float('primary_agility');
            $table->float('primary_intelligence');
            $table->float('strength_per_lvl');
            $table->float('agility_per_lvl');
            $table->float('intelligence_per_lvl');
            $table->integer('health');
            $table->float('health_regen');
            $table->integer('mana');
            $table->float('mana_regen');
            $table->float('armor');
            $table->integer('attack_dmg_min');
            $table->integer('attack_dmg_max');
            $table->float('attack_speed');
            $table->integer('movement_speed');
            $table->float('magic_resist');
            $table->float('attack_rate');
            $table->text('lore')->nullable();
            $table->string('image', 255)->nullable();
            $table->string('innate_title', 100)->nullable();
            $table->text('innate_desc')->nullable();
            $table->integer('projectile_speed')->nullable();
            $table->integer('attack_range');
            $table->float('turn_rate');
            $table->float('collision_size');
            $table->float('bound_radius');
            $table->integer('vision_range_day');
            $table->integer('vision_range_night');
            $table->string('voice_actor', 255)->nullable();
            $table->string('talent_10_left', 255);
            $table->string('talent_10_right', 255);
            $table->string('talent_15_left', 255);
            $table->string('talent_15_right', 255);
            $table->string('talent_20_left', 255);
            $table->string('talent_20_right', 255);
            $table->string('talent_25_left', 255);
            $table->string('talent_25_right', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};