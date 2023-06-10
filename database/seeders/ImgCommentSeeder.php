<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImgCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('truncate table img_comments ');
        DB::table('img_comments')->insert([
            ['comment_id'=>1, 'img'=>"https://ugc.joomcdn.net/f3a29347520c12fc2e03a1760fe97a828308e195_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>1, 'img'=>"https://ugc.joomcdn.net/e7e2ae7874c4c2084e7bbbda80b57a043e1d9f65_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>1, 'img'=>"https://ugc.joomcdn.net/f4dbc92584e2db5bc28f57243d75086b5374d018_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>2, 'img'=>"https://ugc.joomcdn.net/776809a513f0b4eaa2991aeea43dca085a98fb92_92_200.jpeg",'sort'=>0 ],
            ['comment_id'=>4, 'img'=>"https://ugc.joomcdn.net/3f3b3246b7e5e844eaf083d93c83a9450b714f00_74_100.jpeg",'sort'=>0 ],
            ['comment_id'=>4, 'img'=>"https://ugc.joomcdn.net/96674e3504ce2b739e07761ee01d3034030331ab_105_200.jpeg",'sort'=>0 ],
            ['comment_id'=>5, 'img'=>"https://ugc.joomcdn.net/39dd454b2bb4f9d4addfd392e3f99b8a6a7a9b0a_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>6, 'img'=>"https://ugc.joomcdn.net/617353e8345dd40707ac03788f88d90f4f91c1c3_90_200.jpeg",'sort'=>0 ],
        ]);
    }
}
