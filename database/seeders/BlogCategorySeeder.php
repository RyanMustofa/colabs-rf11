<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Blog_Category::create([
            'category_name' => 'Berita'
        ]);
        \App\Models\Blog_Category::create([
            'category_name' => 'Postingan'
        ]);
        \App\Models\Blog_Category::create([
            'category_name' => 'Pengumuman'
        ]);
    }
}
