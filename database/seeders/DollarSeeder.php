<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dollar;

class DollarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Run the factory.
     * Model::factory('registry_number')->create();
     */
    public function run(): void
    {
        Dollar::factory(5)->create();
    }
}
