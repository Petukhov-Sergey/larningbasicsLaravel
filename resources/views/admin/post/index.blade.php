@extends('layouts.admin')
@section('content')
    <div>
        <div>
            <a href="{{route('admin.post.create')}}" class="btn btn-primary mb-3"> Add new post </a>
        </div>
        @foreach($posts as $post)
            <div>
                <a href="{{{route('admin.post.show', $post->id)}}}" class="nav-item nav-link">
                    {{$post->id}}. {{$post->title}}
                </a>
            </div>
        @endforeach
        <div>
            {{$posts->withQueryString()->links()}}
        </div>
    </div>
@endsection
