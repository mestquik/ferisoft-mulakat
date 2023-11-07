<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create(["text"=>"Teknoloji yazı",
    "category_id"=>1,"header"=>"Teknoloji Başlık"]);


    Post::create(["text"=>"Araba yazı",
    "category_id"=>2,"header"=>"Araba Başlık"]);

    Post::create(["text"=>"Edebiyat yazı",
    "category_id"=>3,"header"=>"Edebiyat Başlık"]);
    }
}
