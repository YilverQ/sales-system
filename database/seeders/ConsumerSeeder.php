<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Consumer;

class ConsumerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Run the factory.
     * Model::factory('registry_number')->create();
     */
    public function run(): void
    {
        Consumer::factory(10)->create();
    }
}
