<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'discount_percentage', 'start_date', 'end_date'];
    function products()
    {
        return $this->hasMany(Product::class);
    }
}
