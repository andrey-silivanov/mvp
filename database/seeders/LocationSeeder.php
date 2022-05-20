<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(file_get_contents(__DIR__ . '/../sql/mvp_countries.sql'));
        DB::unprepared(file_get_contents(__DIR__ . '/../sql/mvp_states.sql'));
        DB::unprepared(file_get_contents(__DIR__ . '/../sql/mvp_cities.sql'));
    }
}
