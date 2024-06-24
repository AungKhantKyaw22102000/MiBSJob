<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'akk',
            'employee_id' => 'MiBSCON5004',
            'email' => 'admin@gmail.com',
            'role' => 'it',
            'position' => 'IT',
            'gender' => 'male',
            'password' => Hash::make('admin123')
        ]);
    }
}
