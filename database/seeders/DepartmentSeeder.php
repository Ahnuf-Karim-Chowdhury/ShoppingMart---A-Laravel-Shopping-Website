<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $departments = [
            [
                'name' => 'Electronics',
                'slug' => 'electronics',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fashion',
                'slug' => 'fashion',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Health & Beauty',
                'slug' => Str::slug('Health & Beauty'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Books & Audible',
                'slug' => Str::slug('Books & Audible'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Home, Garden & Tools',
                'slug' => Str::slug('Home, Garden & Tools'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Groceries',
                'slug' => Str::slug('Groceries'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Toys & Games',
                'slug' => Str::slug('Toys & Games'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sports & Outdoors',
                'slug' => Str::slug('Sports & Outdoors'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Automotive',
                'slug' => Str::slug('Automotive'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pet Supplies',
                'slug' => Str::slug('Pet Supplies'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Office Supplies',
                'slug' => Str::slug('Office Supplies'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Music & Instruments',
                'slug' => Str::slug('Music & Instruments'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Movies & TV',
                'slug' => Str::slug('Movies & TV'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Baby Products',
                'slug' => Str::slug('Baby Products'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jewelry',
                'slug' => Str::slug('Jewelry'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shoes',
                'slug' => Str::slug('Shoes'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Furniture',
                'slug' => Str::slug('Furniture'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Appliances',
                'slug' => Str::slug('Appliances'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tools & Home Improvement',
                'slug' => Str::slug('Tools & Home Improvement'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Arts, Crafts & Sewing',
                'slug' => Str::slug('Arts, Crafts & Sewing'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            
        ];

        // Inserted the departments into the database
        DB::table('departments')->insert($departments);
    }
}
