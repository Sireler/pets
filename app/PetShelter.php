<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetShelter extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'pet_id',
        'shelter_id',
        'address',
        'shelter_name',
        'shelter_owner_name',
        'animal_watcher_name'
    ];

    public function pet()
    {
        return $this->hasOne(Pet::class, 'id', 'pet_id');
    }

    public function shelter()
    {
        return $this->hasOne(Shelter::class, 'id', 'shelter_id');
    }
}
