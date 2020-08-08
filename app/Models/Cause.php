<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    protected $dates = ['name_field'];
    protected $fillable = ['parish_id', 'name', 'description'];

    public function parish()
    {
        return $this->belongsTo(Parish::class);
    }
}
