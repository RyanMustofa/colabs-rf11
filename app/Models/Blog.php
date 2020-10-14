<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $fillable = [
        'title',
        'user_id',
        'blog_category_id',
        'content',
        'cover',
        'status',
        'slug'
    ];
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function Blog_Category()
    {
        return $this->belongsTo(Blog_Category::class, 'blog_category_id', 'id');
    }
    public function comment_blog()
    {
        return $this->hasMany(CommentBlog::class, 'blog_id', 'id');
    }
}
