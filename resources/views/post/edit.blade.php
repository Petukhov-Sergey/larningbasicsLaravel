@extends('layouts/main')
@section('content')
    <form action="{{route('post.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Post Title</label>
            <input type="text" name="title" class="form-control" id="postTitle">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Post Body</label>
            <textarea class="form-control" name="body" id="postBody" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Post Image</label>
            <input class="form-control" name="image" id="postImage">
        </div>
        <div class="form-group">
            <br>
         <button type="submit" class="btn btn-primary mb-2">Publish post</button>
        </div>
    </form>
@endsection
