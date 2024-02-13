@extends('layouts/main')
@section('content')
    <form action="{{route('post.update', $post->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="title">Post Title</label>
            <input type="text" name="title" class="form-control" id="postTitle" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Post Body</label>
            <textarea class="form-control" name="body" id="postBody" rows="3">{{$post->body}}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Post Image</label>
            <input class="form-control" name="image" id="postImage" value="{{$post->image}}">
        </div>
        <div class="form-group">
            <br>
         <button type="submit" class="btn btn-primary mb-2">Update post</button>
        </div>
    </form>
@endsection
