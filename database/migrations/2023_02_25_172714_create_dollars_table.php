<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * $table->field_type('field_name')->unique()->nulleable().
     * ->unique : To define that field is unique. 
     * ->nulleable : To define that field can to be nulleable.
     * $table->float('table_name', total_digits, total_digits_after_decimal)
     */
    public function up(): void
    {
        Schema::create('dollars', function (Blueprint $table) {
            $table->id();
            $table->date('dollar_date')->unique();
            $table->float('value', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dollars');
    }
};
