<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
use DB;
class BoloController extends Controller
{
     public function getCourse(){
    	return view('courses');
    }
    public function getHome(){
    	return view('index');
    }
    public function getAbout(){
    	return view('something');
    }
    public function aboutMore(){
    	$user = User::all();
    	//$user = DB::table('users')->get();
    	return response()->json($user);
    	//return view('layouts.app');
    }
    public function createClass(){
    	return view('Class.createClass');
    }
}
