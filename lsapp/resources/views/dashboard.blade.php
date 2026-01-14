@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">dashboard</div>

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">create post</a>
                    <h3>your blog posts</h3>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default">edit</a></td>
                                    <td>
                                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>you have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
