<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('truncate table galleries ');
        DB::table('galleries')->insert([
            ["id_img"=>11, "img"=>'https://img.joomcdn.net/2d2d09154670abe9e66de6ff6d6477d2e3203e69_original.jpeg'],
            ["id_img"=>11, "img"=>'https://img.joomcdn.net/9ee41c925b4a44058d8871a4cb4a0c98d7e8a1a9_original.jpeg'],
            ["id_img"=>11, "img"=>'https://img.joomcdn.net/061d12ab727b5e8f823c04aa346f241694e82556_original.jpeg'],
            ["id_img"=>11, "img"=>'https://img.joomcdn.net/9c07c2de2a8bb79db574d29cf9fe0c706f4058bd_original.jpeg'],
            ["id_img"=>11, "img"=>'https://img.joomcdn.net/42cc9d622a689efa9f46b9ab2661941e13ba5fe8_original.jpeg'],
            ["id_img"=>11, "img"=>'https://img.joomcdn.net/69b65455cf5b5b13fdd16399be5c31435f794dbd_original.jpeg'],
            ["id_img"=>11, "img"=>'https://img.joomcdn.net/69b65455cf5b5b13fdd16399be5c31435f794dbd_original.jpeg'],
            ["id_img"=>11, "img"=>'https://img.joomcdn.net/b01ef89c41db1b6fe0ab497004f5c5e60155756c_original.jpeg'],
            ["id_img"=>11, "img"=>'https://img.joomcdn.net/b72ae1833d57a109dbce86796a105babd225bbd2_original.jpeg'],
            ["id_img"=>11, "img"=>'https://img.joomcdn.net/c77975c9da082222b8db15cfb542e295a5d301b5_original.jpeg'],
            ["id_img"=>11, "img"=>'https://img.joomcdn.net/71513de16ff6174e3c7e8b0b7fa98f62e021f799_original.jpeg'],
//            ["id_img"=>11, "img"=>''],
        ]);
    }
}
