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
   





  <form action="{{route('students.store')}}" method= "POST"> 
      @csrf
  <div class="container" style="background-color: #169ad7">
    <br>
    <h1>Add New Player</h1>

    <p>Please fill in this form to add new player.</p>
    <hr>

    <label for="student_id"><b>Jersey Number</b></label>
    <input type="text" placeholder="Type Jersey Number" name="student_id">

    <label for="name"><b>Player Name</b></label>
    <input type="text" placeholder= "Type Player Name" name="name">
       
     <label for="age"><b>Player's age</b></label>
    <input type="number" max="50" min="16" placeholder= "Type Player's Age" name="age">
             
        

    <label for="text"><b>Position</b></label>
    <!-- <input type="text" placeholder="Batch"> -->
    <select   name="batch">
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
    <button class="btn btn-success" type="submit" class="registerbtn" >Register</button>
    <br>
    <br>
  </div>
  </form> 
  





</div>
@endsection