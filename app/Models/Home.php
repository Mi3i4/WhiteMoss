<?php

namespace App\Models;

use EditDataJson;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $dataJson; 
    
    /*** возвращает данные страницы ***/
    public function show(){
        $this->dataJson = new EditDataJson();
        return $this->dataJson->readModel(['home']); 
    }
}
