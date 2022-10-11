<?php

namespace App\Console\Commands;

use App\Jobs\CurrencyJob;
use Illuminate\Console\Command;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

class CurrencyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currency:mail {currency?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Use this command to get up-to-date currency from your currency to BYN';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try{
            $actualCurrencies = Http::get('https://www.nbrb.by/api/exrates/rates?periodicity=0')->json();
        } catch(ConnectionException $exception){
            $this->error('Connection error. Try again later.');
            return 0;
        }

        $currencies = [];
        $currenciesID = [];
        foreach ($actualCurrencies as $currencyKey => $actualCurrency){
            $currencies[] = $actualCurrency['Cur_Abbreviation'];
            $currenciesID[$actualCurrency['Cur_Abbreviation']] = $currencyKey;
        }
        $currencies = implode(', ', $currencies);

        if(!$this->argument('currency')){
            $currencyShort = $this->ask("What currency? Available: $currencies.");
        }else{
            $currencyShort = $this->argument('currency');
        }

        try {
            $currenciesID[$currencyShort];
        } catch (\ErrorException){
            $this->error("Wrong name entered. Available: $currencies.");
            return 0;
        }

        $thisCurrency = $actualCurrencies[$currenciesID[$currencyShort]];
        $currencyParams = [
            'name' => $currencyShort,
            'scale' => $thisCurrency['Cur_Scale'],
            'rate' => $thisCurrency['Cur_OfficialRate'],
        ];

        CurrencyJob::dispatch($currencyParams);
        $this->info('Mail sent successfully!');

        return 0;
    }
}
