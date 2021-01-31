<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer;
use Illuminate\Validation\Rule;
class LecturerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   

	 public function create1(){
        $existPresident = Lecturer::get()->where('faculty', 'Club President')->count();
        $president = 0;
        if($existPresident>0){
            $president = 1;
        }
        $existManager = Lecturer::get()->where('faculty', 'Club Manager')->count();
        $manager = 0;
        if($existManager>0){
            $manager = 1;
        }
        $existAssistant_Manager = Lecturer::get()->where('faculty', 'Club Assistant Manager')->count();
        $assistant_manager = 0;
        if($existAssistant_Manager>0){
             $assistant_manager = 1;
        }

        
    	return view('lecturers.create1', compact('president','manager','assistant_manager'));
    }
     

     public function lecturers_list(){
        $lecturers = Lecturer::orderBy('lecturer_id')->get();

        return view('lecturers.lecturers_list', compact('lecturers'));
    } 


    public function store(Request $request){
    	$request->validate([
    		'lecturer_name'=>'required',
    		'lecturer_id' => 'required|unique:lecturers|',
    		'faculty'=>'required',
            'gender'=>'required'

    	]);
    

    	Lecturer::create($request->all());

    	return redirect()->route('students.index')->with('success', 'Profile Created Successflly!');
    }

     



    public function edit(Lecturer $lecturer){
 		

        $existPresident = Lecturer::get()->where('faculty', 'Club President')->count();
        $president = 0;
        if($existPresident>0){
            $president = 1;
        }
        $existManager = Lecturer::get()->where('faculty', 'Club Manager')->count();
        $manager = 0;
        if($existManager>0){
            $manager = 1;
        }
        $existAssistant_Manager = Lecturer::get()->where('faculty', 'Club Assistant Manager')->count();
        $assistant_manager = 0;
        if($existAssistant_Manager>0){
             $assistant_manager = 1;
        }

        return view('lecturers.edit1', compact('lecturer','president','manager','assistant_manager'));
 	}
    
    public function trophy(Lecturer $lecturer){
        
        return view('lecturers.trophy');
    }


 	public function update(Request $request, Lecturer $lecturer){
 		$request->validate([
            'lecturer_name'=>'required',
            
            'lecturer_id' =>  ['required', Rule::unique('lecturers')->ignore($lecturer->id), 'min:1'],
            'faculty'=>'required',
            'gender'=>'required'
        ]);

 		
    	$lecturer->update($request->all());

    	return redirect()->route('students.index')->with('success', 'Profile Updated Successflly!');
 	}

 	public function destroy(Lecturer $lecturer){

 		$lecturer->delete();
 		return redirect()->route('students.index')->with('success', 'Profile Deleted Successflly!');
 	}
}