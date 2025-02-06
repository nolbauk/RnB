<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $table = 'heroes';

    protected $fillable = [
        'name',
        'bio',
        'primary_attribute',
        'attack_type',
        'complexity',
        'roles',
        'primary_strength',
        'primary_agility',
        'primary_intelligence',
        'strength_per_lvl',
        'agility_per_lvl',
        'intelligence_per_lvl',
        'health',
        'health_regen',
        'mana',
        'mana_regen',
        'armor',
        'attack_dmg_min',
        'attack_dmg_max',
        'attack_speed',
        'movement_speed',
        'magic_resist',
        'attack_rate',
        'lore',
        'image',
        'innate_title',
        'innate_desc',
        'projectile_speed',
        'attack_range',
        'turn_rate',
        'collision_size',
        'bound_radius',
        'vision_range_day',
        'vision_range_night',
        'voice_actor',
        'talent_10_left',
        'talent_10_right',
        'talent_15_left',
        'talent_15_right',
        'talent_20_left',
        'talent_20_right',
        'talent_25_left',
        'talent_25_right',
    ];
}