@inject('countries','App\Http\Controllers\Utilities\Country')
@extends('app')
@section('content')
    <h4>Selling your Home?</h4>
    <hr>

    <form method="POST" action="flyers1" enctype="multipart/form-data">
        @if(count($errors)>0)
         <div class="alert alert-danger">
             <ul>
                 @foreach($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
             </ul>
         </div>
        @endif
        @include('flyerForm')
    </form>
@stop