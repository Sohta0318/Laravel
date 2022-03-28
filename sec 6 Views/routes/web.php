<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Country;

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
// Route::get('/insert',function(){
//   DB::insert('insert into posts(title, content) values (?, ?)',['Laravel is awesomewith Edwin', 'Laravel is the best thing that has happened to PHP Period']);
// });

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

//   $post->title = 'New ELOQUENT title insert 2';
//   $post->user_id=1;
//   $post->content = 'Wow Eloquent is really awesome , look at this content! new one';
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

// Route::get('/forcedelete',function(){
//   Post::onlyTrashed()->forceDelete();
// })



// |----------------------------------
// |Eloquent relationship
// |----------------------------------

//One to One Relationship

// Route::get('user/{id}/post',function($id){
//   $user =User::find($id)->post;
//   return $user;
// });

// Route::get('post/{id}/user',function($id){
//   $post =Post::find($id)->user;
//   return $post;
// })

//One to Many Relationship

// Route::get('/posts',function(){
//   $user = User::find(1);
//   foreach ($user->posts as $post) {
//     # code...
//     echo $post->title.'<br>';
//   }
// });

// use App\Models\Role;
// Route::get('/posts',function(){
//   // $role = new Role;
//   // $role->name = 'subscriber';
//   // $role->save();

//   // User::create(['name'=>'Peter','email'=>'peter@gmail.com','password'=>'123']);

//   DB::insert('insert into role_user (user_id, role_id) values(?, ?)',[2,2]);
//   });

  // Many to Many relationship

  // Route::get('/user/{id}/role',function($id){
  //   $user = User::find($id)->roles()->orderBy('id','desc')->get();
  //   return $user;
  //   // foreach ($user->roles as $role) {
  //   //   # code...
  //   //   echo $role.'<br>';
  //   // }

  // })

  // Accessing the intermediate relationship table /pivot

  // Route::get('user/pivot',function(){
  //   $user = User::find(1);

  //   foreach ($user->roles as $role) {
  //     # code...
  //     echo $role->pivot;
  //   }
  // })

  Route::get('/user/country',function(){
    $country = Country::find(3);
    foreach($country->posts as $post){
      return $post;
    }
  })
?>