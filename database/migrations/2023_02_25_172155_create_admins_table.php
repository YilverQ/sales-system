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
     * ->string(field_name, 0) : To define a maximum of characteres.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('identification_card', 10)->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('number_phone', 13)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
