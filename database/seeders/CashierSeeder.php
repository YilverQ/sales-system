<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cashier;

class CashierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * We create a admin. 
     * Model::create([array_associative_with_data]);
     * ['name' => 'FirtsName', 'field_name' => 'Value'];
     * Run the factory.
     * Model::factory('registry_number')->create();
     */
    public function run(): void
    {
        Cashier::create([
            'name' => 'Cashier',
            'lastname' => 'Cashier',
            'identification_card' => '1100000',
            'email' => 'cashier@gmail.com',
            'password' => 'cashier',
            'number_phone' => '+58416000001',
            'admin_id' => 1
        ]);

        Cashier::factory(6)->create();
    }
}
