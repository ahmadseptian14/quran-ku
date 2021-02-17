<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SholatController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.pray.zone/v2/times/today.json?city=jakarta');
        $sholat = $response->json();
        return view('sholat',[
            'sholat' => $sholat['results']
        ]);
    }
}
