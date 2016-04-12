@extends('app')


@section('content')
<form method="POST" action="/auth/login">
{!! csrf_field() !!}

<div class="form-group">
    <label >Email: </label>
    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
</div>

<div class="form-group">
   <label> Password</label>
    <input type="password" name="password" class="form-control" id="password">
</div>

<div class="form-group">
    <input type="checkbox" name="remember"> Remember Me
</div>

<div class="form-group">
    <button type="submit" class="btn-default">Login</button>
</div>
</form>
@stop