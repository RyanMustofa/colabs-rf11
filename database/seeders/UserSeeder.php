<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'photo_user' => 'images/user/photo/default.jpg', 
            'cover_user' => 'images/user/cover/default.jpg', 
            'password' => bcrypt('password'),
            'address' => 'Karanganyar',
            'gender' => 'Laki-Laki',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'uploader',
            'email' => 'uploader@uploader.com',
            'photo_user' => 'images/user/photo/default.jpg', 
            'cover_user' => 'images/user/cover/default.jpg',  
            'password' => bcrypt('password'),
            'address' => 'Mojogedang',
            'gender' => 'Perempuan',
            'role' => 'uploader',
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'photo_user' => 'images/user/photo/default.jpg', 
            'cover_user' => 'images/user/cover/default.jpg',  
            'password' => bcrypt('password'),
            'address' => 'Matesih',
            'gender' => 'Laki-laki',
            'role' => 'user',
        ]);
    }
}
