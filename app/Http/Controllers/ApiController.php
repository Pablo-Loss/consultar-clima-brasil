<?php

namespace App\Http\Controllers;

use Http;
use App\Http\Requests\Adapters\WeatherToClimaAdapter;
use App\Http\Requests\Arguments\GetCurrentWeather;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    const ACCESS_KEY = "8433524a922c9c56b121b463bdb55973";
    
    private string $baseURL = "http://api.weatherstack.com";
    
    public function getCurrentWeather(Request $request) {
        $url = $this->baseURL . "/current?";
        $cidade = $request->input('cidade');
        $getCurrentWeatherArgs = new GetCurrentWeather($cidade, self::ACCESS_KEY);
        $this->AddRequestParameters($url, $getCurrentWeatherArgs);
        $response = Http::get($url);

        if ($response->successful()) {
            $climate = WeatherToClimaAdapter::Adapt($response->object());
            return response()->json(['redirect' => route('climate.visualize', (array) $climate)]);
        } else {
            return response()->json(["error" => "Ocorreu algum erro ao consultar o clima"], $response->getStatusCode());
        }
    }

    private function AddRequestParameters(&$url, GetCurrentWeather $getCurrentWeatherArgs) {
        $parameters = [];
        foreach ($getCurrentWeatherArgs as $key => $value) {
            $parameters[] = "$key=$value";
        }
        $url .= implode("&", $parameters);
    }
}
