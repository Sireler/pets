<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelter extends Model
{
    protected $fillable = [
        'name',
        'organization_id',
        'address',
        'phone'
    ];

    public function organization()
    {
        return $this->belongsTo(OperatingOrganization::class);
    }
}
