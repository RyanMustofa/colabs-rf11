<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio_Category extends Model
{
    use HasFactory;
    protected $table = 'portfolio_category';
    protected $fillable = ['category_name'];

    public function portfolio()
    {
        return $this->hasMany(Portfolio::class, 'portfolio_category_id', 'id');
    }
}
