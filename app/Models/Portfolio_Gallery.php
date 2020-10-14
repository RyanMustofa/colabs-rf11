<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio_Gallery extends Model
{
    use HasFactory;
    protected $table = 'portfolio_gallery';
    protected $fillable = ['portfolio_id', 'photo'];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class, 'portfolio_id', 'id');
    }
}
