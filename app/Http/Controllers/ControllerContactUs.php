<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsVal as Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMail;
    
class ControllerContactUs extends Controller
{
    public function index(Validator $validator){
        
        //return redirect(route('contacts'));
    } 
    
    public function ship(Validator $validator){
        
        if (!$validator->failedRules){
    
            Mail::to('lmkosenkova1@gmail.com')->cc('nvmoiseikin@gmail.com')
            ->send(new ContactUsMail($validator));
        }
        
        return redirect(route('contacts'));
    }
}
