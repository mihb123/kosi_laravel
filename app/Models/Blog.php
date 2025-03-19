<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'content', 'author', 'product_id'];
    public $timestamps = true;
    protected $dateFormat = 'Y-m-d H:i:s';

    function Product()
    {
        return $this->belongsTo(Product::class);
    }
}