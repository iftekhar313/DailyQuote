<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class QuoteController extends Controller
{
    public function index()
    {
        $response = Http::withOptions(['verify' => false])->get('https://zenquotes.io/api/random');
        $quoteData = $response->json();
        $quote = $quoteData[0]['q'] ?? "Stay positive and keep moving forward.";
        $author = $quoteData[0]['a'] ?? "Unknown";
        $backgroundImages = [
            asset('images/bg1.jpg'),
            asset('images/bg2.jpg'),
            asset('images/bg3.jpg'),
            asset('images/bg4.jpg'),
            asset('images/bg5.jpg'),
        ];

        $backgroundImage = $backgroundImages[array_rand($backgroundImages)];
        return view('quote', compact('quote', 'author', 'backgroundImage'));
    }
}

