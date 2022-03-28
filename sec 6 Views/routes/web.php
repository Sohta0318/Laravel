<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

// |----------------------------------
// |Normal ROUTES & Parameter & Naming Routes
// |----------------------------------
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

// |----------------------------------
// |Controller ROUTES
// |----------------------------------
use App\Http\Controllers\PostsController;
// Route::get('/post/{id}',[PostsController::class, 'index'])
// Route::resource('posts',PostsController::class);

// Route::get('/contact',[PostsController::class, 'contact'] );

// Route::get('post/{id}/{name}/{password}',[PostsController::class,'show_post'])

// |----------------------------------
// |DATABASE Raw SQL Queryies
// |----------------------------------

use Illuminate\Support\Facades\DB;
Route::get('/insert',function(){
  DB::insert('insert into posts(title, content) values (?, ?)',['Laravel is awesomewith Edwin', 'Laravel is the best thing that has happened to PHP Period']);
});

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

// Route::get('/delete',function(){
//   $deleted = DB::delete('delete from posts where id = ?',[1]);
//   return $deleted;
// })

// |----------------------------------
// |ELOQUENT ORM
// |----------------------------------

// Route::get('/read',function(){
//   $posts = Post::all();
//   foreach($posts as $post){
//     return $post->title;
//   }
// });

// Route::get('/find',function(){
//   $post = Post::find(2);
//   return $post->title;
// })

// Route::get('/findwhere',function(){
//   $post = Post::where('id',2)->orderBy('id','desc')->take(1)->get();
//   return $post;
// })
// Route::get('/findmore',function(){
//   // $post = Post::findOrFail(2);
//   // return $post;
//   $post = Post::where('user_count','<','50')->firstOrFail();
//   return $post;
// })

// Route::get('/basicinsert',function(){
//   $post = new Post; //insert 

//   $post->title = 'New ELOQUENT title insert';
//   $post->content = 'Wow Eloquent is really awesome , look at this content!';
//   $post->save();
// });
// Route::get('/basicupdate',function(){
//   $post = Post::find(2); //update

//   $post->title = 'Updated title eloquent';
//   $post->content = 'Updated Wow Eloquent is really awesome , look at this content!';
//   $post->save();
// })

// Route::get('/create',function(){
//   $post = Post::create(['title'=>'the create method', 'content'=>'Wow I am learning a lot PHP with Edwin']);
// });

// Route::get('/update',function(){
//   Post::where('id',2)->where('is_admin',0)->update(['title'=>'New PHP title','content'=>'I love my instructor']);
// });

// Route::get('/delete',function(){
//   $post = Post::find(2);
//   $post ->delete();
// });

// Route::get('/delete2',function(){
//   Post::destroy([4,5]);
//   // Post::where('is_admin',0)->delete();
// });

// |----------------------------------
// |Soft Deletes
// |----------------------------------

// Route::get('/softdeletes',function(){
//   Post::find(6)->delete();
// });

// Route::get('/readsoftdeletes',function(){
//   // $post = Post::find(6);
//   // return $post;

//   // $post = Post::withTrashed()->where('id',6)->get();
//   // return $post;

//   $post = Post::onlyTrashed()->get();
//   return $post;

// });

// Route::get('/restore',function(){
//   $post = Post::withTrashed()->where('is_admin',0)->restore();
// })

Route::get('/forcedelete',function(){
  Post::onlyTrashed()->forceDelete();
})

?>