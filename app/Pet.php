<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'card_number',
        'name',
        'description',
        'type',
        'breed_name',
        'weight',
        'fur',
        'ears',
        'tail',
        'size',
        'special_signs',
        'enclosure_number',
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

    public function info()
    {
        return $this->hasOne(AdditionalPetInfo::class, 'pet_id', 'id');
    }

    public function catch()
    {
        return $this->hasOne(PetCatch::class, 'pet_id', 'id');
    }

    public function owners()
    {
        return $this->hasOne(PetOwner::class, 'pet_id', 'id');
    }

    public function movements()
    {
        return $this->hasOne(PetMovement::class, 'pet_id', 'id');
    }

    public function treatments()
    {
        return $this->hasMany(PetParasiteTreatment::class, 'pet_id', 'id');
    }

    public function health()
    {
        return $this->hasOne(PetHealthStatus::class, 'pet_id', 'id');
    }

    public function vaccinations()
    {
        return $this->hasMany(PetVaccination::class, 'pet_id', 'id');
    }

}
