@extends('layouts.app')

@section('content')
<style>
  .post-shell {
    font-family: "Inter", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    padding: 0.25rem 0;
  }

  .post-card {
    background: #ffffff;
    border: 2px solid rgba(10, 42, 79, 0.22);
    border-radius: 18px;
    box-shadow: 0 18px 50px rgba(10, 42, 79, 0.10);
    overflow: hidden;
  }

  .post-card__header {
    padding: 1.75rem 2rem 1.25rem;
    background: linear-gradient(180deg, rgba(10, 42, 79, 0.10), rgba(10, 42, 79, 0.00));
    border-bottom: 2px solid rgba(10, 42, 79, 0.18);
  }

  .post-accent {
    color: #0a2a4f;
  }

  .post-card__body {
    padding: 1.75rem 2rem 2.25rem;
    line-height: 1.65;
  }

  .post-card__body img {
    border-radius: 14px;
    border: 2px solid rgba(10, 42, 79, 0.20);
    margin-bottom: 1.25rem;
  }

  .post-meta {
    color: rgba(10, 42, 79, 0.65);
    font-size: 0.9rem;
  }

  .post-actions .btn {
    border-width: 2px;
  }

  .post-actions .btn-danger {
    background-color: #7a1f1f;
    border-color: #7a1f1f;
  }

  .post-actions .btn-danger:hover {
    background-color: #641818;
    border-color: #641818;
  }

  .back-link {
    color: #0a2a4f;
    font-weight: 500;
  }

  .back-link:hover {
    text-decoration: underline;
  }
</style>
<div class="post-shell">
  <div class="post-card">
    <div class="post-card__header">
      <a href="/posts" class="back-link">back</a>
      <h1 class="mb-0 post-accent">{{$post->title}}</h1>
    </div>

    <div class="post-card__body">
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
@endsection
