@extends('app')
@section('content')
    @foreach($rests as $rest)
           <table class="table hover">
               <tr>
                   <td colspan="32">{{$rest->name}}</td>
                   <td colspan="32">{{$rest->email}}</td>
                   <td><a href="{{URL::to('edit',array($rest->id))}}">Edit</a></td>
                   <td><a href="{{URL::to('delete',array($rest->id))}}">Delete</a></td>
               </tr>
           </table>
    @endforeach
@stop