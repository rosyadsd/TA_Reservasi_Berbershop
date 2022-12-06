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
            'nama_paket' => $this->faker->word(),
            'keterangan_paket' => $this->faker->word(),
            'harga' => $this->faker->numberBetween()
        ];
    }
}
