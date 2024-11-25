<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function getWeather()
    {
        $client = new \GuzzleHttp\Client();
        $apiUrl = "https://geocoding-api.open-meteo.com/v1/search?name=japan&count=10&language=en&format=json";
        try {
            $response = $client->get($apiUrl);
            $data = json_decode($response->getBody(), true);
            return view('weather', ["weatherData" => $data]);
        } catch (\Exception $e) {
            return view("api_error", ["error" => $e->getMessage()]);
        }
    }
}
