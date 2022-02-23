<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VoucherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'name' => strtoupper(Str::random(rand(5,6));,
            'price' => $this->faker->numberBetween($min = 100, $max = 500),
            'valid' => true,
            
        ];
    }
}
