@extends('layouts.app')

@section('content')
<style>
  .dash-shell {
    font-family: "Inter", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    padding: 0.25rem 0;
  }

  .dash-card {
    background: #ffffff;
    border: 2px solid rgba(10, 42, 79, 0.22);
    border-radius: 18px;
    box-shadow: 0 18px 50px rgba(10, 42, 79, 0.10);
    overflow: hidden;
  }

  .dash-card__header {
    padding: 1.75rem 2rem 1.25rem;
    background: linear-gradient(180deg, rgba(10, 42, 79, 0.10), rgba(10, 42, 79, 0.00));
    border-bottom: 2px solid rgba(10, 42, 79, 0.18);
  }

  .dash-accent {
    color: #0a2a4f;
  }

  .dash-card__body {
    padding: 1.75rem 2rem 2.25rem;
  }

  .dash-card__body .table th,
  .dash-card__body .table td {
    vertical-align: middle;
  }

  .dash-card__body .btn-primary {
    background-color: #0a2a4f;
    border-color: #0a2a4f;
  }

  .dash-card__body .btn-primary:hover {
    background-color: #08315e;
    border-color: #08315e;
  }

  .dash-card__body .btn-default {
    border-width: 2px;
  }

  .dash-card__body .btn-danger {
    border-width: 2px;
  }
</style>
<div class="dash-shell">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="dash-card">
          <div class="dash-card__header">
            <h2 class="mb-0 dash-accent">Dashboard</h2>
          </div>
          <div class="dash-card__body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h3 class="mb-1">Your Posts</h3>
                            <small class="text-muted">
                                {{ count($posts) }} {{ count($posts) === 1 ? 'post' : 'posts' }} total
                            </small>
                        </div>
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    </div>

                    @if(count($posts) > 0)
                        <div class="table-responsive">
                            <table class="table table-striped align-middle">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>
                                                <strong>{{ $post->title }}</strong>
                                            </td>
                                            <td class="text-right">
                                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-default">Edit</a>
                                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center py-4">
                            <p class="lead mb-2">You haven’t written any posts yet.</p>
                            <p class="text-muted mb-3">Start your blog by creating your first post.</p>
                            <a href="/posts/create" class="btn btn-primary">Create Your First Post</a>
                        </div>
                    @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
