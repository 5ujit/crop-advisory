<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Importing the Http facade
use App\Services\WeatherService;

class WeatherController extends Controller
{
    protected $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function index(Request $request)
    {
        $city = $request->input('city', 'Phagwara'); // Default city

        $weather = $this->weatherService->getWeather($city);

        return view('weather.index', compact('weather', 'city'));
    }

    public function check(Request $request)
    {
        $city = $request->input('city');
        $apiKey = '082dd83940556fbde29b2bbaef9db9a1'; 

        $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
            'q' => $city,
            'appid' => $apiKey,
            'units' => 'metric'
        ]);

        $data = $response->json();

        if ($response->successful()) {
            $weather = [
                'temp' => $data['main']['temp'],
                'description' => $data['weather'][0]['description'],
            ];

            return view('weather.index', compact('weather', 'city'));
        }

        return back()->with('error', 'City not found or API failed');
    }
}
