<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Invoice;

class RelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*Relación: 'Invoice - Product' */
        for ($i=1; $i <= 10; $i++) { 
            $invoice = Invoice::find($i);
            $invoice->payments()->attach([1,2,3,4]);
        }
    }
}
