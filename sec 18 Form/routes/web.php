<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;


//* CRUD Application

Route::resource('/posts',PostsController::class)
?>