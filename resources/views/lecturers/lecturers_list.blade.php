@extends('layouts.app')
@section('content')
@include('students.include.information_partials')

<div class = "container">


  <table class="table">
  <thead class="thead-dark" >
    <tr>
      <th scope="col">Member No .  </th>
      <th scope="col"> Member's Name:  </th>
      <th scope="col">Member's Position: </th>
      <th scope="col">Member's Gender: </th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  		@foreach ($lecturers as $lecturer)
		<tr> 
			<td>{{$lecturer->lecturer_id}} </td>
			<td>{{$lecturer->lecturer_name}} </td>
			<td>{{$lecturer->faculty}} </td>
      <td>{{$lecturer->gender}} </td>
			<td>
				<a href="{{ route('lecturers.edit', $lecturer->id)}}" > Edit </a>	
				<form action="{{ route('lecturers.destroy', $lecturer->id)}}" method="POST">
									
					@csrf
                    @method('DELETE') 

					<button style="background-color:red"type="submit" > Delete </button>
				</form>
			</td>
		</tr>
		@endforeach  

  </tbody>
</table>





  

  </div>

  

   @endsection