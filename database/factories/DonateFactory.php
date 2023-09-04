<?php

namespace Database\Factories;

use App\Models\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donate>
 */
class DonateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'created_at' => now()->subDays(rand(0, 1000)),
            'currency_id' => Currency::query()->get()->random()->id,
            'amount' => $this->faker->randomNumber(1, 1000),
        ];
    }
}
