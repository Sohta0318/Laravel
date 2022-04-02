<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;


//* CRUD Application



Route::group(['middleware'=>'web'],function(){
  Route::resource('/posts',PostsController::class);
});
?>