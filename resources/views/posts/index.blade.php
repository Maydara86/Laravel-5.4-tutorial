@extends('layouts.master')

@section('content')

    @foreach($posts as $post)
        <p><a href="/posts/{{$post->id}}" class="text-primary">{{$post->title}}</a></p>
    @endforeach

@endsection