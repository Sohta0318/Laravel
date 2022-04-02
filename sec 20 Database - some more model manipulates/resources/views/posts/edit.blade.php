@extends('layouts.app')

@section('content')
<h1>Edit Post</h1>
{!! Form::model($post,['method'=>'PATCH','action'=>['App\Http\Controllers\PostsController@update',$post->id]]) !!}@csrf 

  {!! Form::text('title', $post->title) !!}
  {!! Form::submit('Update post', ['class'=>'btn btn-info']) !!}
  {!! Form::close() !!}

{!! Form::open(['method'=>'DELETE','action'=>['App\Http\Controllers\PostsController@destroy',$post->id]]) !!}
  @csrf
  {!! Form::submit('Delete post', ['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
@endsection

@section('footer')

@endsection