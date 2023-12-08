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
     * 
     * Relationship.
     * $table->unsignedBigInteger('relationship_id_name');
     * $table->foreign('relationship_id_name) : To make a relationship with a table.
     * ->references('table_id_name)
     * ->on('relation_to_table') : name from table to which it relation
     * ->onDelete('cascade') : cascading table deletion.
     * ->onUpdate('') : cascading table deletion.
     */
    public function up(): void
    {
        Schema::create('cashiers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('identification_card', 10)->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('number_phone', 13)->unique();
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
        Schema::dropIfExists('cashiers');
    }
};
