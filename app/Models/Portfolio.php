<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $table = 'portfolio';
    protected $fillable = ['portfolio_name','user_id','portfolio_category_id', 'price', 'description', 'status', 'slug'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function portfolio_category()
    {
        return $this->belongsTo(Portfolio_Category::class, 'portfolio_category_id', 'id');
    }
    public function galleries()
    {
        return $this->hasMany(Portfolio_Gallery::class, 'portfolio_id', 'id');
    }
    public function portofolio_comment()
    {
        return $this->hasMany(Comment_Portofolio::class, 'portofolio_id','id');
    }
}
