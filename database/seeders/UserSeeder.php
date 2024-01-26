<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => '1',
                'name' => 'Lucas',
                'email' => 'Lucas@pizzasumma.nl',
                'password' => bcrypt('password'),
            ]);
            User::create([
                'id' => '2',
                    'name' => 'Peter',
                    'email' => 'Peter@pizzasumma.nl',
                    'password' => bcrypt('password'),
                ]);
        User::create([
        'id' => '3',
            'name' => 'King',
            'email' => 'King@pizzasumma.nl',
            'password' => bcrypt('password'),
        ]);
        User::create([
        'id' => '4',
            'name' => 'Dominic',
            'email' => 'Dominic@pizzasumma.nl',
            'password' => bcrypt('password'),
        ]);
        User::create([
        'id' => '5',
            'name' => 'Nero achternaam',
            'email' => 'Nero@pizzasumma.nl',
            'password' => bcrypt('password'),
        ]);
        User::create([
            'id' => '6',
                'name' => 'Payton N.I',
                'email' => 'hah@test.test',
                'password' => bcrypt('password'),
        ]);
        User::create([
            'id' => '7',
                'name' => 'Hans Sjorg',
                'email' => 'kvv@test.test',
                'password' => bcrypt('password'),
        ]);
        User::create([
            'id' => '8',
                'name' => 'Billy bear',
                'email' => 'user@in.nl',
                'password' => bcrypt('password'),
        ]);
    }
}
