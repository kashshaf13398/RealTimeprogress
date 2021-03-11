<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
