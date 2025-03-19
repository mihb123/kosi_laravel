<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Discount::class;
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Summer Sale', 'Winter Sale', 'Clearance', 'Holiday Discount']), // Random discount name
            'discount_percentage' => $this->faker->randomFloat(2, 0, 30),
            'start_date' => $startDate = $this->faker->dateTimeBetween('-1 month', '+1 month')->format('Y-m-d'),
            'end_date' => $this->faker->dateTimeBetween($startDate, '+2 months')->format('Y-m-d'),
        ];
    }
}
