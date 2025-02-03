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
            'name' => 'Chen',
            'role' => 'Support',
            'image' => 'puki.jfif'
        ]);
        Hero::create([
            'name' => 'Mirana',
            'role' => 'Marksman',
            'image' => 'Mirana_Large.png'
        ]);

        Hero::create([
            'name' => 'Chen',
            'role' => 'Support',
            'image' => 'puki.jfif'
        ]);
        Hero::create([
            'name' => 'Mirana',
            'role' => 'Marksman',
            'image' => 'Mirana_Large.png'
        ]);

        Hero::create([
            'name' => 'Chen',
            'role' => 'Support',
            'image' => 'puki.jfif'
        ]);
        Hero::create([
            'name' => 'Mirana',
            'role' => 'Marksman',
            'image' => 'Mirana_Large.png'
        ]);

        Hero::create([
            'name' => 'Chen',
            'role' => 'Support',
            'image' => 'puki.jfif'
        ]);
        Hero::create([
            'name' => 'Mirana',
            'role' => 'Marksman',
            'image' => 'Mirana_Large.png'
        ]);

        Hero::create([
            'name' => 'Chen',
            'role' => 'Support',
            'image' => 'puki.jfif'
        ]);
        Hero::create([
            'name' => 'Chen',
            'role' => 'Support',
            'image' => 'puki.jfif'
        ]);
        Hero::create([
            'name' => 'Mirana',
            'role' => 'Marksman',
            'image' => 'Mirana_Large.png'
        ]);

        Hero::create([
            'name' => 'Chen',
            'role' => 'Support',
            'image' => 'puki.jfif'
        ]);
        Hero::create([
            'name' => 'Chen',
            'role' => 'Support',
            'image' => 'puki.jfif'
        ]);
        // Tambahkan hero lainnya sesuai kebutuhan
    
    }
}
