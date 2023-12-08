<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;
use App\Models\Record;

class Product extends Model
{
    use HasFactory;

    /**
     * Models.
     * protected $atributes = [fields_associative_array] : To define that default values for some atrtributes.
     * protected $fillable  = [array_fields] : To define that values are mass assignable.
     * protected $hidden    = [array_fields] : That attributes will not be included in the consults.
     * protected $visible   = [array_fields] : That attributes will be included in the consults.
    **/

    protected $fillable = [ 'name', 'barcode', 
                            'stock', 'cost',
                            'price', 'disabled'];

    protected $atributes = ['disabled' => false];


    /**
     * Relationship. 
     * One to Many - Inverse
    **/
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    /**
     * Relationship. 
     * One to Many - Many to One
    **/
    public function records ()
    {
        return $this->hasMany(Record::class);
    }

    /**
     * Relationship. 
     * Many to many
    **/
    public function invoices()
    {
        return $this->belongsToMany(Invoice::class);
    }
}
