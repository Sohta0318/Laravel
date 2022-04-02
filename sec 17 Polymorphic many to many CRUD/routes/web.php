<?php

use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;
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
    return view('welcome');
});

Route::get('/create',function(){
    $post = Post::create(['name'=>'example post 1']);

    $tag1 = Tag::find(1);
    $post->tags()->save($tag1);

    $video = Video::create(['name'=>'example video 1']);

    $tag2 = Tag::find(2);

    $video->tags()->save($tag2);
});

Route::get('/read',function(){
$post = Post::find(2);
// dd($post->tags);
return $post->tags;
});

Route::get('/update',function(){
    // $post = Post::find(2);

    // foreach($post->tags as $tag){
    //     return $tag->whereName('test')->update(['name'=>'PHP']);
    // }

    $post = Post::find(2);
    $tag1 = Tag::find(2);

    // $post->tags()->save($tag1);
    // $post->tags()->attach($tag1);
    $post->tags()->sync([1,2]);
    
});

Route::get('/delete',function(){
    $post = Post::find(2);

    foreach($post->tags as $tag){
        $tag->whereId(3)->delete();
    }
});