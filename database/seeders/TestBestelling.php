<?php

namespace Database\Seeders;

use App\Models\bestellingen;
use App\Models\menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestBestelling extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bestellingen')->insert([
            'id' => '1',
            'datum' => '12',
            'status' => "Bezorgd"

        ]);
    }
}
