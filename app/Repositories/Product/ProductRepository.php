<?php

namespace App\Repositories\Product;

use  App\Models\Product;
use App\Repositories\BaseRepository;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
  protected $product;
  public function __construct(Product $product)
  {
    parent::__construct($product);
  }
  public function getWithAll()
  {
    return $this->model->with(['category', 'discount'])->get();
  }
}
