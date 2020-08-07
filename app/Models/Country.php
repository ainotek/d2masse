<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $dates = ['name_field'];
    protected $fillable = [
        'name',
        'iso'
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
