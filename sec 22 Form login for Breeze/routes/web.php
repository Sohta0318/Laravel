<?php

use Illuminate\Support\Facades\Auth;
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
    // if(Auth::check()){
    //     $user = Auth::user()->name;
    //     return "you are logged in ". $user;
    // }
    // $username = 'ysvgdwx';
    // $password = 'ysvgdwx';
    // if(Auth::attempt(['username'=>$username,'password'=>$password])){
    //     return redirect()->intended('/dashboard');
    // }
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';