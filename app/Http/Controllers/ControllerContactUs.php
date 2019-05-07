<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsVal as Validator;
use Illuminate\Support\Facades\Mail;
//use App\Mail\ContactUsMail;
    
class ControllerContactUs extends Controller
{
    public function index(Validator $validator){
        
        //return redirect(route('contacts'));
    } 
    
    public function ship(Validator $validator){
        
        if (isset($validator->failedRules)){
    
            //Mail::to('lmkosenkova1@gmail.com')->cc('nvmoiseikin@gmail.com')->send(new ContactUsMail($validator));
        }
        else {
            $data = $validator->all();
        
            try {
            $result = Mail::send('mail', ['data' => $data], function ($message) use ($data) {
                $mail_admin = env('MAIL_ADMIN');
            
                //$message->from($data['email']);
                try {
                $message->to($mail_admin);
                } catch (Exception $e) {
                var_dump($e);
                die('success');
                }
                //var_dump($data);
            }); 
            } catch (Exception $e) {
                var_dump($e);
                die('success');
            }
            
        }
            
                      
        return redirect(route('contacts'));
    }
}
