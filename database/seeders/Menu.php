<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Menu extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu')->insert([
            'pizza' => "Margeritha",
            'hoeveelheid' => "1",
            'ingrediënten' => "kaas",
            'prijs' => '12',
            'grootte' => 'medium',
            'plaatje' => 'https://www.example.com/margeritha.jpg' // Replace this with the actual image URL
        ]);

        DB::table('menu')->insert([
            'pizza' => "Pepperoni",
            'hoeveelheid' => "1",
            'ingrediënten' => "tomato sauce, mozzarella, pepperoni",
            'prijs' => '15',
            'grootte' => 'large',
            'plaatje' => 'https://static.vecteezy.com/system/resources/previews/028/086/330/non_2x/freshly-baked-pepperoni-pizza-isolated-on-transparent-background-file-cut-out-ai-generated-png.png' // Replace this with the actual image URL
        ]);

        DB::table('menu')->insert([
            'pizza' => "Vegetarian",
            'hoeveelheid' => "1",
            'ingrediënten' => "bell peppers, mushrooms, olives, onions",
            'prijs' => '14',
            'grootte' => 'medium',
            'plaatje' => 'https://static.vecteezy.com/system/resources/previews/021/491/772/original/vegetarian-pizza-isolated-on-a-transparent-background-png.png' // Replace this with the actual image URL
        ]);

        // Add more pizza entries as needed
        DB::table('menu')->insert([
            'pizza' => "Hawaiian",
            'hoeveelheid' => "1",
            'ingrediënten' => "ham, pineapple, mozzarella",
            'prijs' => '16',
            'grootte' => 'large',
            'plaatje' => 'https://img.freepik.com/premium-psd/tasty-hawaiian-pizza-isolated-transparent-background_927015-1116.jpg' // Replace this with the actual image URL
        ]);

        DB::table('menu')->insert([
            'pizza' => "BBQ Chicken",
            'hoeveelheid' => "1",
            'ingrediënten' => "barbecue sauce, chicken, red onions",
            'prijs' => '17',
            'grootte' => 'medium',
            'plaatje' => 'https://img.freepik.com/premium-photo/top-view-bbq-chicken-pizza-with-tomatoes-paprika-isolated-white-background_79762-3009.jpg' // Replace this with the actual image URL
        ]);
        DB::table('menu')->insert([
            'pizza' => "Hawaiian",
            'hoeveelheid' => "1",
            'ingrediënten' => "ham, pineapple, mozzarella",
            'prijs' => '16',
            'grootte' => 'large',
            'plaatje' => 'https://img.freepik.com/premium-psd/tasty-hawaiian-pizza-isolated-transparent-background_927015-1116.jpg' // Replace this with the actual image URL
        ]);



        DB::table('menu')->insert([
            'pizza' => "pizza shoarma",
            'hoeveelheid' => "4",
            'ingrediënten' => "red onions,pickles,shoarma,garlic sauce",
            'prijs' => '17',
            'grootte' => 'small',
            'plaatje' => 'https://static.vecteezy.com/system/resources/previews/021/311/744/original/pizza-transparent-background-png.png' // Replace this with the actual image URL
        ]);


DB::table('menu')->insert([
    'pizza' => "Veggie Supreme",
    'hoeveelheid' => "1",
    'ingrediënten' => "mushrooms, bell peppers, olives, onions, tomatoes",
    'prijs' => '15',
    'grootte' => 'medium',
    'plaatje' => 'https://example.com/veggie-supreme.jpg' // Replace this with the actual image URL
]);

DB::table('menu')->insert([
    'pizza' => "Meat Lovers",
    'hoeveelheid' => "1",
    'ingrediënten' => "pepperoni, sausage, bacon, ham",
    'prijs' => '18',
    'grootte' => 'large',
    'plaatje' => 'https://example.com/meat-lovers.jpg' // Replace this with the actual image URL
]);

DB::table('menu')->insert([
    'pizza' => "Seafood Delight",
    'hoeveelheid' => "1",
    'ingrediënten' => "shrimp, clams, calamari, garlic",
    'prijs' => '20',
    'grootte' => 'medium',
    'plaatje' => 'https://thumbs.dreamstime.com/b/delicious-pizza-seafood-wooden-stand-top-view-70767069.jpg' // Replace this with the actual image URL
]);


    }
}
