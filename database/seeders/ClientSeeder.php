<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i <= 100; $i++) {
            DB::table('client',)->insert([
                'name' => Str::random(3),
                'email' => Str::random(3) . "@gmail.com",
                'age' => rand(10, 40),

            ]);
        }
    }
}
