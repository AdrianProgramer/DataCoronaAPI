<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;


class MainController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.kawalcorona.com/positif');
        $response2 = Http::get('https://api.kawalcorona.com/sembuh');

        $dataPositif = $response->json();
        $dataSembuh = $response2->json();
        return view('index', [
            'tittle' => 'Home',
            'DataPositif' => $dataPositif,
            'DataSembuh' => $dataSembuh
        ]);
    }

    public function data($data)
    {
        if($data == 'indo')
        {
            $response = Http::get('https://api.kawalcorona.com/indonesia');
            $hasilData = $response->json();
            return view('tampildata', [
                'tittle' => 'data',
                'data' => $hasilData,
                'slug' => 'indo'
            ]);
        }

        elseif($data == 'dunia')
        {
            $response = Http::get('https://api.kawalcorona.com/');
            $hasilData = $response->json();
            return view('tampildata', [
                'tittle' => 'data',
                'data' => $hasilData,
                'slug' => 'dunia'
            ]);
        }

        elseif($data == 'provinsi')
        {
            $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
            $hasilData = $response->json();
            return view('tampildata', [
                'tittle' => 'data',
                'data' => $hasilData,
                'slug' => 'provinsi'
            ]);
        }
    }
}
