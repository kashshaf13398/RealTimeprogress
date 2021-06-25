<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;
use App\classes;
use App\Student;

class AttendanceController extends Controller
{
    public function takeAttendance($id){
        $student= Student::where('class_id','=',$id)->get();
        return view('Attendance.takeAttendance',compact('student'));
    }
    public function storeAttendance(Request $req, $id){
        //return response()->json($req);
        $student = Student::where('class_id','=',$id)->get();

        
        $attendance= Attendance::where('class_id','=',$id)->get();

        $temp= Attendance::where('class_id','=',$id)->first();
        if($temp==null){
            foreach($student as $row){
                $catt= new Attendance;
                $catt->class_id=$id;
                $catt->User_id=$row->User_id;
                $catt->score=0;
                $catt->score_by=0;
                $catt->save();
                //return response()->json($catt);
            }
        }
        
        foreach($student as $row){
            $att= Attendance::where('class_id','=',$id)->where('User_id','=',$row->User_id)->first();
            if($req[$row->User_id]=="present"){
                $att->score=$att->score+1;
            }
            $att->score_by=$att->score_by+1;
            $att->save();

            
        }
        //return response()->json($i);
    }
}
