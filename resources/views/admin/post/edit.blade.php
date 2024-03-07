@extends('layouts.admin')
@section('content')
    <form action="{{route('admin.post.update', $post->id)}}" method="post">
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
            <label for="postCategory">Post category</label>
            <select class="form-select" aria-label="Select a category" id="postCategory" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{$category->id === $post->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <select class="form-select" multiple aria-label="Tags" name="tags[]">
                <label for="postTags">Post tags</label>
                @foreach($tags as $tag)
                    <option {{$post->tags->contains($tag->id) ? 'selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <br>
            <button type="submit" class="btn btn-primary mb-2">Update post</button>
        </div>
    </form>
@endsection
