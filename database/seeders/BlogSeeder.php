<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Blog::create([
            'title'=> 'Postingan 1',
            'user_id' => 3,
            'blog_category_id' => 2, 
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam.' , 
            'cover' => 'images/blog/default.jpg', 
            'status'=> 'publish', 
            'slug' => Str::slug('Postingan 1')
        ]);
        \App\Models\Blog::create([
            'title'=> 'Postingan 2',
            'user_id' => 3,
            'blog_category_id' => 2, 
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam.' , 
            'cover' => 'images/blog/default.jpg', 
            'status'=> 'publish', 
            'slug' => Str::slug('Postingan 2')
        ]);
    }
}
