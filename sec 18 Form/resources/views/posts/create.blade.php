@extends('layouts.app')

@section('content')
<h1>Create Post</h1>
<form action="/posts" method="post">@csrf<input type="text" name="title" placeholder="Enter title"><input type="submit" name="submit" value="submit"></form>
@endsection

@section('footer')

@endsection