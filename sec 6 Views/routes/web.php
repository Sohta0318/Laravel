<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function () {
//     return "This is about page";
// });
// Route::get('/contact', function () {
//     return "This is contact page";
// });
// Route::get('/post/{id}/{name}',function($id,$name){
//     return "This is post number $id $name";
// });

// Route::get('/admin/posts/example',array('as'=>'admin.home',function(){
//     $url = route('admin.home');
//     return "This url is ". $url;
// }));

use App\Http\Controllers\PostsController;
// Route::get('/post/{id}',[PostsController::class, 'index'])
// Route::resource('posts',PostsController::class);

// Route::get('/contact',[PostsController::class, 'contact'] );

// Route::get('post/{id}/{name}/{password}',[PostsController::class,'show_post'])

use Illuminate\Support\Facades\DB;
// Route::get('/insert',function(){
//   DB::insert('insert into posts(title, content) values (?, ?)',['PHP with Laravel', 'Laravel is the best thing that has happened to PHP']);
// })

// Route::get('/read',function(){
//   $result = DB::select('select * from posts where id = ?',[1]);
      // return $result;
//   // foreach ($result as $post) {
//   //   # code...
//   //   return $post->title; 
    
//   // }
// })

// Route::get('/update',function(){
//   $updated = DB::update('update posts set title = ? where id = ?',['Updated PHP',1]);
//   return $updated;
// })

Route::get('/delete',function(){
  $deleted = DB::delete('delete from posts where id = ?',[1]);
  return $deleted;
})
?>