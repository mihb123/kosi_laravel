<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $table = 'discounts';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'discount_percentage', 'start_date', 'end_date'];
    public $timestamps = true;
    protected $dateFormat = 'Y-m-d H:i:s';

    function products()
    {
        return $this->hasMany(Product::class);
    }
}
