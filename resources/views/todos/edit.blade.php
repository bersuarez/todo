@extends('layouts.app')
@section('content')
    <a class="btn btn-secondary" href="/todo/{{$todo->id}}">Go back</a>
    <h1>EDIT</h1>
    {{ Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) }}

    {{Form::bsText('text',$todo->text)}}
    {{Form::bsTextArea('body',$todo->body)}}
    {{Form::bsText('due',$todo->due)}}
    {{Form::hidden('_method', 'PUT')}}
    {{Form::bsSubmit('Submit')}}

    {{ Form::close() }}
@endsection