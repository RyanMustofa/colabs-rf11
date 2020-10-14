<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Portfolio::create([
            'portfolio_name'=> 'Ronde khas karanganyar',
            'user_id' => 3,
            'portfolio_category_id' => 1, 
            'price' => 20000, 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam.' , 
            'status'=> 1, 
            'slug' => Str::slug('Ronde khas karanganyar')
        ]);
        \App\Models\Portfolio::create([
            'portfolio_name'=> 'Gantungan Kunci',
            'user_id' => 3,
            'portfolio_category_id' => 3, 
            'price' => 500, 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam.' , 
            'status'=> 1, 
            'slug' => Str::slug('Gantungan Kunci')
        ]);
        \App\Models\Portfolio::create([
            'portfolio_name'=> 'Sabun Kecantikan',
            'user_id' => 3,
            'portfolio_category_id' => 2, 
            'price' => 2000, 
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora fuga sapiente culpa debitis expedita, harum maxime sit perspiciatis numquam ipsum nemo? Dolor quis maiores odio quam aliquam delectus sequi numquam.' , 
            'status'=> 1, 
            'slug' => Str::slug('Sabun Kecantikan')
        ]);
    }
}
