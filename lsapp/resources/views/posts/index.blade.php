@extends('layouts.app')

@section('content')
    <style>
      .posts-shell {
        font-family: "Inter", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        padding: 0.25rem 0;
      }

      .posts-card {
        background: #ffffff;
        border: 2px solid rgba(10, 42, 79, 0.22);
        border-radius: 18px;
        box-shadow: 0 18px 50px rgba(10, 42, 79, 0.10);
        overflow: hidden;
      }

      .posts-card__header {
        padding: 1.75rem 2rem 1.25rem;
        background: linear-gradient(180deg, rgba(10, 42, 79, 0.10), rgba(10, 42, 79, 0.00));
        border-bottom: 2px solid rgba(10, 42, 79, 0.18);
      }

      .posts-accent {
        color: #0a2a4f;
      }

      .posts-card__body {
        padding: 1.75rem 2rem 2.25rem;
      }

      .posts-card__body .card {
        border: 2px solid rgba(10, 42, 79, 0.20);
        border-radius: 14px;
      }

      .posts-card__body .card + .card {
        margin-top: 1rem;
      }

      .posts-card__body .card-title a {
        color: #0a2a4f;
      }

      .posts-card__body .card-title a:hover {
        text-decoration: underline;
      }

      .posts-card__body .pagination .page-link {
        border-width: 2px;
      }
    </style>
    <div class="posts-shell">
      <div class="posts-card">
        <div class="posts-card__header">
          <h1 class="mb-0 posts-accent">posts</h1>
        </div>
        <div class="posts-card__body">
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
    </div>
  </div>
</div>
@endsection