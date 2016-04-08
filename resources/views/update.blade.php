@extends('app')
@section('content')
    <h3>Form</h3>
    {!! Form::model($user,['url'=>'/update/'.$user->id]) !!}
    {!! Form::text('name', null, []) !!}
    {!! Form::email('email', null, []) !!}
    {!! Form::submit('Submit') !!}
@stop
