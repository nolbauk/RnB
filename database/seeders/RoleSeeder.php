<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder {
    // fix
    public function run(): void {
        Role::insert([
            ['name' => 'user'],
            ['name' => 'admin']
        ]);
    }
}
