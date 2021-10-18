<?php

namespace App\Http\Controllers;

use GNAHotelSolutions\Weather\Weather;

class HomeController extends Controller
{
    public function index()
    {
        $weather = new Weather();

        $currentWeatherNijmegen = $weather->get('nijmegen,nl');

        return view(
            'welcome',
            ["weather" => $currentWeatherNijmegen]
        );
    }
}
