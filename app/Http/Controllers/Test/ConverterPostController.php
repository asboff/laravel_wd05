<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConverterPostController extends Controller
{
    public function __invoke()
    {
        $query = ['periodicity' => 0];
        $response = Http::get('https://www.nbrb.by/api/exrates/rates?periodicity=0', $query);
        dd($response->collect()->keyBy('Cur_Abbreviation'));
    }
}
