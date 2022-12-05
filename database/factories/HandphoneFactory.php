<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Handphone>
 */
class HandphoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'merk_hp' => $this->faker->word(),
            'tipe_hp' => $this->faker->word(),
            'rating' => $this->faker->numberBetween(0,5),
            'harga' => $this->faker->numberBetween()
        ];
    }
}
