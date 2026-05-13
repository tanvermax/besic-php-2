<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // User::create([
        //     'name' => 'Admin User',
        //     'email' => 'admin@example.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password123'),
        //     'remember_token' => Str::random(10),
        // ]);
        
 for ($i = 1; $i <= 100; $i++) {
            DB::table('clients',)->insert([
                'name' => Str::random(3),
                'email' => Str::random(3) . "@gmail.com",
                'age' => rand(10, 40),
                'phpne'=>rand(01700000000,019000000000)

            ]);
        }
    
    }
}
