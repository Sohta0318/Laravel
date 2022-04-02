@extends('layouts.app')

@section('content')
<h1>Edit Post</h1>
<form action="/posts/{{$post->id}}" method="post">@csrf <input type="hidden" name="_method" value="PUT"><input type="text" name="title" placeholder="Enter title" value="{{$post->title}}"><input type="submit" name="submit" value="Update"></form>

<form action="/posts/{{$post->id}}" method="post">
  @csrf
<input type="hidden" name="_method" value="DELETE">
<input type="submit" value="Delete">
</form>
@endsection

@section('footer')

@endsection