<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(Contact_user_Seeder::class);
        $this->call(BlogCategorySeeder::class);
        $this->call(PortfolioCategorySeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(portfoliogallerySeeder::class);
        $this->call(CommentPortofolioSeeder::class);
        $this->call(CommentBlogSeeder::class);
    }
}
