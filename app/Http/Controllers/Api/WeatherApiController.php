<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WeatherApiController extends Controller
{
    public function forcast(Request $request)
    {
        $city = $request->city;
        $weatheArray = json_decode(file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".$city."&appid=f84ae1292d265e3a5bdd7230cd0ceb84"), true); 
        $condition = $weatheArray['weather'][0]['description'];
        $Celisus = $weatheArray['main']['temp']-273.15;
        // dd($weatheArray);
        return view('index',compact('city','condition','Celisus'));
    }
}
