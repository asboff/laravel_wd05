<?php

namespace App\Providers;

use App\Contracts\CurServiceInterface;
use App\Services\AnotherCurService;
use Illuminate\Support\ServiceProvider;

class DiProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        dump('register');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->app->bind(CurServiceInterface::class, AnotherCurService::class);
        $this->app-singleton(CurServiceInterface::class, new AnotherCurService());
    }
}
