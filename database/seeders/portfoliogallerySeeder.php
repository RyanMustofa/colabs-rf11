<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class portfoliogallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Portfolio_Gallery::create([
            'portfolio_id' => 2,
            'photo' => 'image/portfolio/default.jpg'
        ]);
        \App\Models\Portfolio_Gallery::create([
            'portfolio_id' => 2,
            'photo' => 'image/portfolio/default.jpg'
        ]);
        \App\Models\Portfolio_Gallery::create([
            'portfolio_id' => 1,
            'photo' => 'image/portfolio/default.jpg'
        ]);
        \App\Models\Portfolio_Gallery::create([
            'portfolio_id' => 1,
            'photo' => 'image/portfolio/default.jpg'
        ]);
    }
}
