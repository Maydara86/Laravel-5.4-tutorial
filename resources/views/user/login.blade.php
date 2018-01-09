@extends('layouts.master')

@section('content')

    <h1>Login</h1>

    <form method="POST" action="/login">

        {{ csrf_field() }}
    
        <div class="form-group">

            <label for="email">Email:</label>

            <input class="form-control" type="email" id="email" name="email">

        </div>

        <div class="form-group">

            <label for="password">Password:</label>
            
            <input class="form-control" type="password" id="password" name="password">

        </div>

        <div class="form-group">
            
            <button type="submit" class="btn">Login</button>
          
        </div>

        @if(count($errors))
    
            @include('layouts.error')

        @endif
    
    </form>

@endsection