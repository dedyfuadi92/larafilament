<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user1 = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
        ]);
        $user2 = User::factory()->create([
            'name' => 'Editor',
            'email' => 'editor@test.com',
        ]);
        $role = Role::create(['name' => 'admin']);
        $user1->assignRole($role);
        $role = Role::create(['name' => 'editor']);
        $user1->assignRole($role);
    }
}
