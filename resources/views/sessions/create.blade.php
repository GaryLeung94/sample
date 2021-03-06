@extends('layouts.default')
@section('title', 'Log In')

@section('content')
<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>Log In</h5>
        </div>
        <div class="panel-body">
            @include('shared._errors')

            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="password">Password (<a href="{{ route('password.request') }}">Forgot password?</a>): </label>
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                </div>

                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember Me</label>
                </div>

                <button type="submit" class="btn btn-primary">Log In</button>
            </form>

            <hr>

            <p>Have no account? <a href="{{ route('signup') }}">Sign up NOW! </a></p>
        </div>
    </div>
</div>
@stop
