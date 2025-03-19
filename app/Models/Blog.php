<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'author', 'product_id'];
    function Product()
    {
        return $this->belongsTo(Product::class);
    }
}
