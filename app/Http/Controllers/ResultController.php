<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\classes;
use App\Result;

class ResultController extends Controller
{
    public function upTt($id){
        $stu= Student::where('class_id','=',$id)->get();
        return view('Result.formresult',compact('id','stu'));
        //return response()->json($stu);
    }
    public function storeResult(Request $req, $id){
        $class= classes::where('id','=',$id)->first();
        $stu= Student::where('class_id','=',$id)->get();
        $i=0;
        foreach($stu as $row){
            $res= new Result;
            $res->name=$req->tt_name;
            $res->class_id=$id;
            $res->User_id= $row->User_id;
            $res->score=$req[$row->User_id];
            $res->score_by=$req->score_by;
            $res->save();
            
            
        }

        

        return view('Class.teachersView',compact('class'));
    }

    public function viewResulttt1($id){
        $tt1= Result::where('class_id','=',$id)->where('name','=','TT1')->get();
        $temp1=Result::where('class_id','=',$id)->where('name','=','TT1')->first();
        $tt2= Result::where('class_id','=',$id)->where('name','=','TT2')->get();
        $temp2=Result::where('class_id','=',$id)->where('name','=','TT2')->first();
        $tt3= Result::where('class_id','=',$id)->where('name','=','TT3')->get();
        $temp3=Result::where('class_id','=',$id)->where('name','=','TT3')->first();

        return view('Result.viewResult',compact('tt1','tt2','tt3'));
        
    }
    public function viewResult1($id){
        $tt1= Result::where('class_id','=',$id)->where('name','=','TT1')->get();
        $temp1=Result::where('class_id','=',$id)->where('name','=','TT1')->first();
        $tt2= Result::where('class_id','=',$id)->where('name','=','TT2')->get();
        $temp2=Result::where('class_id','=',$id)->where('name','=','TT2')->first();
        $tt3= Result::where('class_id','=',$id)->where('name','=','TT3')->get();
        $temp3=Result::where('class_id','=',$id)->where('name','=','TT3')->first();

        return view('Result.viewResultTT1',compact('tt1','tt2','tt3'));
        
    }
    public function viewResult2($id){
        $tt1= Result::where('class_id','=',$id)->where('name','=','TT1')->get();
        $temp1=Result::where('class_id','=',$id)->where('name','=','TT1')->first();
        $tt2= Result::where('class_id','=',$id)->where('name','=','TT2')->get();
        $temp2=Result::where('class_id','=',$id)->where('name','=','TT2')->first();
        $tt3= Result::where('class_id','=',$id)->where('name','=','TT3')->get();
        $temp3=Result::where('class_id','=',$id)->where('name','=','TT3')->first();

        return view('Result.viewResultTT2',compact('tt1','tt2','tt3'));
        
    }
    public function viewResult3($id){
        $tt1= Result::where('class_id','=',$id)->where('name','=','TT1')->get();
        $temp1=Result::where('class_id','=',$id)->where('name','=','TT1')->first();
        $tt2= Result::where('class_id','=',$id)->where('name','=','TT2')->get();
        $temp2=Result::where('class_id','=',$id)->where('name','=','TT2')->first();
        $tt3= Result::where('class_id','=',$id)->where('name','=','TT3')->get();
        $temp3=Result::where('class_id','=',$id)->where('name','=','TT3')->first();

        return view('Result.viewResultTT3',compact('tt1','tt2','tt3'));
        
    }
    public function sviewResult1($id){
        	$stu= Student::where('id','=',$id)->first();
            $tt1= Result::where('class_id','=',$stu->class_id)->where('User_id','=',$stu->User_id)->where('name','=','TT1')->first();
        	return view('Result.sviewResultTT1',compact('tt1'));
    }
    public function sviewResult2($id){
        $stu= Student::where('id','=',$id)->first();
        $tt2= Result::where('class_id','=',$stu->class_id)->where('User_id','=',$stu->User_id)->where('name','=','TT2')->first();
        return view('Result.sviewResultTT2',compact('tt2'));
    }
    public function sviewResult3($id){
        $stu= Student::where('id','=',$id)->first();
        $tt2= Result::where('class_id','=',$stu->class_id)->where('User_id','=',$stu->User_id)->where('name','=','TT2')->first();
        return view('Result.sviewResultTT2',compact('tt2'));
    }
}
