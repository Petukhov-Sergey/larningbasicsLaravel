@extends('layouts/main')
@section('content')
    <div>
        <a href="{{route('post.create')}}" class="btn btn-primary mb-3"> Add new post </a>
    </div>
    @foreach($posts as $post)
        <div>
            <a href="{{{route('post.show', $post->id)}}}" class="nav-item nav-link">
            {{$post->id}}. {{$post->title}}
            </a>
        </div>

    @endforeach
@endsection
