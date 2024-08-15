<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarAccidentController extends Controller
{
    public function index()
    {
        // Generate sample years data
        $years = collect(range(1, 10));

        // Generate random exchange rates data (in Naira per Dollar)
        $exchangeRates = $years->map(function($year) {
            return rand(350, 450); // Random rate between 350 and 450
        });

        // Pass the data to the view
        return view('car-accidents', [
            'years' => $years,
            'exchangeRates' => $exchangeRates,
        ]);
    }
}
