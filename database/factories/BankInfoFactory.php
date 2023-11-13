<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BankInfo>
 */
class BankInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'country' => $this->faker->country(),
            'bank_name' => $this->faker->creditCardType(),
            'bank_address' => $this->faker->address(),
            'account_name' => $this->faker->name(),
            'account_number' => $this->faker->creditCardNumber(),
            'routing_number' => $this->faker->creditCardNumber(),
            'account_type'  => 'business_account'
        ];
    }
}
