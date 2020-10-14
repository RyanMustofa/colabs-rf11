<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment_Portofolio extends Model
{
    use HasFactory;
    protected $table = "comment_portofolios";
    protected $fillable = ['portofolio_id', 'name', 'email', 'comment'];
    public function portofolio()
    {
        return $this->belongsTo(Portfolio::class, 'portofolio_id', 'id');
    }
}
