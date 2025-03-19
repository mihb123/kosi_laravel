<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Category;
use App\Models\Discount;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Product::class;
    public function definition()
    {
        return [
            // give me 15 random furniture products name
            'name' => $this->faker->randomElement(['Chair', 'Table', 'Sofa', 'Bed', 'Bedroom Set', 'Living Room Set', 'Dining Set', 'Office Chair', 'Office Desk', 'Office Chair', 'Office Desk', 'Office Chair', 'Office Desk', 'Office Chair', 'Office Desk', 'Office Chair', 'Office Desk', 'Office Chair', 'Office Desk', 'Office']),
            'price' => $this->faker->randomFloat(50, 0, 100),
            'description' => $this->faker->paragraph(),
            'quantity' => $this->faker->randomNumber(),
            'category_id' => $this->faker->numberBetween(1, 5),
            'featured_image' => $this->faker->imageUrl(),
            'discount_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
