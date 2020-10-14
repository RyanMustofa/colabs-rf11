<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog_Category extends Model
{
    use HasFactory;
    protected $table = 'blog_category';
    protected $fillable = ['category_name'];
  
    public function Blog()
    {
        $this->hasMany(Blog_Category::class, 'blog_category_id', 'id');
    }
}
