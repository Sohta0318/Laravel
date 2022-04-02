<?php

use App\Models\Photo;
use Illuminate\Support\Facades\Route;
use App\Models\Staff;
use App\Models\Product;

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
    $staff = Staff::findOrFail(1);
    $staff->photos()->create(['path'=>'example.jpg']);
});

Route::get('/read',function(){
$staff = Staff::find(1);
dd($staff->photos);
// return $staff->photos();
});

Route::get('/update',function(){
$staff = Staff::find(1);
$photo = $staff->photos()->whereId(1)->first();
$photo->path = 'Updated.jpg';
$photo->save();
// $photo->update(['path'=>'test.jpg']);
});

Route::get('/delete',function(){
    $staff = Staff::find(1);
    $staff->photos()->whereId(1)->delete();
});

Route::get('/assign',function(){
$staff = Staff::findOrFail(1);
$photo = Photo::find(3);

$staff->photos()->save($photo);
});

Route::get('/unassign',function(){
    $staff = Staff::findOrFail(1);
    $staff->photos()->whereId(3)->update(['imageable_id'=>'0','imageable_type'=>'h']);
});