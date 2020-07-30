<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parishioner_request extends Model
{
    protected $dates = ['name_field'];

    public function masse()
    {
        return $this->belongsTo(Masse::class);
    }

    public function parishioner()
    {
        return $this->belongsTo(Parishioner::class);
    }

    public function requestType()
    {
        return $this->belongsTo(Request_type::class);
    }
}
