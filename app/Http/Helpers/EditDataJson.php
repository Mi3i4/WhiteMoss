<?php // app\Helpers\EditDataJson.php
 
namespace App\Http\Helpers;

use Artisan;
use Illuminate\Support\Facades\Storage;

class EditDataJson
{
    
    protected $json_url, $data;  
    
    /*** достаем json и преобразуем в массив ***/
    public function __construct(){
        $this->json_url = "Data/data.json";
        $this->data = Storage::get($this->json_url);
        $this->data = json_decode($this->data, true);
    }
    
    public static function create($modelName, $controllerName)
    {
             Artisan::call("make:model",  ["name" => "Models\\$modelName"]);
             Artisan::call("make:controller", ["name" => "$controllerName", "--model" => "app\\Models\\$modelName"]);
    }
    
    public function readModel($downToPage)
    {
        /*** спускаемся в губину по json до данных страницы ***/
        foreach($downToPage as $val){
            $this->data = $this->data[$val];
        }
        return $this->data;
    }
}