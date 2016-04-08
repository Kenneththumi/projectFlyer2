@extends('app')
@section('content')
   <table>


       <?php
       echo $request->name;
       echo $request->email;
       echo $request->subject;
       echo $request->message;
           ?>
   </table>
@stop
