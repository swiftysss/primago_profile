<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $hashmake = Hash::make('P@ssw0rd123');
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'role_id' => 1,
            'password' => $hashmake
        ]);   
    }
}
