<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\RolesEnum;

class UserSeeder extends Seeder
{
    /** * Run the database seeds. */ public function run(): void
    {   
        /* default User::factory Password is : "password" */

        User::factory()->create([
            'name' => 'User', 
            'email' => 'user@1.com' 
            ])->assignRole(RolesEnum::User->value);

        User::factory()->create([
            'name' => 'Vendor', 
            'email' => 'vendor@1.com' 
            ])->assignRole(RolesEnum::Vendor->value);
            
        User::factory()->create([
            'name' => 'Admin', 
            'email' => 'admin@1.com' 
            ])->assignRole(RolesEnum::Admin->value);
    }
}
