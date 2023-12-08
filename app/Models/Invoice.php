<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cashier;
use App\Models\Dollar;
Use App\Models\Consumer;
Use App\Models\Payment;
Use App\Models\Record;

class Invoice extends Model
{
    use HasFactory;

    /**
     * Models.
     * protected $atributes = [fields_associative_array] : To define that default values for some atrtributes.
     * protected $fillable  = [array_fields] : To define that values are mass assignable.
     * protected $hidden    = [array_fields] : That attributes will not be included in the consults.
     * protected $visible   = [array_fields] : That attributes will be included in the consults.
    **/
    protected $fillable = [ 'invoice_date', 'invoice_time',
                            'total_to_paid'];

    /**
     * Relationship. 
     * One to Many - Inverse
    **/
    public function cashier()
    {
        return $this->belongsTo(Cashier::class);
    }

    public function dollar()
    {
        return $this->belongsTo(Dollar::class);
    }

    public function consumer()
    {
        return $this->belongsTo(Consumer::class);
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
    public function payments()
    {
        return $this->belongsToMany(Payment::class);
    }
}
