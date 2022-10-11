<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FirstCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parse:nbrb {currency?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To get the currency';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (!$this->argument('currency')){
            $this->ask('Какую валюту');
        }
//        $this->info($this->argument('currency'));
        return 0;
    }
}
