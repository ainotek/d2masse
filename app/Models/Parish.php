<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    protected $fillable = [
        'name',
        'longitude',
        'latitude',
        'diocese_id',
        'registration',
        'phone',
        'email',
        'city_id'
    ];

    public function parishioners(){
        return $this->hasMany(Parishioner::class);
    }

    public function masses(){
        return $this->hasMany(Mass::class);
    }

    public function diocese(){
        return $this->belongsTo(Diocese::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function massesRequests(){
        return $this->hasManyThrough(Mass_request::class, Mass::class);
    }

    public function causes()
    {
        return $this->hasMany(Cause::class);
    }
}
