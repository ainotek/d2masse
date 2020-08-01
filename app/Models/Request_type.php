<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request_type extends Model
{
    protected $fillable = [
        'name', 'description', 'created_at', 'updated_at'
    ];
}
