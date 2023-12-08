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
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->boolean('disabled')->default(false);
            $table->unsignedBigInteger('admin_id');
            $table->foreign('admin_id')
                            ->references('id')
                            ->on('admins')
                            ->onDelete('cascade')
                            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
