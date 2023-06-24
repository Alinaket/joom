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
            ['id_font'=>3, 'font'=>"iPhone SE (2020)"],
            ['id_font'=>3, 'font'=>"iPhone 7"],
            ['id_font'=>3, 'font'=>"iPhone 7 Plus / 8 Plus"],
            ['id_font'=>3, 'font'=>"iPhone 8"],
            ['id_font'=>3, 'font'=>"iPhone X / XS"],
            ['id_font'=>3, 'font'=>"iPhone XR"],
            ['id_font'=>3, 'font'=>"iPhone XS max"],
            ['id_font'=>3, 'font'=>"iPhone 11"],
            ['id_font'=>3, 'font'=>"iPhone 11 Pro"],
            ['id_font'=>3, 'font'=>"iPhone 11 Pro Max"],
            ['id_font'=>3, 'font'=>"iPhone 12"],
            ['id_font'=>3, 'font'=>"iPhone 12 Mini"],
            ['id_font'=>3, 'font'=>"iPhone 12 Pro"],
            ['id_font'=>3, 'font'=>"iPhone 12 Pro Max"],
            ['id_font'=>3, 'font'=>"iPhone 13"],
            ['id_font'=>3, 'font'=>"iPhone 13 Mini"],
            ['id_font'=>3, 'font'=>"iPhone 13 Pro"],
            ['id_font'=>3, 'font'=>"iPhone 13 Pro Max"],
            ['id_font'=>16, 'font'=>"M"],
            ['id_font'=>16, 'font'=>"L"],
            ['id_font'=>16, 'font'=>"XL"],
            ['id_font'=>16, 'font'=>"XXL"],
            ['id_font'=>16, 'font'=>"XXXL"],
            ['id_font'=>7, 'font'=>"XS"],
            ['id_font'=>7, 'font'=>"S"],
            ['id_font'=>7, 'font'=>"M"],
            ['id_font'=>7, 'font'=>"L"],
            ['id_font'=>7, 'font'=>"XL"],
            ['id_font'=>7, 'font'=>"XXL"],
            ['id_font'=>7, 'font'=>"XXXL"],
            ['id_font'=>11, 'font'=>"2"],
            ['id_font'=>11, 'font'=>"3"],
            ['id_font'=>11, 'font'=>"4"],
            ['id_font'=>21, 'font'=>"M"],
            ['id_font'=>21, 'font'=>"L"],
            ['id_font'=>21, 'font'=>"XL"],
            ['id_font'=>21, 'font'=>"XXL"],
            ['id_font'=>21, 'font'=>"XXXL"],
            ['id_font'=>21, 'font'=>"XXXXL"],
            ['id_font'=>21, 'font'=>"XXXXXL"],
            ['id_font'=>21, 'font'=>"6XL"],
            ['id_font'=>21, 'font'=>"7XL"],
            ['id_font'=>21, 'font'=>"8XL"],

        ]);
    }
}
