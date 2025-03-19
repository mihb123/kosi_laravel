<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Blog;

class HomeController
{
    public function index()
    {

        $products = Product::with(['category', 'discount'])->get();
        $categories = Category::all();

        $blogs = Blog::all();
        dd($products);
        // dd($products[0]->discount->discount_percentage);
        return view('home.index', compact('products', 'categories', 'blogs'));
    }
}
111