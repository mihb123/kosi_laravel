<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductColor;

class ProductColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductColor::factory()->count(5)->create();
    }
}
