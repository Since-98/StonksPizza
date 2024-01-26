<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class status extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::insert([
            'id' => '1',
            'name' => 'Besteld',
        ]);

        Status::insert([
            'id' => '2',
            'name' => 'Wordt bereid',
        ]);

        Status::insert([
            'id' => '3',
            'name' => 'In de oven',
        ]);

        Status::insert([
            'id' => '4',
            'name' => 'Onderweg',
        ]);

        Status::insert([
            'id' => '5',
            'name' => 'Bezorgd',
        ]);

        Status::insert([
            'id' => '6',
            'name' => 'Geannuleerd',
        ]);
    }
    }
