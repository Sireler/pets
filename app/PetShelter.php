<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetShelter extends Model
{
    public function pet()
    {
        return $this->hasOne(Pet::class, 'id', 'pet_id');
    }

    public function shelter()
    {
        return $this->hasOne(Shelter::class, 'id', 'shelter_id');
    }
}
