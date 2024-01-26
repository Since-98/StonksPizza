<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'id' => '1',
            'first_name' => 'Lucas',
            'last_name' => 'de raaij',
            'address' => 'straatnaam 1',
            'phone' => '06123886789',
            'zipcode' => '1111AB',
            'city' => 'Eindhoven',
            'personal_email' => 'user@domein.nl',
            'birth_date' => '2022-01-01',
            'burger_service_nummer' => '11111111111',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Employee::create([
            'id' => '2',
            'first_name' => 'peter',
            'last_name' => 'Park',
            'address' => 'straatnaam 1',
            'phone' => '06123456789',
            'zipcode' => '1111AB',
            'city' => 'Eindhoven',
            'personal_email' => 'user@domein.nl',
            'birth_date' => '2022-01-01',
            'burger_service_nummer' => '11111111111',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Employee::create([
            'id' => '3',
            'first_name' => 'King',
            'last_name' => 'Park',
            'address' => 'straatnaam 1',
            'phone' => '06123456789',
            'zipcode' => '1111AB',
            'city' => 'Eindhoven',
            'personal_email' => 'user@domein.nl',
            'birth_date' => '2022-01-01',
            'burger_service_nummer' => '11111111111',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Employee::create([
            'id' => '4',
            'first_name' => 'Dominic',
            'last_name' => 'achternaam',
            'address' => 'straatnaam 1',
            'phone' => '06123456789',
            'zipcode' => '1111AB',
            'city' => 'Eindhoven',
            'personal_email' => 'user@domein.nl',
            'birth_date' => '2022-01-01',
            'burger_service_nummer' => '11111111111',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Employee::create([
            'id' => '5',
            'first_name' => 'Nero',
            'last_name' => 'achternaam',
            'address' => 'straatnaam 1',
            'phone' => '06123456789',
            'zipcode' => '1111AB',
            'city' => 'Eindhoven',
            'personal_email' => 'user@domein.nl',
            'birth_date' => '2022-01-01',
            'burger_service_nummer' => '11111111111',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Employee::create([
            'id' => '6',
            'first_name' => 'Payton',
            'last_name' => 'N.I',
            'address' => 'straatnaam 1',
            'phone' => '06123456789',
            'zipcode' => '1111AB',
            'city' => 'Eindhoven',
            'personal_email' => 'user@domein.nl',
            'birth_date' => '2022-01-01',
            'burger_service_nummer' => '11111111111',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Employee::create([
            'id' => '7',
            'first_name' => 'Hans',
            'last_name' => 'Sjorg',
            'address' => 'straatnaam 1',
            'phone' => '01123456789',
            'zipcode' => '1111AB',
            'city' => 'minnesota',
            'personal_email' => 'user@in.nl',
            'birth_date' => '2022-01-01',
            'burger_service_nummer' => '11111111111',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
