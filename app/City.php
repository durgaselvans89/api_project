<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
     
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'city_name', 'country_code', 'client_city_id',
    ];


    

}
