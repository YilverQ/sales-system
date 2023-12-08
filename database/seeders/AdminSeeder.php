<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
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
        Admin::create([
            'name' => 'Yilver',
            'lastname' => 'Quevedo',
            'identification_card' => '28333459',
            'email' => 'yilver@admin.com',
            'password' => 'root',
            'number_phone' => '+584160140472'
        ]);

        #Admin::factory(4)->create();
    }
}
