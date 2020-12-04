<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{


    protected $table = 'address';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'street', 'number', 'city', 'postal_code' ,'country'
    ];


    public function users()
    {
        return $this->hasMany('App\User');
    }
}
