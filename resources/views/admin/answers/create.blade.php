@extends('layouts.app')
@if(count($errors))
    @foreach($errors->all() as $error)
        {{$error}}<br>
    @endforeach
@endif
@section('content')
    <form action = "{{route('admin.answers.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-input">
            <label for="name_test">Value</label>
            <input type="text" name="value">
            <input type="submit" value="submit">
        </div>
        <a href="{{route('admin.answers.index')}}">Back to index</a>

@endsection