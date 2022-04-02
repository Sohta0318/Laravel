<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use App\Models\User;


//* CRUD Application



Route::group(['middleware'=>'web'],function(){
  Route::resource('/posts',PostsController::class);

  Route::get('/dates',function(){
    $date = new DateTime('+1 week');
    echo $date->format('m-d-Y');
    echo '<br>';
    echo Carbon::now()->addDays(9)->diffForHumans();
    echo '<br>';
    echo Carbon::now()->subMonths(4)->diffForHumans();
    echo '<br>';
    echo Carbon::now()->yesterday()->diffForHumans();
  });


  Route::get('/getname',function(){
    $user = User::find(1);
    echo $user->name;
  });

  Route::get('/setname',function(){
    $user = User::find(1);
    $user->name = 'william';
    $user->save();
  });
});
?>