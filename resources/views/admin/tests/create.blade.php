@extends('layouts.app')
@if(count($errors))
    @foreach($errors->all() as $error)
        {{$error}}<br>
    @endforeach
@endif
@section('content')
<form action = "{{route('admin.tests.store')}}" method="post">
    {{csrf_field()}}
    <div class="form-input">
        <label for="name_test"> Name of Test</label>
        <input type="text" name="name_test">
        <input type="submit" value="submit">
    </div>
    <a href="{{route('admin.tests.index')}}">Back to index</a>


@endsection