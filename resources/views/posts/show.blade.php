@extends('layouts.master')

@section('content')

    <h1 class="card-title font-weight-bold">
        {{$post->title}}
    </h1>

    <div class="font-weight-normal">
        {{$post->body}}
    </div>

    <div class="comments">
        <ul class="list-group">

        @foreach($post->comments as $comment)

        <li class="list-group-item">
        <strong>{{$comment->created_at->diffForHumans()}}:</strong> {{$comment->body}}</li>

        @endforeach    
        
        </ul>
    </div>

{{--  Comments section  --}}
    
    <hr>
    <div class="card">
    
        <div class="car-block">
        
            <form action="/post/{{$post->id}}/comment" method="post">

            {{ csrf_field() }}
            
                <div class="form-group">
                
                    <textarea class="form-control" name="body" placeholder="Type your comment here." id="" cols="65" rows="4"></textarea>
                
                </div>
            
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Comment</button>
                </div>
                
            </form>

        @if(count($errors))
 
            @include('layouts.error')
 
        @endif

        </div>
    
    </div>
    

@endsection