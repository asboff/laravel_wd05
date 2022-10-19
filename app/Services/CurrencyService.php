<?php

namespace App\Services;

use App\Contracts\CurServiceInterface;

class CurrencyService implements CurServiceInterface
{
    public function getRate(){
        dd('getRate');
    }
}
