<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [
            'q' => 'Hanoi',
            'appid' => '53cab1f7cb780a9bab78273b5452458c'
        ]);
        $data = json_decode($response->body());
        $currentTime = time();
        return view('weather', compact('data', 'currentTime'));
    }
}
