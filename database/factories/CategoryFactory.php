<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Category::class;
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Living Room', 'Bedroom', 'Kitchen', 'Office', 'Bed', 'Sofa', 'Table', 'Chair', 'Decoration', 'Working Space', 'Student']), // Random furniture category name
        ];
    }
}