<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * The seeders must be in order of migrations creation.
     * $this->call(ModelSeeder::class);
     */
    public function run(): void
    {
        $this->call(AdminSeeder::class);
        $this->call(DollarSeeder::class);
        $this->call(ConsumerSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(CashierSeeder::class);
        $this->call(InvoiceSeeder::class);
        $this->call(RecordSeeder::class);
        $this->call(RelationshipSeeder::class);
    }
}
