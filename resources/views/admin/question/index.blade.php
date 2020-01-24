@extends('layouts.app')
@if(count($errors))
    @foreach($errors->all() as $error)
        {{$error}}<br>
    @endforeach
@endif
@section('content')
    <div class="list">
        @foreach($questions as $question)
            <ul class="ul-tests">
                <li class="li-tests">Question name: {{$question->name}}</li>
                <li class="li-tests">expression: {{$question->expression}}</li>
                <a class="btn btn-primary" href="{{route('admin.question.create',$test->id)}}" role="button">Add questions</a>
            </ul>
        @endforeach
        <a href="{{route('admin.tests.create')}}">Create new test</a>
            <a href="{{route('admin.question.index')}}">Back to index</a>
    </div>
@endsection