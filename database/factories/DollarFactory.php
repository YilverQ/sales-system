<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dollar>
 */
class DollarFactory extends Factory
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
     * randomFloat : Return a number between $min and $max, also we define the number of decimals places.
     * dayOfMonth : Return a day number.
     */
    public function definition(): array
    {
        return [
            'dollar_date' => '2023-01-' . fake()->numberBetween($min = 1, $max = 30),
            'value'       => fake()->randomFloat($nbMaxDecimals = 2, $min = 20, $max = 100)
        ];
    }
}
