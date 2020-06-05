<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CityWeather extends Model
{
    
    	
	protected $fillable = [
    'city_id','coord','weather', 'base', 'main', 'visibility','wind','clouds', 'dt', 'sys','timezone' , 'cod','created_at','updated_at'];

    public static function store(array $request)
	{
	    CityWeather::create($request);
	}
}
