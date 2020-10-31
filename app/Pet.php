<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
        'name',
        'description',
        'type',
        'breed_name',
        'color',
        'date_of_birth',
        'sex',
        'date_arrived',
        'date_adopted'
    ];

    public function shelter()
    {
        return $this->hasOne(PetShelter::class, 'pet_id', 'id');
    }
}
