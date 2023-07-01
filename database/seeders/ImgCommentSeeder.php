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
//            комент_айді треба писати як продукт_айді
            ['comment_id'=>1, 'img'=>"https://ugc.joomcdn.net/f3a29347520c12fc2e03a1760fe97a828308e195_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>1, 'img'=>"https://ugc.joomcdn.net/e7e2ae7874c4c2084e7bbbda80b57a043e1d9f65_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>1, 'img'=>"https://ugc.joomcdn.net/f4dbc92584e2db5bc28f57243d75086b5374d018_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>2, 'img'=>"https://ugc.joomcdn.net/776809a513f0b4eaa2991aeea43dca085a98fb92_92_200.jpeg",'sort'=>0 ],
            ['comment_id'=>4, 'img'=>"https://ugc.joomcdn.net/3f3b3246b7e5e844eaf083d93c83a9450b714f00_74_100.jpeg",'sort'=>0 ],
            ['comment_id'=>4, 'img'=>"https://ugc.joomcdn.net/96674e3504ce2b739e07761ee01d3034030331ab_105_200.jpeg",'sort'=>0 ],
            ['comment_id'=>5, 'img'=>"https://ugc.joomcdn.net/39dd454b2bb4f9d4addfd392e3f99b8a6a7a9b0a_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>6, 'img'=>"https://ugc.joomcdn.net/617353e8345dd40707ac03788f88d90f4f91c1c3_90_200.jpeg",'sort'=>0 ],


            ['comment_id'=>4, 'img'=>"https://ugc.joomcdn.net/327f7319afefa3200661a228e6842da62335500f_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>3, 'img'=>"https://ugc.joomcdn.net/8d72e50585c16f26bab4754c2e6632d02cba3ab6_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>3, 'img'=>"https://ugc.joomcdn.net/77779ec2a0063fe45d20689da8b78c486ae32bf8_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>2, 'img'=>"https://ugc.joomcdn.net/18b0d7701c3c29a8cc7014a816022b5f8143d8d0_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>5, 'img'=>"https://ugc.joomcdn.net/c392a4d207118641cca4dc98a2491889246fd561_112_200.jpeg",'sort'=>0 ],
            ['comment_id'=>5, 'img'=>"https://ugc.joomcdn.net/919f53148457d32e83e05ecdcf26b917d67aa838_95_100.jpeg",'sort'=>0 ],
            ['comment_id'=>4, 'img'=>"https://ugc.joomcdn.net/a0cd39592f89ca18f88b33fb0b6273aa2902d734_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>4, 'img'=>"https://ugc.joomcdn.net/a0cd39592f89ca18f88b33fb0b6273aa2902d734_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>4, 'img'=>"https://ugc.joomcdn.net/507deb59d96e73721d5b7f7c32abbabb1c508ea2_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>2, 'img'=>"https://ugc.joomcdn.net/9fc420ce83a69540218cf4a2953b0ca78bfb7205_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>1, 'img'=>"https://ugc.joomcdn.net/7d69adb88adf8a71488184901ee86ece22c9400d_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>1, 'img'=>"https://ugc.joomcdn.net/4d015561f44b502e2a5d14f1341624d5262f9da3_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>1, 'img'=>"https://ugc.joomcdn.net/64cab03c4d12bd07eb107cc946beae7bb9c5b2a5_115_200.jpeg",'sort'=>0 ],
            ['comment_id'=>1, 'img'=>"https://ugc.joomcdn.net/2006cb822ae87de7644ffb306737faeba1569e8c_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>3, 'img'=>"https://ugc.joomcdn.net/a46f66b4301929e2d94a8c38fff5e927a2ea1be2_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>3, 'img'=>"https://ugc.joomcdn.net/48b951e9a34e9c734993108793adf9c508022af1_75_100.jpeg",'sort'=>0 ],
            ['comment_id'=>7, 'img'=>"https://ugc.joomcdn.net/91134b7941f210e72442ecdf5e2bdfccf3dac470_100_75.jpeg",'sort'=>0 ],
            ['comment_id'=>9, 'img'=>"https://ugc.joomcdn.net/0c411b637d850b155668870a337369a9e4df7b98_100_75.jpeg",'sort'=>0 ],

        ]);
    }
}
