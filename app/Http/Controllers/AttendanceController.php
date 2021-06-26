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
        $i=0;
        $attendance= Attendance::where('class_id','=',$id)->get();
        foreach($student as $row){
            $i=1;
            $att= Attendance::where('class_id','=',$id)->where('User_id','=',$row->User_id)->first();
            if($att==null){
                $att= new Attendance;
                $att->class_id=$id;
                $att->User_id=$row->User_id;
                $att->score=0;
                $att->score_by=$temp->score_by;
                $att->save();
            }
            if($req[$row->User_id]=="present"){
                $att->score=$att->score+1;
            }

            if($i==1){
                $att->score_by=$attendance[0]->score_by+1;
            }else{
                $att->score_by=$att->score_by+1;
            }
            
            $att->save();

            
        }

        $at= Attendance::where('class_id','=',$id)->get();
        
        return view('Attendance.viewAttendance',compact('at'));
        //return response()->json($at);
    }
    public function viewAttendance($id){
        $at= Attendance::where('class_id','=',$id)->get();
        
        return view('Attendance.viewAttendance',compact('at'));
    }

    public function editAttendance($id){
        $attendance= Attendance::where('id','=',$id)->first();
        return view('Attendance.editattendance',compact('attendance'));
    }
    public function updateAttendance(Request $req, $id){
        $attendance= Attendance::where('id','=',$id)->first();
        $attendance->score=$req->score;
        $attendance->save();

        $at= Attendance::where('class_id','=',$id)->get();
        
        return view('Attendance.viewAttendance',compact('at'));
    }
    public function studentviewAttendance($id){
        $attendance= Attendance::where('id','=',$id)->first();

        return view('Attendance.stuattview',compact('attendance'));
    }
}
