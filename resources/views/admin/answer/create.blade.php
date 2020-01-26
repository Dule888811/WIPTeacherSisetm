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
            <select name="test_id">
                <option value={{$question_id}} selected>{{$question_id}}</option>
            </select>
            <input type="submit" value="submit">
        </div>


@endsection