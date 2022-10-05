<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ConverterController extends Controller
{
    public function __invoke(){
        $currencies = Http::get('https://www.nbrb.by/api/exrates/rates?periodicity=0')->json();

        return view('test.converter', compact('currencies'));
    }
}
