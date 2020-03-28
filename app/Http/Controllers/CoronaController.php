<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Charts\CovidChart;

use Illuminate\Support\Facades\Http;
	
use Carbon;

class CoronaController extends Controller
{
    public function index(){
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $data = $response->json();
        
        $corona = Http::get('https://api.kawalcorona.com/indonesia');
        $datacorona = $corona->json();

        return view('welcome',compact('data','corona','datacorona'));
    }

    public function chart(){
        $suspects = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        $labels = $suspects->flatten(1)->pluck('Provinsi');
        $data   = $suspects->flatten(1)->pluck('Kasus_Posi');
        $colors = $labels->map(function($item) {
            return $rand_color = '#' . substr(md5(mt_rand()), 0, 6);
        });
        $chart = new CovidChart;
        $chart->labels($labels);
        $chart->dataset('Kasus Positif', 'pie', $data)->backgroundColor($colors);
        return view('corona', [
            'chart' => $chart,
        ]);
    }
}
