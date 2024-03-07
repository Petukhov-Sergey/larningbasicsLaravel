@extends('layouts/main')
@section('content')
    <form action="{{route('post.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Post Title</label>
            <input type="text" name="title" value="{{old('title')}}" class="form-control" id="postTitle" placeholder="Post Title">

            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="postBody">Post Body</label>
            <textarea class="form-control" name="body" id="postBody" rows="3" placeholder="Post Body">{{old('body')}}</textarea>
            @error('body')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="postImage">Post Image</label>
            <input class="form-control" name="image" id="postImage" value="{{old('image')}}" placeholder="Post Image">
            @error('image')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="postCategory">Post category</label>
            <select class="form-select" aria-label="Select a category" id="postCategory" name="category_id">
                @foreach($categories as $category)
                    <option {{old('category_id') == $category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
            @error('category_id')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <select class="form-select" multiple aria-label="Tags" name="tags[]">
                <label for="postTags">Post tags</label>
                @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select>
            @error('tags[]')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <br>
            <button type="submit" class="btn btn-primary mb-2">Publish post</button>
        </div>
    </form>
@endsection
