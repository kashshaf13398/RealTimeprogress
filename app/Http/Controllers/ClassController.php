<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\classes;
use App\Student;
use App\StudentClass;
use App\Attendance;
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
		$class=$post;
    	//$post =DB::table('classes')->insert($data);
    	//return response()->json($class->id);
		return view('Class.teachersView',compact('class'));
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
			$attendance= Attendance::where('class_id','=',$id)->where('User_id','=',auth()->user()->id)->first();

			if ($studentc!= null){

				//return response()->json($attendance);
				return view('Class.studentView',compact('studentc','class','attendance'));
			}
			else{
				return view('Class.studentClass',compact('id'));
			}
			
			
		}
		
	}
	public function storeStudent(Request $req,$id){
		$validatedData = $req->validate([
			'name' => 'required|max:255|min:4',
			'reg_no' => 'required|max:10|min:4',
		]);
		$student= new Student;
		$student->User_id=auth()->user()->id;
		$student->class_id=$id;
		$student->name= $req->name;
		$student->reg_no = $req->reg_no;
		$student->save();

		$class= classes::find($id);
		$studentc= Student::where('class_id','=',$id)->where('User_id','=',auth()->user()->id)->first();
		$att= Attendance::where('class_id','=',$id)->where('User_id','=',auth()->user()->id)->first();


		//$temp= Attendance::where('class_id','=',$id)->first();
		if($att==null){
			$att= new Attendance;
			$att->class_id=$id;
			$att->User_id=auth()->user()->id;
			$att->score=0;
			$att->score_by=0;
			$att->save();
		}
		$attendance=$att;

		// $studentclass= new StudentClass;
		// $studentclass->student_id=$student->id;
		// $studentclass->class_id=$id;
		// $studentclass->save();
		return view('Class.studentView',compact('studentc','class','attendance'));
		//echo "Done";
	}
	public function sviewResult1($id){
		$stu= Student::where('id','=',$id);
		return response()->json();
	}
}
