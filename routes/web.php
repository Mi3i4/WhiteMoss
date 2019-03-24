<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function(){
    return view('home');
});

Route::get('/partners', function(){
    return view('partners');
})->name('partners');

Route::get('/about', function(){
    return view('about');
})->name('about');

// Products //
Route::get('/animals', function(){
    return view('animals');
})->name('animals');

Route::get('/equipment', function(){
    return view('equipment');
})->name('equipment');

Route::get('/fertilizer', function(){
    return view('fertilizer');
})->name('fertilizer');

// Contacts
Route::post('/contactUs', 'ControllerContactUs@ship')
->name('contactUs');

Route::get('/contacts', function(){
    return view('contacts');
})->name('contacts');

Route::get('/get_captcha/{config?}', function (\Mews\Captcha\Captcha $captcha, $config = 'flat') {
    return $captcha->src("flat");
});