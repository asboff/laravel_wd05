<?php

namespace App\Console\Commands;

use App\Models\Currency;
use Illuminate\Console\Command;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

class CurrencySave extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currency:save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try{
            $currencies = Http::retry(3)->get('https://www.nbrb.by/api/exrates/rates?periodicity=0')->body();
        } catch(ConnectionException $exception){
            $this->error('Connection error. Try again later.');
            return 0;
        }

        Currency::create([
            'date' => date('Y-m-d'),
            'currency' => $currencies,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        $this->info('done');
        return 0;
    }
}
