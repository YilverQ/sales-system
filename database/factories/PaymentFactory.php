<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     * @return array<string, mixed>
     *
     * fake()->type_fake_data($argument = value);
     * fake is a helper function. It's has many methods. 
     * unique() : is a method to define a unique value.
     * 
     * MyTypes.
     * creditCardType : Return a random creditCard name.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->creditCardType(),
            'admin_id' => 1
        ];
    }
}
