@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card shadow">
        <div class="card-body">
          <h2 class="mb-4">Dashboard</h2>
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
@endsection
