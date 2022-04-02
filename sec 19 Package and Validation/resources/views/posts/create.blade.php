@extends('layouts.app')
@section('content')
<h1>Create Post</h1>
{{-- <form action="/posts" method="post"> --}}
  {!! Form::open(['method'=>'POST','action'=>['App\Http\Controllers\PostsController@store']]) !!}
  @csrf
  <div class="form-group">{!! Form::label('title', 'Title:') !!}
  {!! Form::text('title', null, ['class'=>'form-control']) !!}
  </div>
  <div class="form-group">
{!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
  </div>
  {!! Form::close() !!}

@if(count($errors) > 0)

<div class="alert alert-danger">@foreach ($errors->all() as $error)
  <li>{{$error}}</li>

@endforeach</div>
@endif

@endsection

@section('footer')

@endsection