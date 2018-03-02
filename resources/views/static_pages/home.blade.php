@extends('layouts.default')

@section('content')
    @if (Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    @include('shared._status_form')
                </section>
                <h3>Weibo lists</h3>
                @include('shared._feed')
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info', ['user'=> Auth::user()])
                </section>
            </aside>
        </div>
    @else
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
    @endif
@stop
