@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
            You can see the demo project homepage <a href="https://laravel-china.org/courses/laravel-essential-training-5.1">Laravel 入门教程</a>.
        </p>
        <p>
            Everything will start here.
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Sign up now</a>
        </p>
    </div>
@stop
