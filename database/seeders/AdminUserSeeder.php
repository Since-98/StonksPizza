<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
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
            'name' => 'Wahaj',
            'email' => 'Wahaj@pizzastonks.nl',
            'password' => bcrypt('password'),
        ]);
    }
}
