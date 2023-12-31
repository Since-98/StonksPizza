<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()

    { DB::table('pizzas')->insert([
        [
            'name' => 'Margherita',
            'description' => 'Classic margherita pizza with tomato, mozzarella, and basil.',
            'image_url' => 'path/to/margherita.jpg',
            'daily_special' => false,
            'special_date' => null,
        ],
        [
            'name' => 'Pepperoni',
            'description' => 'Pepperoni pizza with extra cheese.',
            'image_url' => 'path/to/pepperoni.jpg',
            'daily_special' => false,
            'special_date' => null,
        ],
        [
            'name' => 'Vegetarian',
            'description' => 'Vegetarian pizza with mushrooms, bell peppers, olives, and onions.',
            'image_url' => 'path/to/vegetarian.jpg',
            'daily_special' => false,
            'special_date' => null,
        ],
        [
            'name' => 'Supreme',
            'description' => 'Supreme pizza with pepperoni, sausage, mushrooms, green peppers, and onions.',
            'image_url' => 'public\Photos\0006_Foorn_HeroSingleItemsSquare-21.jpg',
            'daily_special' => false,
            'special_date' => null,
        ],
        // Add more pizzas as needed
    ]);
    }
}
