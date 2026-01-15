@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card shadow">
        <div class="card-body">
          <a href="/posts" class="btn btn-link p-0 mb-2">back</a>
          <h1 class="mb-3">{{$post->title}}</h1>

          <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="cover image for {{$post->title}}">
          <div>
            {{$post->body}}
          </div>
          <hr>
          <small class="post-meta">written on {{$post->created_at}} by {{$post->user->name}}</small>
          <div class="post-actions mt-3">
            @if (!Auth::guest())
                @if(Auth::user()->iid == $post->user_id)
            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('delete', ['class' => 'btn btn-danger'] )}}
            {!! Form::close() !!}
            @endif
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
