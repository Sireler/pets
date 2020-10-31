<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BreedType extends Model
{
    protected $fillable = [
        'pet_type_id',
        'name'
    ];

    public function petType()
    {
        return $this->belongsTo(PetType::class);
    }
}
