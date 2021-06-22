<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\classes;
use DB;
class ClassController extends Controller
{
    public function storeClass(Request $req){
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
}
