<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact_user;
class Contact_user_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact_user::create([
            'user_id' => 1,
            'whatsapp_number' => '-',
            'link_telegram' => '-',
            'link_instagram' => '-' ,
            'link_facebook' => '-'
        ]);

        Contact_user::create([
            'user_id' => 2,
            'whatsapp_number' => '-',
            'link_telegram' => '-',
            'link_instagram' => '-' ,
            'link_facebook' => '-'
        ]);

        Contact_user::create([
            'user_id' => 3,
            'whatsapp_number' => '-',
            'link_telegram' => '-',
            'link_instagram' => '-' ,
            'link_facebook' => '-'
        ]);
    }
}
