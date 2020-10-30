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
}
