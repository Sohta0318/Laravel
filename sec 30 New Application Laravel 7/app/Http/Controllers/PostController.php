<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index(){
        // $posts = Post::all();
        $posts = auth()->user()->posts()->paginate(3);
        
        return view('admin.posts.index',compact('posts'));
    }

    public function show(Post $post){

        return view('blog-post',compact('post'));
    }

    public function create(){
        $this->authorize('create',Post::class);
        return view('admin.posts.create');
    }
    
    public function store(Request $request){
        // return dd($request->all());
        // return dd(request()->all());

        $this->authorize('create',Post::class);

        $inputs = request()->validate([
            'title'=>'required|min:8|max:255',
            'post_image'=>'file',
            'body'=>'required'
        ]);

        if(request('post_image')){
            $inputs['post_image']=request('post_image')->store('public');
        };

        auth()->user()->posts()->create($inputs);

        session()->flash('post-created-message','Post '. $inputs['title'].' was created');

        return redirect()->route('post.index');
        // return back();

    }

    public function destroy(Post $post, Request $request){
        $this->authorize('delete',$post);

        $post->delete();
        Session::flash('message','Post was deleted');
        // $request->session()->flash('message','Post was deleted');
        return back();
    }

    public function edit(Post $post){
        // if(auth()->user()->can('view',$post)){};
        
        $this->authorize('view',$post);

        return view('admin.posts.edit',compact('post'));
    }

    public function update(Post $post){
        $inputs = request()->validate([
            'title'=>'required|min:8|max:255',
            'post_image'=>'file',
            'body'=>'required'
        ]);
        if(request('post_image')){
            $inputs['post_image']=request('post_image')->store('public');
            $post->post_image = $inputs['post_image'];
        };

       $post->title = $inputs['title'];
       $post->body = $inputs['body'];

       $this->authorize('update',$post);

       $post ->save();
    //    auth()->user()->posts()->save($post);

       session()->flash('post-updated-message','Post '. $inputs['title'].' was updated');

       return redirect()->route('post.index');
    }

}