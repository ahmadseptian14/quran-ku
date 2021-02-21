<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SurahController extends Controller
{
    public function index(Request $request)
    {
        $response = Http::get('https://api.quran.sutanlab.id/surah');
        $surah = $response->json();
        return view('index',[
            'surah' => $surah['data']
        ]);
    } 

}
