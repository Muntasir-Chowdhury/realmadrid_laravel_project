@extends('layouts.app')

@section('content')
@include('students.include.information_partials')

 
<div>
	<br>
	<br>
	

<form action="{{route('lecturers.update',$lecturer->id) }}" method="POST"> 
      @csrf
      @method('PUT')
  <div class="container" style="background-color: #169ad7">
    <br>
    <h1>Update the member's information.</h1>
    <p>Please fill in the form if you want to edit/update club member's information.</p>
    <hr>
    @if ($errors->any())
    <div  >
        <strong style="color: red;">Whoops!</strong> This member number is already taken, choose different one.<br><br>
       
    </div>
    @endif


    <label for="lecturer_id"><b>Member No.</b></label>
    <input type="text" name="lecturer_id" placeholder="Lecturer ID (XXX-XXX-XXX)" value="{{$lecturer->lecturer_id}}">

    <label for="lecturer_name"><b>Member's Name:</b></label>
    <input type="text" name="lecturer_name" placeholder="Full Name"
     value="{{$lecturer->lecturer_name}}">

    <label for="text"><b>Member's Position:</b></label>
    <select   name="faculty">

                           <option value="{{$lecturer->faculty}}">{{$lecturer->faculty}}</option>
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
    
    <button class="btn btn-success" type="submit" >Update</button>
    <br>
    <br>
  </div>
  </form> 
</div>
@endsection