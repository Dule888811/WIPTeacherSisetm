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
              role="button">Add answer</a>
            </ul>
        @endforeach

    </div>
@endsection