<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name', 'price', 'description', 'quantity', 'category_id', 'featured_image', 'discount_id'];
    public $timestamps = true;
    protected $dateFormat = 'Y-m-d H:i:s';
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }
    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }
}
