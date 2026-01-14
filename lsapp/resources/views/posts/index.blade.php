@extends('layouts.app')

@section('content')
    <h1 class="mb-4">posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img class="img-fluid rounded" src="/storage/cover_images/{{$post->cover_image}}" alt="cover image for {{$post->title}}">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3 class="card-title">
                                <a href="/posts/{{$post->id}}" class="text-decoration-none">{{$post->title}}</a>
                            </h3>
                            <p class="text-muted mb-0">
                                <small>written on {{$post->created_at}} by {{$post->user->name}}</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    @else
        <p class="alert alert-info">no posts found</p>
    @endif
@endsection