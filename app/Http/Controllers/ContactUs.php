<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests\ContactUsVal as Request;

class ContactUs extends Controller
{
    public function index(Request $request){
        
        $validated = $request->validate();
    } 
}
