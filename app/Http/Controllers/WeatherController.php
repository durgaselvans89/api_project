<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use App\CityWeather;
use App\City;


class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $city = City::all();
        
        foreach ($city as $c) {
            $uri = Config::get('app.open_weather_url').'weather?id='.$c->client_city_id.'&appid='.Config::get('app.open_weather_key');
            $app_key = Config::get('app.open_weather');
            
            $response = Http::get($uri);

            if($response->getStatusCode() == '200' ){ 
                $content = $response->getBody()->getContents();
                if(!empty($content)) {
                    $arr = json_decode($content);
                    $city_weather = CityWeather::where('city_id', '=', $c->id)->count();
                    if(isset($city_weather) && $city_weather > 0){
                        $update = array(
                                    'coord'=> json_encode($arr->coord),
                                    'weather' => json_encode($arr->weather),
                                    'base' => $arr->base,
                                    'main' => json_encode($arr->main),
                                    'visibility' => isset($arr->visibility) ? $arr->visibility : 0 ,
                                    'wind' => json_encode($arr->wind),
                                    'clouds' => json_encode($arr->clouds),
                                    'dt' => $arr->dt, 
                                    'sys' => json_encode($arr->sys),
                                    'timezone' => $arr->timezone,
                                    'cod' => $arr->cod,
                                ); 
                        CityWeather::where('city_id', '=', $c->id)->update($update);
                    }
                    else
                    {
                        $insert = array('city_id'=> $c->id,
                                    'coord'=> json_encode($arr->coord),
                                    'weather' => json_encode($arr->weather),
                                    'base' => $arr->base,
                                    'main' => json_encode($arr->main),
                                    'visibility' => isset($arr->visibility) ? $arr->visibility : 0,
                                    'wind' => json_encode($arr->wind),
                                    'clouds' => json_encode($arr->clouds),
                                    'dt' => $arr->dt, 
                                    'sys' => json_encode($arr->sys),
                                    'timezone' => $arr->timezone,
                                    'cod' => $arr->cod,
                                    'created_at' => strtotime('now'),
                                    'updated_at' => strtotime('now'),
                                );  
                        CityWeather::store($insert);

                    }    
                }
            }
        }

        echo "Weather information created Successfully";    
    }

    /**

     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
