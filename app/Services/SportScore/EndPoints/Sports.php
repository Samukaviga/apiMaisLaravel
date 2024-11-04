<?php 

namespace App\Services\SportScore\EndPoints;

use App\Services\SportScore\Entities\Sport;
use App\Services\SportScore\SportScoreService;
use Illuminate\Support\Collection;

class Sports 
{


    private SportScoreService $service;

    public function __construct()
    {

        $this->service = new SportScoreService();

    }

    public function get(): Collection 
    {
        return $this->transform($this->service->api->get('/sports')->json('data'));
    }


    public function transform(mixed $json):Collection 
    {
        return $collection = collect($json)->map(function ($sport) {
            return new Sport($sport); 
        });
    }

 }