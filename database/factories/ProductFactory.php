<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
     * company : Return a random company name.
     * isbn13 : Return a random isdb13 (barcode).
     * numberBetween($min = 0, $max = Null) : Return a number between $min and $max.
     * randomFloat : Return a number between $min and $max, also we define the number of decimals places.
     */
    public function definition(): array
    {
        $cost = fake()->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 30);
        return [
            'name'    => fake()->company(),
            'barcode' => fake()->isbn13(),
            'stock'   => fake()->numberBetween($min = 5, $max = 50),
            'cost'    => $cost,
            'price'   => fake()->randomFloat($nbMaxDecimals = 2, $min = ($cost + 1), $max = 31),
            'admin_id' => 1
        ];
    }
}
