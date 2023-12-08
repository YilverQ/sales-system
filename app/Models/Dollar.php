<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;

class Dollar extends Model
{
    use HasFactory;

    /**
     * Models.
     * protected $atributes = [fields_associative_array] : To define that default values for some atrtributes.
     * protected $fillable  = [array_fields] : To define that values are mass assignable.
     * protected $hidden    = [array_fields] : That attributes will not be included in the consults.
     * protected $visible   = [array_fields] : That attributes will be included in the consults.
    **/
    protected $fillable = ['dollar_date', 'value'];

    /**
     * Relationship. 
     * One to Many - Many to One
    **/
    public function invoices ()
    {
        return $this->hasMany(Invoice::class);
    }
}
