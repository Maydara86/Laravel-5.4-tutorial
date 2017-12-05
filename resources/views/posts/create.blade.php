@extends('layouts.master')

@section('content')

    <h1>Publish a Post</h1>

    <hr>

<form method="POST" action="/posts">
{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputtitle">Title</label>
    <input type="text" class="form-control" id="exampleInputtitle" placeholder="Title" name="title">
  </div>
  <div class="form-group">
    <label for="exampleInputBody">Post</label>
    <textarea class="form-control" id="exampleInputBody" rows="5" placeholder="Here you can type your post..." name="body"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Publish</button>
</form>

@endsection