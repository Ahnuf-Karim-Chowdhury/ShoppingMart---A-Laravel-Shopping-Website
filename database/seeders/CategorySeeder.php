<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// php artisan migrate:fresh --seed
class CategorySeeder extends Seeder
{
    /** 
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // Electronics
            [
                'name' => 'Computers',
                'department_id' => 1,
                'parent_id' => 1, // Child of Electronics
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SmartPhones',
                'department_id' => 1,
                'parent_id' => 1, // Child of Electronics
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laptops',
                'department_id' => 1,
                'parent_id' => 3, // Child of Computers
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Headphones',
                'department_id' => 1,
                'parent_id' => 1, // Child of Electronics
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tablets',
                'department_id' => 1,
                'parent_id' => 1, // Child of Electronics
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cameras',
                'department_id' => 1,
                'parent_id' => 1, // Child of Electronics
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            //SmartPhones
            [
                'name' => 'Android',
                'department_id' => 1, // Assuming 'SmartPhones' is part of the Electronics department (ID 1)
                'parent_id' => 2, // Child of SmartPhones (ID 2)
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'iPhones',
                'department_id' => 1, // Assuming 'SmartPhones' is part of the Electronics department (ID 1)
                'parent_id' => 2, // Child of SmartPhones (ID 2)
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Laptops - Asus, HP, Acer, Lenovo
            [
                'name' => 'Asus',
                'department_id' => 1, // Assuming 'Computers' is part of the Electronics department (ID 1)
                'parent_id' => 3, // Child of Laptops (ID 3)
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'HP',
                'department_id' => 1, // Assuming 'Computers' is part of the Electronics department (ID 1)
                'parent_id' => 3, // Child of Laptops (ID 3)
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Acer',
                'department_id' => 1, // Assuming 'Computers' is part of the Electronics department (ID 1)
                'parent_id' => 3, // Child of Laptops (ID 3)
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lenovo',
                'department_id' => 1, // Assuming 'Computers' is part of the Electronics department (ID 1)
                'parent_id' => 3, // Child of Laptops (ID 3)
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Fashion
            [
                'name' => 'Men\'s Clothing',
                'department_id' => 2,
                'parent_id' => 2, // Child of Fashion
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Women\'s Clothing',
                'department_id' => 2,
                'parent_id' => 2, // Child of Fashion
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Accessories',
                'department_id' => 2,
                'parent_id' => 2, // Child of Fashion
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Health & Beauty
            [
                'name' => 'Skincare',
                'department_id' => 3,
                'parent_id' => 3, // Child of Health & Beauty
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Makeup',
                'department_id' => 3,
                'parent_id' => 3, // Child of Health & Beauty
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hair Care',
                'department_id' => 3,
                'parent_id' => 3, // Child of Health & Beauty
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Books & Audible
            [
                'name' => 'Fiction',
                'department_id' => 4,
                'parent_id' => 4, // Child of Books & Audible
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Non-Fiction',
                'department_id' => 4,
                'parent_id' => 4, // Child of Books & Audible
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Audiobooks',
                'department_id' => 4,
                'parent_id' => 4, // Child of Books & Audible
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Home, Garden & Tools
            [
                'name' => 'Furniture',
                'department_id' => 5,
                'parent_id' => 5, // Child of Home, Garden & Tools
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Garden Tools',
                'department_id' => 5,
                'parent_id' => 5, // Child of Home, Garden & Tools
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lighting',
                'department_id' => 5,
                'parent_id' => 5, // Child of Home, Garden & Tools
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Groceries
            [
                'name' => 'Fresh Produce',
                'department_id' => 6,
                'parent_id' => 6, // Child of Groceries
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dairy & Eggs',
                'department_id' => 6,
                'parent_id' => 6, // Child of Groceries
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Snacks',
                'department_id' => 6,
                'parent_id' => 6, // Child of Groceries
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Toys & Games
            [
                'name' => 'Action Figures',
                'department_id' => 7,
                'parent_id' => 7, // Child of Toys & Games
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Board Games',
                'department_id' => 7,
                'parent_id' => 7, // Child of Toys & Games
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Educational Toys',
                'department_id' => 7,
                'parent_id' => 7, // Child of Toys & Games
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // Sports & Outdoors
            [
                'name' => 'Outdoor Gear',
                'department_id' => 8,
                'parent_id' => 8, // Child of Sports & Outdoors
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fitness Equipment',
                'department_id' => 8,
                'parent_id' => 8, // Child of Sports & Outdoors
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cycling',
                'department_id' => 8,
                'parent_id' => 8, // Child of Sports & Outdoors
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Automotive
            [
                'name' => 'Car Parts',
                'department_id' => 9,
                'parent_id' => 9, // Child of Automotive
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tires & Wheels',
                'department_id' => 9,
                'parent_id' => 9, // Child of Automotive
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Car Accessories',
                'department_id' => 9,
                'parent_id' => 9, // Child of Automotive
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Pet Supplies
            [
                'name' => 'Pet Food',
                'department_id' => 10,
                'parent_id' => 10, // Child of Pet Supplies
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pet Toys',
                'department_id' => 10,
                'parent_id' => 10, // Child of Pet Supplies
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pet Grooming',
                'department_id' => 10,
                'parent_id' => 10, // Child of Pet Supplies
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Office Supplies
            [
                'name' => 'Office Furniture',
                'department_id' => 11,
                'parent_id' => 11, // Child of Office Supplies
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Stationery',
                'department_id' => 11,
                'parent_id' => 11, // Child of Office Supplies
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Office Electronics',
                'department_id' => 11,
                'parent_id' => 11, // Child of Office Supplies
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Music & Instruments
            [
                'name' => 'Musical Instruments',
                'department_id' => 12,
                'parent_id' => 12, // Child of Music & Instruments
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Music Accessories',
                'department_id' => 12,
                'parent_id' => 12, // Child of Music & Instruments
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Headphones & Earbuds',
                'department_id' => 12,
                'parent_id' => 12, // Child of Music & Instruments
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Movies & TV
            [
                'name' => 'Movies',
                'department_id' => 13,
                'parent_id' => 13, // Child of Movies & TV
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'TV Shows',
                'department_id' => 13,
                'parent_id' => 13, // Child of Movies & TV
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Streaming Devices',
                'department_id' => 13,
                'parent_id' => 13, // Child of Movies & TV
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Baby Products
            [
                'name' => 'Baby Clothing',
                'department_id' => 14,
                'parent_id' => 14, // Child of Baby Products
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Diapers & Wipes',
                'department_id' => 14,
                'parent_id' => 14, // Child of Baby Products
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Baby Toys',
                'department_id' => 14,
                'parent_id' => 14, // Child of Baby Products
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Jewelry
            [
                'name' => 'Necklaces & Pendants',
                'department_id' => 15,
                'parent_id' => 15, // Child of Jewelry
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rings',
                'department_id' => 15,
                'parent_id' => 15, // Child of Jewelry
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bracelets & Bangles',
                'department_id' => 15,
                'parent_id' => 15, // Child of Jewelry
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Shoes
            [
                'name' => 'Men\'s Shoes',
                'department_id' => 16,
                'parent_id' => 16, // Child of Shoes
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Women\'s Shoes',
                'department_id' => 16,
                'parent_id' => 16, // Child of Shoes
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sports Shoes',
                'department_id' => 16,
                'parent_id' => 16, // Child of Shoes
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Furniture
            [
                'name' => 'Living Room Furniture',
                'department_id' => 17,
                'parent_id' => 17, // Child of Furniture
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bedroom Furniture',
                'department_id' => 17,
                'parent_id' => 17, // Child of Furniture
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Office Furniture',
                'department_id' => 17,
                'parent_id' => 17, // Child of Furniture
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Appliances
            [
                'name' => 'Kitchen Appliances',
                'department_id' => 18,
                'parent_id' => 18, // Child of Appliances
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Home Appliances',
                'department_id' => 18,
                'parent_id' => 18, // Child of Appliances
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laundry Appliances',
                'department_id' => 18,
                'parent_id' => 18, // Child of Appliances
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Tools & Home Improvement
            [
                'name' => 'Hand Tools',
                'department_id' => 19,
                'parent_id' => 19, // Child of Tools & Home Improvement
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Power Tools',
                'department_id' => 19,
                'parent_id' => 19, // Child of Tools & Home Improvement
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Home Improvement',
                'department_id' => 19,
                'parent_id' => 19, // Child of Tools & Home Improvement
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Arts, Crafts & Sewing
            [
                'name' => 'Craft Supplies',
                'department_id' => 20,
                'parent_id' => 20, // Child of Arts, Crafts & Sewing
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sewing Machines',
                'department_id' => 20,
                'parent_id' => 20, // Child of Arts, Crafts & Sewing
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Painting & Drawing',
                'department_id' => 20,
                'parent_id' => 20, // Child of Arts, Crafts & Sewing
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        // Inserted categories into the database
        DB::table('categories')->insert($categories);
    }
}

