<?php

namespace App\Models;

use EditDataJson;
use Illuminate\Database\Eloquent\Model;


class Products extends Model
{ 
    
    protected $dataJson;
    
    /*** возвращает данные страницы ***/
    public function show($productName){
        $this->dataJson = new EditDataJson();
        return $this->dataJson->readModel(['products', $productName]); 
    }
}
