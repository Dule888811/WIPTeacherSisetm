@extends('layouts.app')

@section('content')



    @if(count($errors))
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif

    <form action ="{{route('admin.question.store',$test_id)}}" method="post">
        {{csrf_field()}}

        <div class="form-input">
            <label for="name"> Name</label>
            <input type="text" name="name">
        </div>

        <div class="form-input">
            <label for="expression	">expression</label>
            <input type="text" name="expression">
        </div>

        <div class="form-input">
            <label for="answer	">answer</label>
            <input type="text" name="answer">
        </div>

        <select name="test_id">
            <option value={{$test_id}} selected>{{$test_id}}</option>
        </select>

        <div class="form-input">
            <button type="submit">Submit</button>
        </div>
    </form>
    <a href="{{route('admin.tests.index')}}">Back to index</a>

@endsection