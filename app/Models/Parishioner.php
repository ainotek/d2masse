<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Parishioner extends Authenticatable
{

    use HasApiTokens, Notifiable;

    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "first_name", "last_name", "email", "phone", "is_baptized", "is_confirmed",
            "is_catechumen", "birthday", "gender", "parish_id", 'password','last_login', "city_id"
    ];
    protected $dates = ['name_field'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function parish(){
        return $this->belongsTo(Parish::class);
    }
}
