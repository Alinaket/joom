<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('truncate table categories');
        DB::table('categories')->insert([
            ['parent_id'=>0, 'name'=>"Жіноча мода",'img'=>"https://upload.joomcdn.net/87473bdc9ece32e07f00c4ff477ae11d6d1fa111_46_46.png" ],
            ['parent_id'=>1, 'name'=>"Аксесуари",'img'=>"" ],
            ['parent_id'=>2, 'name'=>"Прикраси та біжутерія",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Сережки",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Висячі сережки",'img'=>""],
            ['parent_id'=>1, 'name'=>"Одяг",'img'=>""],
            ['parent_id'=>1, 'name'=>"Одяг",'img'=>""],

//            ['parent_id'=>0, 'name'=>"",'img'=>"" ],
//            ['parent_id'=>0, 'name'=>"",'img'=>"" ],
//            ['parent_id'=>0, 'name'=>"",'img'=>"" ],
//            ['parent_id'=>0, 'name'=>"",'img'=>"" ],
//            ['parent_id'=>0, 'name'=>"",'img'=>"" ],
        ]);
    }
}
