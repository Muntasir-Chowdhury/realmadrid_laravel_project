@extends('layouts.app')

@section('content')
@include('students.include.information_partials')
<div class = "container">
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Jersey Number </th>
      <th scope="col"> Player's Name </th>
      <th scope="col"> Player's Age </th>
      <th scope="col">Player's Position</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @if($students!=null)
      @foreach ($students as $student)
    <tr> 
      <td>{{$student->student_id}} </td>
      <td>{{$student->name}} </td>
      <td>{{$student->age}} </td>
      <td>{{$student->batch}} </td>
      <td>
        <form action="{{ route('students.destroy', $student->id)}}" method="POST">
          <a class="btn btn-primary" href="{{ route('students.edit', $student->id)}}" > Edit </a>         
          @csrf
                    @method('DELETE') 

          <button class="btn btn-danger" type="submit" > Delete </button>
        </form>
      </td>
    </tr>
    @endforeach 
    @endif

  </tbody>
</table>





  </div>

  @endsection