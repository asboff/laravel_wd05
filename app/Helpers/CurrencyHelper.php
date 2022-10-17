<?php

namespace App\Helpers;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

class CurrencyHelper
{
    public function get(){
        try{
            $currencies = Http::retry(3)->get('https://www.nbrb.by/api/exrates/rates?periodicity=0')->json();
        } catch(ConnectionException $exception){
            return 0;
        }
        return $currencies->collect();
    }
}
