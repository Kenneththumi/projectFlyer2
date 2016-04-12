@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">

        <h1>Register</h1>

        <hr>

        <form method="POST" action="/auth/register">
            {!! csrf_field() !!}

            <div class="form-group">
                 <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>

            <div  class="form-group">
                <label>Email</label>
                <input type="email" name="email"  class="form-control"value="{{ old('email') }}">
            </div>

            <div  class="form-group">
                <label>Password</label>
                <input type="password"  class="form-control" name="password">
            </div>

            <div  class="form-group">
                <label>Confirm Password</label>
                <input type="password"  class="form-control" name="password_confirmation">
            </div>

            <div  class="form-group">
                <button type="submit" class="btn btn-success">Register</button>
            </div>

        </form>
        @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
@stop