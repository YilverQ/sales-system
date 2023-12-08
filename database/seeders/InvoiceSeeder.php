<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Invoice;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Run the factory.
     * Model::factory('registry_number')->create();
     */
    public function run(): void
    {
        Invoice::factory(20)->create();
    }
}
