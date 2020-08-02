<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mass_request extends Model
{
    use \Znck\Eloquent\Traits\BelongsToThrough;
    protected $fillable = ["parishioner_id", "receiver", "request_type_id", "masse_id", "message"];
    protected $dates = ['name_field'];

    public function masse()
    {
        return $this->belongsTo(Mass::class);
    }

    public function parishioner()
    {
        return $this->belongsTo(Parishioner::class);
    }

    public function parish()
    {
        return $this->BelongsToThrough(Parish::class, Mass::class);
    }

    public function requestType()
    {
        return $this->belongsTo(Request_type::class);
    }
}
