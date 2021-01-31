@extends('layouts.app')

@section('content')
@include('students.include.information_partials')
@if ($errors->any())
    <div  >
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div>
  <br>
  <br>
	
     <form action="{{route('lecturers.store')}}" method= "POST"> 
  		@csrf
  <div class="container" style="background-color: #169ad7">
    <br>
    <h1>Register</h1>
    <p>Please fill in this form to add new club member.</p>
    <hr>

    <label for="lecturer_id"><b>Member No.</b></label>
    <input type="text" placeholder="" name="lecturer_id">

    <label for="lecturer_name"><b>Member's Name:</b></label>
    <input type="text" placeholder= "" name="lecturer_name">

    <label for="text"><b>Member's Position:</b></label>
    <select   name="faculty">
                           @if($manager==0)
                           <option value="Club Manager">Club Manager</option>
                           @endif
                           @if($assistant_manager==0)
                           <option value="Club Assistant Manager">Club Assistant Manager</option>
                           @endif
                           @if($president==0)
                            <option value="Club President">Club President</option>
                           @endif
                           
                           <option value="Staff">Staff</option>
                           <option value="Physical Assistant">Physical Assistant</option>
                           <option value="Club Scout">Club Scout</option>
                          
                         </select>
     <label for="gender"><b>Gender:</b></label>
    <select   name="gender">
                          <option value="Male">Male</option>
                           <option value="Female">Female</option>
                           <option value="Others">Others</option>
                    </select>   
                   
    <hr>
    <button class="btn btn-success registerbtn" type="submit" >Register</button>
    <br>
    <br>
  </div>
  </form> 








</div>


@endsection


