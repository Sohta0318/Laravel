<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\CreatePostRequest;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::latest()->get();
        $posts = Post::latest()->get();
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        // return $request->all();
        // return $request->get('title');
        // return $request->title;

        // Post::create($request->all());

        // $input = $request->all();
        // $input['title'] = $request->title;
        // Post::create($request->all());

        //* Validation
        // $this->validate($request,['title'=>'required|max:50']);

        // $post = new Post;
        // $post->title = $request->title;
        // $post->user_id = 1;
        // $post->content = 'test';
        // $post->save();

        // return redirect('/posts');

        //* Catch files
        // $file = $request->file('file');
        // echo '<br>';
        // echo $file->getClientOriginalName();
        // echo '<br>';
        // echo $file->getSize();

        //* Store file data into DB
        $input = $request->all();

        if($file = $request->file('file')){
            $name = $file->getClientOriginalName();
            $file->move('images',$name);

            $input['path']= $name;
        }

        // $post = new Post;
        // $post->title = $request->title;
        // $post->user_id = 1;
        // $post->content = 'test';
        // $post->path = $name;
        // $post->save();
        Post::create($input);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::findOrFail($id);
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = Post::find($id);
        $post->update($request->all());
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/posts');
    }

    public function contact(){
        $people = ['Edwin','Jose','James','Peter','Maria'];

return view('contact',compact('people'));
    }

    public function show_post($id,$name,$password){
        // return view('post')->with('id',$id);
        return view('post',compact('id','name','password'));
    }
}