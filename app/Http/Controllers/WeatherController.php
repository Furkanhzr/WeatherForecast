<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use RakibDevs\Weather\Weather;

class WeatherController extends Controller
{
    public function find_place(Request $request)
    {
        try {
            $client = new Client();
            $response = $client->request('GET', 'https://ai-weather-by-meteosource.p.rapidapi.com/find_places?language=en', [
                'query' => [
                    'text' => $request->text,
                ],
                'headers' => [
                    'x-rapidapi-host' => 'ai-weather-by-meteosource.p.rapidapi.com',
                    'x-rapidapi-key' => env('RAPID_API_KEY'),
                ],
            ]);
            $response = json_decode($response->getBody(), true);
            if ($response != null) {
                return response()->json($response[0]);
            }
            else {
                return "null";
            }
        }
        catch (\Exception $e) {
            return "null";
        }
    }

    public function current(Request $request)
    {
        try {
            $client = new Client();
            $response = $client->request('GET', 'https://ai-weather-by-meteosource.p.rapidapi.com/current?timezone=auto&language=en&units=auto', [
                'query' => [
                    'lat' => $request->lat,
                    'lon' => $request->lon,
                ],
                'headers' => [
                    'x-rapidapi-host' => 'ai-weather-by-meteosource.p.rapidapi.com',
                    'x-rapidapi-key' => env('RAPID_API_KEY'),
                ],
            ]);
            $currentDate = Carbon::now();
            $day = $currentDate->day;
            $month = $currentDate->month;
            $dayOfWeek = $currentDate->dayOfWeek;

            $response = json_decode($response->getBody(), true);
            return response()->json(['response' => $response, 'day' => $day, 'month' => $month, 'dayOfWeek' => $dayOfWeek]);
        }
        catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function daily(Request $request)
    {
        $client = new Client();
        $response = $client->request('GET', 'https://ai-weather-by-meteosource.p.rapidapi.com/daily?language=en&units=auto', [
            'query' => [
                'lat' => $request->lat,
                'lon' => $request->lon,
            ],
            'headers' => [
                'x-rapidapi-host' => 'ai-weather-by-meteosource.p.rapidapi.com',
                'x-rapidapi-key' => env('RAPID_API_KEY'),
            ],
        ]);
        return json_decode($response->getBody(), true);
    }

}
