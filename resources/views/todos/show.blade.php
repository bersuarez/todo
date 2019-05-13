@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-secondary">Go Back</a>
    <h1>{{$todo->text}}</h1>
    <hr>
    <p>{{$todo->body}}</p>
    <br>
    <br>
    <a href="{{$todo->id}}/edit" class="btn btn-secondary">Edit</a>
    {{ Form::open(['action' => ['TodosController@destroy',$todo->id], 'method' => 'POST', 'class'=>'pull-right']) }}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::bsSubmit('Delete')}}

    {{ Form::close() }}
    @endsection

