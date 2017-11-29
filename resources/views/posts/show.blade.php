@extends('layouts.master')

@section('content')

    <h1 class="card-title font-weight-bold">
        {{$post->title}}
    </h1>

    <div class="font-weight-normal">
        {{$post->body}}
    </div>

@endsection