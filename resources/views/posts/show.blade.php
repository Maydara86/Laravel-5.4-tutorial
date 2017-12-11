@extends('layouts.master')

@section('content')

    <h1 class="card-title font-weight-bold">
        {{$post->title}}
    </h1>

    <div class="font-weight-normal">
        {{$post->body}}
    </div>

    <hr>

    <div class="comments">
        <ul class="list-group">

        @foreach($post->comments as $comment)

        <li class="list-group-item">
        <strong>{{$comment->created_at->diffForHumans()}}:</strong> {{$comment->body}}</li>

        @endforeach    
        
        </ul>
    </div>
    

@endsection