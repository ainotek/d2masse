<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    //


    public function parishioners(){
        return $this->hasMany(Parishioner::class);
    }
}
