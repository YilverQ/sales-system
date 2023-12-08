<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * $table->field_type('field_name')->unique()->nulleable().
     * 
     * Relationship.
     * $table->unsignedBigInteger('relationship_id_name');
     * $table->foreign('relationship_id_name) : To make a relationship with a table.
     * ->references('table_id_name)
     * ->on('relation_to_table') : name from table to which it relation
     * ->onDelete('cascade') : cascading table deletion.
     * ->onUpdate('') : cascading table deletion.
     *//**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoice_payment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invoice_id');
            $table->foreign('invoice_id')
                            ->references('id')
                            ->on('invoices')
                            ->onDelete('cascade')
                            ->onUpdate('cascade');
            $table->unsignedBigInteger('payment_id');
            $table->foreign('payment_id')
                            ->references('id')
                            ->on('payments')
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
        Schema::dropIfExists('invoice_payment');
    }
};
