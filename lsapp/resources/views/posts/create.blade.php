@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card shadow">
            <div class="card-body">
              <h1 class="mb-4">create post</h1>
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
      </div>
    </div>
@endsection
