<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;

class Consumer extends Model
{
    use HasFactory;

    /**
     * Models.
     * protected $atributes = [fields_associative_array] : To define that default values for some atrtributes.
     * protected $fillable  = [array_fields] : To define that values are mass assignable.
     * protected $hidden    = [array_fields] : That attributes will not be included in the consults.
     * protected $visible   = [array_fields] : That attributes will be included in the consults.
    **/
    protected $fillable = [ 'name', 'lastname',
                            'identification_card', 'number_phone',
                            'total_to_buys', 'last_entry'];
    
    protected $atributes = ['total_to_buys' => 0];

    /**
     * Relationship. 
     * Many to many
    **/
    public function invoices()
    {
        return $this->belongsToMany(Invoice::class);
    }
}
