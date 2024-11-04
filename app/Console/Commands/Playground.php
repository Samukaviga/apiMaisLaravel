<?php

namespace App\Console\Commands;

use App\Services\SportScore\SportScoreService;
use \Illuminate\Support\Facades\Http;
use Illuminate\Console\Command;

class Playground extends Command
{

    protected $signature = 'play';


    protected $description = 'Playground command';


    public function handle()
    {
        
        /*
        $return = Http::withHeaders([
            'X-Rapidapi-Key' => 'fe88b8a678mshd513f646649e226p10f652jsn600d7ec5745a',
            'X-Rapidapi-Host' => 'sportscore1.p.rapidapi.com',
        ])
        ->get('https://sportscore1.p.rapidapi.com/sports/1/teams?page=1');

            */

        $service= new SportScoreService();
            
        $json = $service->sports()->get();

        /*
        $json = $return->json('data');
        */

     
        foreach($json as $value) {

            dump($value->name);
        }
      
        return Command::SUCCESS;
    }
}
