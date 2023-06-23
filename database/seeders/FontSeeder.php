<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FontSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('truncate table fonts');
        DB::table('fonts')->insert([
            ['id_font'=>3, 'font'=>"iPhone 6"],
            ['id_font'=>3, 'font'=>"iPhone 6 Plus / 6S Plus"],
            ['id_font'=>3, 'font'=>"iPhone 6S"],
            ['id_font'=>2, 'font'=>"iPhone SE (2020)"],
            ['id_font'=>2, 'font'=>"iPhone 7"],
            ['id_font'=>2, 'font'=>"iPhone 7 Plus / 8 Plus"],
            ['id_font'=>3, 'font'=>"iPhone 8"],
            ['id_font'=>3, 'font'=>"iPhone X / XS"],
            ['id_font'=>3, 'font'=>"iPhone XR"],
            ['id_font'=>1, 'font'=>"iPhone XS max"],
            ['id_font'=>4, 'font'=>"iPhone 11"],
            ['id_font'=>5, 'font'=>"iPhone 11 Pro"],
            ['id_font'=>5, 'font'=>"iPhone 11 Pro Max"],
            ['id_font'=>4, 'font'=>"iPhone 12"],
            ['id_font'=>4, 'font'=>"iPhone 12 Mini"],
            ['id_font'=>4, 'font'=>"iPhone 12 Pro"],
            ['id_font'=>4, 'font'=>"iPhone 12 Pro Max"],
            ['id_font'=>7, 'font'=>"iPhone 13"],
            ['id_font'=>7, 'font'=>"iPhone 13 Mini"],
            ['id_font'=>7, 'font'=>"iPhone 13 Pro"],
            ['id_font'=>7, 'font'=>"iPhone 13 Pro Max"],
        ]);
    }
}
