<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CommentBlog::create([
            'blog_id' => 2,
            'name' => 'jerry',
            'email' => 'jerry22@gmail.com',
            'comment' => 'bagus sekali portofolionya'
        ]);
        \App\Models\CommentBlog::create([
            'blog_id' => 1,
            'name' => 'mahfud',
            'email' => 'mahfud22@gmail.com',
            'comment' => 'bagus sekali portofolionya'
        ]);
        \App\Models\CommentBlog::create([
            'blog_id' => 1,
            'name' => 'yuda',
            'email' => 'yuda22@gmail.com',
            'comment' => 'bagus sekali portofolionya'
        ]);
    }
}
