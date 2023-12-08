<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consumer>
 */
class ConsumerFactory extends Factory
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
     * firstNameFemale : Return a female name. 
     * lastName : Return a lastname.
     * numberBetween($min = 0, $max = Null) : Return a number between $min and $max
     * e164PhoneNumber : Return a number_phone with format '+584160140472'.
     * dayOfMonth : Return a day number.
     */
    public function definition(): array
    {
        return [
            'name'      => fake()->firstNameFemale(),
            'lastname'  => fake()->lastName(),
            'identification_card' => fake()->unique()->numberBetween($min = 10000000, $max = 40000000),
            'number_phone' => fake()->unique()->e164PhoneNumber(),
            'total_to_buys' => fake()->numberBetween($min = 0, $max = 15),
            'last_entry' => '2023-01-' . fake()->dayOfMonth($max = 'now')
        ];
    }
}
