<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('truncate table colors');
        DB::table('colors')->insert([
            ['color_id'=>3, 'color'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSy92k8i8BqjpzusUTBH-yGILktHibRysr3BXa5bScX_WNAQgQljum8GIrlpL5HOuO3v1g&usqp=CAU"],
            ['color_id'=>3, 'color'=>"https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Flag_of_Libya_%281977%E2%80%932011%29.svg/300px-Flag_of_Libya_%281977%E2%80%932011%29.svg.png"],
            ['color_id'=>3, 'color'=>"https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Purple_website.svg/1200px-Purple_website.svg.png"],
            ['color_id'=>3, 'color'=>"https://upload.wikimedia.org/wikipedia/commons/e/e4/Color-blue.JPG"],
            ['color_id'=>16, 'color'=>"https://img.joomcdn.net/c7f3606bc667ac5faa5e7cda876d065fb8eadc4c_original.jpeg"],
            ['color_id'=>16, 'color'=>"https://img.joomcdn.net/b39427ea4df237db44e08275e96cacbd830f7954_100_100.jpeg"],
            ['color_id'=>16, 'color'=>"https://img.joomcdn.net/f6d65a92fedd4d338fe6f441ad71c9b77ad9a0e4_original.jpeg"],
            ['color_id'=>16, 'color'=>"https://img.joomcdn.net/9555d95bf81a4386fc4f18db51c8fddf0a4b25e3_original.jpeg"],
            ['color_id'=>7, 'color'=>"https://img.joomcdn.net/824efd62006b74212c43bfd43f9b1a691c3e254f_original.jpeg"],
            ['color_id'=>7, 'color'=>"https://img.joomcdn.net/7661cb607d174670d22c0bfc64b4aef9d913fe51_original.jpeg"],
            ['color_id'=>7, 'color'=>"https://img.joomcdn.net/9b7e6a3f0516ba65792fb4755420c11318576f4c_original.jpeg"],
            ['color_id'=>7, 'color'=>"https://img.joomcdn.net/519f4ba9a720d4a034eab628535fdae412027621_original.jpeg"],
            ['color_id'=>7, 'color'=>"https://img.joomcdn.net/2337f88722e2b6b40e504626f5614e351ddd5bd3_original.jpeg"],
            ['color_id'=>7, 'color'=>"https://img.joomcdn.net/d0a0e464eef1a710f8d6e8c57fbb9eb3bf469e2e_original.jpeg"],
            ['color_id'=>7, 'color'=>"https://img.joomcdn.net/307e51e7f29cfa09d39a0273083bd0a9c3d6cfa2_original.jpeg"],
            ['color_id'=>7, 'color'=>"https://img.joomcdn.net/880836073c4750b1e6765ba9a8c54b3ce1de8cb4_original.jpeg"],
            ['color_id'=>7, 'color'=>"https://img.joomcdn.net/a2ee577a443c43d55eb9c1708d3947372b0d9dc2_original.jpeg"],
            ['color_id'=>7, 'color'=>"https://img.joomcdn.net/3885e9524f0605a36e5202ade1e8000c063ae9dc_original.jpeg"],
            ['color_id'=>7, 'color'=>"https://img.joomcdn.net/e5bbb70f7db49d0256c52fc86bdd6a85b6529606_original.jpeg"],
            ['color_id'=>7, 'color'=>"https://img.joomcdn.net/62434edb6a9a0b09cfb3ed78c27cc6452573cdf7_original.jpeg"],
            ['color_id'=>7, 'color'=>"https://img.joomcdn.net/dc861ed804d540fcabd640ff98d8576d41f2b0fb_original.jpeg"],
            ['color_id'=>7, 'color'=>"https://img.joomcdn.net/24b3a06f92242b96b6c11f2c5358e02d9a7c68e7_original.jpeg"],
            ['color_id'=>7, 'color'=>"https://img.joomcdn.net/5c3f57563ad20390af68f818c46c5bc3ed4a2bc4_original.jpeg"],
            ['color_id'=>7, 'color'=>"https://img.joomcdn.net/8dff12629b6a37981b721808c895b77b39d89bde_original.jpeg"],
            ['color_id'=>7, 'color'=>"https://img.joomcdn.net/3b65ab4d8db62fa75ad99bf0d92b6c8e292a5db5_original.jpeg"],
            ['color_id'=>7, 'color'=>"https://img.joomcdn.net/1a1b92e2ad07ea771bc6f7a1f6e18a8ed7f975d8_original.jpeg"],
            ['color_id'=>7, 'color'=>""],
        ]);
    }
}
