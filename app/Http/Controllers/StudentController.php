<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Validation\Rule;
class StudentController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

   public function index(){
		$students = Student::latest()->paginate(10);

		return view('students.index', compact('students'));
	}

	 public function create(){

    	return view('students.create');
    }
     

     public function students_list(){
        $students = Student::latest()->paginate(10);
          $found = Student::where('student_id','07')->first();
          // return $found;
        return view('students.students_list', compact('students','found'));
    } 


    public function store(Request $request){
    	$request->validate([
    		'name'=>'required',
            'student_id' => 'required|unique:students|',
    		'age'=>'required',
            'batch'=>'required'
    	]);


    	Student::create($request->all());

    	return redirect()->route('students.index')->with('success', 'Profile Created Successflly!');
    }

     



    public function edit(Student $student){
 		return view('students.edit', compact('student'));
 	}


 	public function update(Request $request, Student $student){
 		$request->validate([
    		'name'=>'required',
            'student_id' =>  ['required', Rule::unique('students')->ignore($student->id), 'min:1'],
    		'batch'=>'required'

    	]);

 		
    	$student->update($request->all());

    	return redirect()->route('students.index')->with('success', 'Profile Updated Successflly!');
 	}

 	public function destroy(Student $student){

 		$student->delete();
 		return redirect()->route('students.index')->with('success', 'Profile Deleted Successflly!');
 	}
}