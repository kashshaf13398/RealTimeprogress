<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\classes;
use App\Student;
use App\StudentClass;
use DB;
class ClassController extends Controller
{
    public function storeClass(Request $req){

		//validation
		$validatedData = $req->validate([
			'name' => 'required|unique:classes|max:255|min:4',
			'description' => 'required',
		]);

    	$data=array();
    	$data['User_id']= auth()->user()->id;
    	$data['name']=$req->name;
    	$data['description']=$req->description;

    	$post= new classes;

    	$post->User_id=auth()->user()->id;
    	$post->name=$req->name;
    	$post->description=$req->description;
    	$post->save();
    	//$post =DB::table('classes')->insert($data);
    	return response()->json($post);
    }

	public function getCourse(){
		$classes = classes::paginate(6);
		return view('showCourses',compact('classes'));
		//return response()->json($classes);
	}
	public function getInCourse($id){
		$class= classes::find($id);
		if(auth()->user()->id==$class->User_id){
			return view('Class.teachersView',compact('class'));
		}
		else{
			

			$studentc= Student::where('class_id','=',$id)->where('User_id','=',auth()->user()->id)->first();
			if ($studentc!= null){
				return response()->json($studentc->user->name);
			}
			else{
				return view('Class.studentClass',compact('id'));
			}
			
			
		}
		
	}
	public function storeStudent(Request $req,$id){
		$validatedData = $req->validate([
			'name' => 'required|unique:students|max:255|min:4',
			'reg_no' => 'required|unique:students|max:10|min:4',
		]);
		$student= new Student;
		$student->User_id=auth()->user()->id;
		$student->class_id=$id;
		$student->name= $req->name;
		$student->reg_no = $req->reg_no;
		$student->save();

		// $studentclass= new StudentClass;
		// $studentclass->student_id=$student->id;
		// $studentclass->class_id=$id;
		// $studentclass->save();
		return response()->json($student);
		//echo "Done";
	}
}
