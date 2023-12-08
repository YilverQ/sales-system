<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cashier;
use App\Models\Product;
use App\Models\Payment;

class Admin extends Model
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
                            'identification_card', 'email',
                            'number_phone'];
                            
    protected $hidden = ['password'];

    /**
     * Relationship. 
     * One to Many - Many to One
    **/
    public function cashiers ()
    {
        return $this->hasMany(Cashier::class);
    }

    public function products ()
    {
        return $this->hasMany(Product::class);
    }

    public function payments ()
    {
        return $this->hasMany(Payment::class);
    }
}
