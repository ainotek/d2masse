<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    public function parishioners(){
        return $this->hasMany(Parishioner::class);
    }

    public function masses(){
        return $this->hasMany(Mass::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function massesRequests(){
        return $this->hasManyThrough(Mass_request::class, Mass::class);
    }
}
