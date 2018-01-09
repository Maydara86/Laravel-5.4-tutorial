@extends('layouts.master')

@section('content')

<div class="col-sm-8">

    <h1>Register</h1>

    <form method="POST" action="/register">

        {{ csrf_field() }}
    
        <div class="form-group">

            <label for="name">Name:</label>

            <input class="form-control" type="text" id="name" name="name">

        </div>

        <div class="form-group">

            <label for="email">Email:</label>

            <input class="form-control" type="email" id="email" name="email">

        </div>

        <div class="form-group">

            <label for="password">Password:</label>
            
            <input class="form-control" type="password" id="password" name="password">

        </div>

        <div class="form-group">

            <label for="password_confirmation">Repeat Password:</label>
            
            <input class="form-control" type="password" id="password_confirmation" name="password_confirmation">

        </div>

        <div class="form-group">
            
            <button type="submit" class="btn">Register</button>
          
        </div>
    
        @if(count($errors))
    
            @include('layouts.error')

        @endif

    </form>

</div>

@endsection