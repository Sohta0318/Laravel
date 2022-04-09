<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function show(Post $post){

        return view('blog-post',compact('post'));
    }

    public function create(){
        return view('admin.posts.create');
    }
    
    public function store(Request $request){
        // return dd($request->all());
        // return dd(request()->all());


        request()->validate([
            'title'=>'required|min:8|max:255',
            'post_image'=>'file',
            'body'=>'required'
            
        ]);

    }
}