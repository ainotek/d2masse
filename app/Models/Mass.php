<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mass extends Model
{
    protected $dates = ['name_field'];
    protected $fillable = [
        'name', 'start_day', 'start_at', 'request_closed_at', 'parish_id'
    ];

    public function parish()
    {
        return $this->belongsTo(Parish::class);
    }

    public function massRequests()
    {
        return $this->hasMany(Mass_request::class);
    }

    public function parishioner(){
        return $this->hasOneThrough(Parishioner::class, Mass_request::class);
    }
}
