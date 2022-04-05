<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // return view('welcome');

    $data = [
        "title"=>'Hi this is from laravel',
        'content'=>'This course is awesome'
    ];

    Mail::send('emails.test',$data,function($message){
        $message->to('nicosohta0318@gmail.com','Sohta')->subject('Hello student how are you?');
    });
    
});