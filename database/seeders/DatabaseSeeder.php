<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\info;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $data= ['PHP','JS','REACT','Python'];

        foreach($data as $d){
            Skill::create(["name"=>$d]);
        }


        for ($i = 0; $i < 10; $i++) {
            $user = User::create([
                'name' => "User $i",
                'email' => "user$i@example.com",
                'password' => bcrypt('password123'),
        ]);


            # code...
        info::create([
                "user_id" => $i,
                "address" => "Dhaka $i",
                "zip_code" => $i % 2 == 0 ? rand(100, 200) : null,
                "phone" => rand(1000, 5000),
            ]);
        }

        $this->call([
            AdminSeeder::class,
            ClientSeeder::class,

        ]);
    }
}
