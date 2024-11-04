<?php 


namespace App\Services\SportScore\Entities;

class Sport
{

//aqui teremos a estrutura do objeto sport que vai retornar os esportes
/*
    id:1
    slug:"football"
    name:"Football"
    name_translations: */

   
    public int $id;
    public string $name;
    public string $slug;
    public array $nameTranslations;

    public function __construct(array $data) {
        
        $this->id = data_get($data, 'id');
        $this->slug = data_get($data, 'slug');
        $this->name = data_get($data, 'name');
        $this->nameTranslations = data_get($data, 'name_translations');       
    
    }

}