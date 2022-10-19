<?php

namespace App\Services;

use App\Contracts\CurServiceInterface;

class AnotherCurService implements CurServiceInterface
{
    public function getRate()
    {
        dd('anotherCurService');
    }
}
