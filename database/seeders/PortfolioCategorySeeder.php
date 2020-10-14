<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PortfolioCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Portfolio_Category::create([
            'category_name' => 'Makanan & Minuman'
        ]);
        \App\Models\Portfolio_Category::create([
            'category_name' => 'Kecantikan'
        ]);
        \App\Models\Portfolio_Category::create([
            'category_name' => 'Aksesoris'
        ]);
        \App\Models\Portfolio_Category::create([
            'category_name' => 'Elekronik'
        ]);
        \App\Models\Portfolio_Category::create([
            'category_name' => 'Kesehatan'
        ]);
        \App\Models\Portfolio_Category::create([
            'category_name' => 'Dapur '
        ]);
        \App\Models\Portfolio_Category::create([
            'category_name' => 'Otomotif'
        ]);
        \App\Models\Portfolio_Category::create([
            'category_name' => 'Rumah tangga '
        ]);
        \App\Models\Portfolio_Category::create([
            'category_name' => 'Fashion Pria '
        ]);
        \App\Models\Portfolio_Category::create([
            'category_name' => 'Fashion Wanita '
        ]);
        \App\Models\Portfolio_Category::create([
            'category_name' => 'Olahraga'
        ]);
    }
}
