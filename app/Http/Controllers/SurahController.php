<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SurahController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.quran.sutanlab.id/surah');
        $surah = $response->json();
        return view('index',[
            'surah' => $surah['data']
        ]);
    }

    public function search(Request $request)
    {

        $search = "";

        $search = $request->search;

        if ($search !== "") {
            $surahSearch = Http::get('https://api.quran.sutanlab.id/surah',['']);
        } else {
            $surahSearch = Http::get('https://api.quran.sutanlab.id/surah');
        }
        
        return view('index', ['items' => $surahSearch['data']]);
    }   

}
