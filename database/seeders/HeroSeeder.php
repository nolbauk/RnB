<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Hero;
class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    Hero::create([
        'name' => 'Chen',
        'role' => 'Support',
        'image' => 'chen.jfif'
    ]);

    Hero::create([
        'name' => 'Mirana',
        'role' => 'Marksman',
        'image' => 'Mirana_Large.png'
    ]);

    Hero::create([
        'name' => 'Axe',
        'role' => 'Carry',
        'image' => 'axe.jpg'
    ]);

    Hero::create([
        'name' => 'Drow Ranger',
        'role' => 'Carry',
        'image' => 'drow.png'
    ]);

    Hero::create([
        'name' => 'Lion',
        'role' => 'Support',
        'image' => 'lion.jpg'
    ]);

    Hero::create([
        'name' => 'Tidehunter',
        'role' => 'Tank',
        'image' => 'tide.jpg'
    ]);

    Hero::create([
        'name' => 'Sniper',
        'role' => 'Carry',
        'image' => 'sniper.jpg'
    ]);

    Hero::create([
        'name' => 'Vengeful Spirit',
        'role' => 'Support',
        'image' => 'venge.jpg'
    ]);

    Hero::create([
        'name' => 'Wraith King',
        'role' => 'Carry',
        'image' => 'wraith.jpg'
    ]);

    Hero::create([
        'name' => 'Crystal Maiden',
        'role' => 'Support',
        'image' => 'maiden.jpg'
    ]);

    Hero::create([
        'name' => 'Juggernaut',
        'role' => 'Carry',
        'image' => 'jugg.jpg'
    ]);

    Hero::create([
        'name' => 'Queen of Pain',
        'role' => 'Mid',
        'image' => 'queen.jpg'
    ]);

    Hero::create([
        'name' => 'Invoker',
        'role' => 'Mid',
        'image' => 'invoker.jpg'
    ]);

    Hero::create([
        'name' => 'Anti-Mage',
        'role' => 'Carry',
        'image' => 'anti.jpg'
    ]);

    Hero::create([
        'name' => 'Phantom Lancer',
        'role' => 'Carry',
        'image' => 'phantom.jpg'
    ]);

    Hero::create([
        'name' => 'Templar Assassin',
        'role' => 'Mid',
        'image' => 'templar.jpg'
    ]);

    Hero::create([
        'name' => 'Medusa',
        'role' => 'Carry',
        'image' => 'medusa.jpg'
    ]);

    Hero::create([
        'name' => 'Luna',
        'role' => 'Carry',
        'image' => 'luna.jpg'
    ]);

    Hero::create([
        'name' => 'Chaos Knight',
        'role' => 'Carry',
        'image' => 'chaos.jpg'
    ]);

    Hero::create([
        'name' => 'Sven',
        'role' => 'Carry',
        'image' => 'sven.jpg'
    ]);

    Hero::create([
        'name' => 'Tiny',
        'role' => 'Carry',
        'image' => 'tiny.jpg'
    ]);

    Hero::create([
        'name' => 'Earthshaker',
        'role' => 'Support',
        'image' => 'earth.jpg'
    ]);

    Hero::create([
        'name' => 'Sand King',
        'role' => 'Initiator',
        'image' => 'sand.jpg'
    ]);

    Hero::create([
        'name' => 'Slardar',
        'role' => 'Carry',
        'image' => 'slardar.jpg'
    ]);

    Hero::create([
        'name' => 'Kunkka',
        'role' => 'Carry',
        'image' => 'kunkka.jpg'
    ]);


    Hero::create([
        'name' => 'Pudge',
        'role' => 'Tank',
        'image' => 'pudge.jpg'
    ]);

    Hero::create([
        'name' => 'Lifestealer',
        'role' => 'Carry',
        'image' => 'lifestealer.jpg'
    ]);

    Hero::create([
        'name' => 'Night Stalker',
        'role' => 'Carry',
        'image' => 'night.jpg'
    ]);

    Hero::create([
        'name' => 'Doom',
        'role' => 'Carry',
        'image' => 'doom.jpg'
    ]);

    Hero::create([
        'name' => 'Spectre',
        'role' => 'Carry',
        'image' => 'spectre.jpg'
    ]);

    Hero::create([
        'name' => 'Weaver',
        'role' => 'Carry',
        'image' => 'weaver.jpg'
    ]);


}
}
