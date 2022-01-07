<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
        'person_id',
        'name',
        'nit',
        'business_line',
        'address',
        'job',
        'Business_Type'
    ];

    public function person()
    {
        return $this->belongsTo(Business::class);
    }
}
