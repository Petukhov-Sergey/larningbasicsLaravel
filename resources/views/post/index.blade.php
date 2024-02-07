@extends('layouts/main')
@section('content')
    @foreach($posts as $post)
        <div class="row">
        {{$post->id}}. {{$post->title}}
        </div>
    @endforeach
@endsection
