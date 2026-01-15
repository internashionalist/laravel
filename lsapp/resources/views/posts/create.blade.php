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
      }

      .post-card__body .form-control {
        border-width: 2px;
        border-radius: 10px;
      }

      .post-card__body label {
        font-weight: 600;
        color: rgba(10, 42, 79, 0.9);
      }

      .post-card__body .btn-primary {
        background-color: #0a2a4f;
        border-color: #0a2a4f;
        padding: 0.55rem 1rem;
        border-radius: 12px;
        font-weight: 600;
      }

      .post-card__body .btn-primary:hover {
        background-color: #08315e;
        border-color: #08315e;
      }

      .post-card__body input[type="file"] {
        border: 2px dashed rgba(10, 42, 79, 0.25);
        border-radius: 12px;
        padding: 0.75rem;
        width: 100%;
        background: rgba(10, 42, 79, 0.03);
      }

      .post-card__body .form-group + .form-group {
        margin-top: 1rem;
      }
    </style>
    <div class="post-shell">
      <div class="post-card">
        <div class="post-card__header">
          <h1 class="mb-0 post-accent">create post</h1>
        </div>
        <div class="post-card__body">
          {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
              <div class="form-group">
                  {{Form::label('title', 'title')}}
                  {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'title'])}}
              </div>
              <div class="form-group">
                  {{Form::label('body', 'body')}}
                  {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'body text'])}}
              </div>
              <div class="form-group">
                  {{Form::file('cover_image')}}
              </div>
              {{Form::submit('create', ['class'=>'btn btn-primary'])}}
          {!! Form::close() !!}
        </div>
      </div>
    </div>
@endsection
