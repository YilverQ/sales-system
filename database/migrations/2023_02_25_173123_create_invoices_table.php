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
     * ->float('table_name', total_digits, total_digits_after_decimal)
     * ->time('table_name', $precision = 5) //00:00:00.00000
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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->date('invoice_date');
            $table->time('invoice_time', $precision = 0); //00:00:00
            $table->float('total_to_paid', 8, 2);
            $table->unsignedBigInteger('cashier_id');
            $table->foreign('cashier_id')
                            ->references('id')
                            ->on('cashiers')
                            ->onDelete('cascade')
                            ->onUpdate('cascade');
            $table->unsignedBigInteger('dollar_id');
            $table->foreign('dollar_id')
                            ->references('id')
                            ->on('dollars')
                            ->onDelete('cascade')
                            ->onUpdate('cascade');
            $table->unsignedBigInteger('consumer_id');
            $table->foreign('consumer_id')
                            ->references('id')
                            ->on('consumers')
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
        Schema::dropIfExists('invoices');
    }
};
