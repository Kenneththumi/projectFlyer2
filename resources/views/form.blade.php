@extends('app')
@section('content')
    <h3>Form</h3>
    {!! Form::open(['url'=>'auth/register']) !!}
    <br>
    {!! Form::label('Name') !!}
    {!! Form::text('name') !!}
    <br><br>
    {!! Form::label('Email') !!}
    {!! Form::email('email') !!}
    <br><br>
    {!! Form::label('Subject') !!}
    {!! Form::text('subject') !!}
    <br><br>
    {!! Form::label('message') !!}
    {!! Form::textarea('message') !!}

    {!! Form::submit('Submit Details') !!}
    {!! Form::close() !!}
@stop
