@extends('layouts.app')

@section('content')
@include('students.include.information_partials')

 
<div>
  <form action="{{route('students.update',$student->id) }}" method="POST"> 
      @csrf
      @method('PUT')
  <div class="container" style="background-color: #169ad7">
    <br>
    <h1>Update</h1>

    <p>Please Add The Details Of Your New Player.</p>
    <hr>
    @if ($errors->any())
    <div  >
        <strong style="color: red;">Whoops!</strong> This jersey number is already taken, choose different one.<br><br>
       
    </div>
@endif

    <label for="student_id"><b>Jersey Number</b></label>
    <input type="text" name="student_id" placeholder="Type Jersey Number" value="{{$student->student_id}}"> 

    <label for="name"><b>Player Name</b></label>
    <input type="text" name="name" placeholder="Player Name"
     value="{{$student->name}}">
       
    <label for="age"><b>Player's age</b></label> 
    <input type="number"max="50" min="16" name="age" placeholder="Player's Age"
     value="{{$student->age}}">  

    <label for="text"><b>Position</b></label>
    <!-- <input type="text" placeholder="Batch"> -->
<select   name="batch">
                           <option value="{{$student->batch}}">{{$student->batch}}</option>
                              <option value="Left Back">Left Back</option>
                           <option value="Right Back">Right Back</option>
                           <option value="Center Back">Center Back</option>
                           <option value="Center Midfield">Center Midfield</option>
                           <option value="Right Midfield">Right Midfield</option>
                           <option value="Left Midfield">Left Midfield</option>
                           <option value="Right Wing">Right Wing</option>
                           <option value="Left Wing">Left Wing</option>
                           <option value="Center Forward">Center Forward</option>
                           <option value="Goal Keeper">Goal Keeper</option>
                           
                         </select>
    <hr>
    <button class="btn btn-success" type="submit" class="registerbtn" >Update</button>
    <br>
    <br>
  </div>
  </form> 






</div>
@endsection