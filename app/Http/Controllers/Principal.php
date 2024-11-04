<?php

namespace App\Http\Controllers;

use App\Services\SportScore\SportScoreService;
use Illuminate\Http\Request;

class Principal extends Controller
{
    public function index () 
    {

  

        $service = new SportScoreService();
            
        $json = $service->sports()->get();

        return view("welcome")->with('sports', $json);
    }
}
