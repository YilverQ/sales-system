<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;

class Payment extends Model
{
    use HasFactory;

    /**
     * Models.
     * protected $atributes = [fields_associative_array] : To define that default values for some atrtributes.
     * protected $fillable  = [array_fields] : To define that values are mass assignable.
     * protected $hidden    = [array_fields] : That attributes will not be included in the consults.
     * protected $visible   = [array_fields] : That attributes will be included in the consults.
     * protected $table     = new_table_name
    **/
    protected $fillable = ['name', 'disabled'];


    /**
     * Relationship. 
     * One to Many - Inverse
    **/
    public function admin ()
    {
        return $this->belongsTo(Admin::class);
    }

    
    /**
     * Relationship. 
     * Many to many - Inverse
    **/
    public function invoices()
    {
        return $this->belongsToMany(Invoice::class);
    }
}
