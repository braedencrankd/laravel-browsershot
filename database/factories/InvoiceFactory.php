<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => $this->faker->unique()->randomNumber(8),
            'date' => $this->faker->date(),
            'customer_name' => 'test: ' . $this->faker->name,
            'customer_address' => $this->faker->address,
            'total_amount' => $this->faker->randomFloat(2, 100, 1000),
        ];
    }
}
