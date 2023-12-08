<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
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
     * firstNameMale : Return a male name. 
     * lastName : Return a lastname.
     * numberBetween($min = 0, $max = Null) : Return a number between $min and $max
     * safeEmail : Return a email.
     * md5 : Return a password with md5 crypt.
     * e164PhoneNumber : Return a number_phone with format '+584160140472'.
     */
    public function definition(): array
    {
        return [
            'name'      => fake()->firstNameMale(),
            'lastname'  => fake()->lastName(),
            'identification_card' => fake()->unique()->numberBetween($min = 10000000, $max = 40000000),
            'email'     => fake()->unique()->safeEmail(),
            'password'  => fake()->md5(),
            'number_phone' => fake()->unique()->e164PhoneNumber(),
        ];
    }
}
