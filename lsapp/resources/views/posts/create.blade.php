@extends('layouts.app')

@section('content')
    <h1>create post</h1>
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
@endsection
