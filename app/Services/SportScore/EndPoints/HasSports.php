<?php


namespace App\Services\SportScore\EndPoints;

trait HasSports 
{


    public function sports() 
    { 

        return new Sports();
    }

}