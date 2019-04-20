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

/*** products ***/
Route::get("products/{productName}", 'ControllerProducts@index');

Route::get('/about', 'ControllerAbout@index' )->name('about');

/*** home and on home ***/
Route::get('/', 'ControllerHome@index')->name('home');

Route::get('/partners', 'ControllerPartners@index')->name('partners');

Route::get('/exhibitions', 'ControllerExhibitions@index')->name('exhibitions');

Route::get('/certificates', 'ControllerCertificates@index')->name('certificates');

/*** служебные 
Route::get("make/{model}/{controller}", function($model, $controller){
    EditDataJson::create($model, $controller);
}); ***/

/*** Contacts ***/
Route::post('/contactUs', 'ControllerContactUs@ship')->name('contactUs');

Route::get('/contacts', 'ControllerContacts@index')->name('contacts');

Route::get('/get_captcha/{config?}', function (\Mews\Captcha\Captcha $captcha, $config = 'flat') {
    return $captcha->src("flat");
});


