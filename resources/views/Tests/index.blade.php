@extends('layouts.app')
@if(count($errors))
    @foreach($errors->all() as $error)
        {{$error}}<br>
    @endforeach
@endif
@section('content')
    <div class="list">
        @foreach($tests as $test)
            <ul class="ul-tests">
                <li class="li-tests">Test name: {{$test->name}}</li>

                <a class="btn btn-primary" href="{{route('question.index',$test->id)}}">See test</a>
            </ul>
        @endforeach


    </div>
@endsection