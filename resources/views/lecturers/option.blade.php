@extends('layouts.app')

@section('content')
@include('students.include.information_partials')
<div class="container" >

   <div class="row">
   	<div class="col-2"></div>
    <div class="col" style="display: flex;">
    	<a href="{{url('clubmemories')}}"><img src="memo/m1.jpg" style="margin-right: 10px; padding-left:10px"></a>
   <a href="{{url('trophy')}}"><img src="memo/m100.jpg" style="margin-right: "></a>
    </div>
<div class="col-2"></div>
   </div>



</div>

@endsection