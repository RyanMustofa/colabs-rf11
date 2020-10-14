<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_user extends Model
{
    use HasFactory;
    protected $table = 'contact_users';
    protected $fillable = [
        'user_id',
        'whatsapp_number',
        'link_telegram',
        'link_instagram',
        'link_facebook'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
