<?php

namespace App\Models;

use EditDataJson;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $dataJson, $page, $header_footer; 
    
    /*** возвращает данные страницы ***/
    public function show(){
        
        /*** возвращает данные  внутри страницы ***/
        $this->dataJson = new EditDataJson();
        $page =  $this->dataJson->readModel(['contacts']);
        
        /*** возвращает данные  header & footer ***/
        $this->dataJson = new EditDataJson();
        $header_footer =  $this->dataJson->readModel(['header_footer']);
        
         /*** Собираем всю page date ***/
        return ['page' => $page, 'header_footer' => $header_footer];
    }
}
