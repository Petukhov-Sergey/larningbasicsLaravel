@extends('layouts/main')
@section('content')
    <div>
        <div>
            {{$post->id}} . {{$post->title}}
        </div>
        <div>{{$post->body}}</div>
        <div>
            <a href="{{route('post.edit', $post->id)}}" class="nav-item nav-link">Edit</a>
        </div>
        <div>
            <a class="nav-item nav-link">Back</a>

        </div>
        <div>
            <form action="{{route('post.destroy', $post->id)}}" method="POST">
                @csrf
                @method('delete')
                <input type='submit'class="nav-item nav-link" value="Delete">
            </form>
        </div>
    </div>
@endsection
