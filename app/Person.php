<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'name',
        'second_name',
        'surname',
        'second_surname',
        'married_name',
        'identification_document',
        'extension',
        'date_of_birth',
        'place_of_birth',
        'address',
        'department_id',
        'city_id',
        'telephone',
        'cellphone',
        'email'
    ];

    public function business()
    {
        return $this->hasOne(Business::class);
    }
}
