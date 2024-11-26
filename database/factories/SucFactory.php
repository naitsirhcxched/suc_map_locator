<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suc>
 */
class SucFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company, 
            'address' => $this->faker->address, 
            'latitude' => $this->faker->latitude(-90, 90), 
            'longitude' => $this->faker->longitude(-180, 180), 
            'website' => $this->faker->url, 
            'contact' => $this->faker->phoneNumber, 
        ];
    }
}
