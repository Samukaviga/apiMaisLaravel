<?php 

namespace App\Services\SportScore;

use App\Services\SportScore\EndPoints\HasSports;
use Illuminate\Http\Client\PendingRequest;
use \Illuminate\Support\Facades\Http;

class SportScoreService 
{

    use HasSports;

public PendingRequest $api;

public function __construct()
{

    //Retorna um PendingRequest

    $this->api = Http::withHeaders([
        'X-Rapidapi-Key' => 'fe88b8a678mshd513f646649e226p10f652jsn600d7ec5745a',
        'X-Rapidapi-Host' => 'sportscore1.p.rapidapi.com',
    
        ])->baseUrl('https://sportscore1.p.rapidapi.com'); //baseUrl para que nao precise ser passado todas as vezes, atraves dos outros metodos será implementado

}

}