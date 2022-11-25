@extends('layouts.admin')
@section('content_admin')
  @extends('layouts._sidebar')
  @section('content')
    @if(session()->has('msg'))
      <b style="color: green">{{session()->get('msg')}}</b>
      <br>
  @endif
   
   
  @endsection
@endsection