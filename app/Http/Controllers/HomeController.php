<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Blog\BlogRepository;

class HomeController
{
    protected $productRepository;
    protected $blogRepository;
    public function __construct(ProductRepository $productRepository, BlogRepository $blogRepository)
    {
        $this->productRepository = $productRepository;
        $this->blogRepository = $blogRepository;
    }

    public function index()
    {

        $products = $this->productRepository->getWithAll();
        $categories = $products->pluck('category')->unique();

        $blogs = $this->blogRepository->all();
        // dd($products);
        // dd($products[0]->discount->discount_percentage);
        return view('home.index', compact('products', 'categories', 'blogs'));
    }
}