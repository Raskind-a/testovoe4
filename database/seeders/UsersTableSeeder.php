<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'surname' => 'Adminov',
            'login' => 'admin',
            'password' => bcrypt('admin'),
            'has_admin_access' => true,
        ]);

        User::factory()->count(50)->create();
    }
}
