<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColorType extends Model
{
    protected $fillable = [
        'name',
        'pet_type_id'
    ];

    public function petType()
    {
        return $this->belongsTo(PetType::class);
    }
}
