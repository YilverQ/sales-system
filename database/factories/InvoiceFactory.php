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
     * @return array<string, mixed>
     *
     * fake()->type_fake_data($argument = value);
     * fake is a helper function. It's has many methods. 
     * unique() : is a method to define a unique value.
     * 
     * MyTypes.
     * dayOfMonth : Return a day number.
     * time : Return a random time.
     * randomFloat : Return a number between $min and $max, also we define the number of decimals places.
     * numberBetween($min = 0, $max = Null) : Return a number between $min and $max.
     */
    public function definition(): array
    {
        return [
            'invoice_date'  => '2023-01-' . fake()->numberBetween($min = 1, $max = 10),
            'invoice_time'  => fake()->time(),
            'total_to_paid' => fake()->randomFloat($nbMaxDecimals = 2, $min = 10, $max = 600),
            'cashier_id'    => 1,
            'dollar_id'     => 1,
            'consumer_id'   => fake()->numberBetween($min = 1, $max = 10),
        ];
    }
}
