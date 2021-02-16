<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DetailController extends Controller
{
    public function index($number = null)
    {

        $response = Http::get('https://api.quran.sutanlab.id/surah/'.$number);
        $detailSurah = $response->json();

        if($number != null ) {
            return view('surah-details',[
                'detailSurah' => $detailSurah['data']
            ]); 
        }
       
    }
}
