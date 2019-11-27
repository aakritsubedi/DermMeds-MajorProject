<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/research',function (){
    return view('research');
});

Route::get('/doctors', 'Medical@index');

Route::get('/prescription','Medical@report');

Route::get('/prescriptionView','Medical@viewPre');

Route::post('/storePrescription','Medical@store');