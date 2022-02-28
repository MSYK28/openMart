<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Items>
 */
class ItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'quantity' => $this->faker->numberBetween($min = 1, $max = 20),
            'description' => $this->faker->text(),
            'brand' => $this->faker->word(),
            'item_img' => $this->faker->image('public/assets/images/img/products',400,300, null, false),
            'price' => $this->faker->numberBetween($min = 100, $max = 2000),
            'category' => $this->faker->word(),
        ];
    }
}
