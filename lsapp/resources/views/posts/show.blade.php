@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="cover image for {{$post->title}}">
    <br><br>
        <div>
            {{$post->body}}
        </div>
        <hr>
        <small>written on {{$post->created_at}} by {{$post->user->name}}</small>
        @if (!Auth::guest())
            @if(Auth::user()->iid == $post->user_id)
        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('delete', ['class' => 'btn btn-danger'] )}}
        {!! Form::close() !!}
        @endif
        @endif
@endsection
