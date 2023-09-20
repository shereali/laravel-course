<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                $user = [ "name" => "Rifat",
                    
                    "email" => "rifat@gmail.com",
                    "phone" => "018477578585",
                    "password" => bcrypt('rifat@gmail.com')
                    ];

                User::create($user);
            
        
    }
}
