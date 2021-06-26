<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\classes;
use App\Student;

class PostController extends Controller
{
    public function getAssignmentPage($id){
        //return response()->json($id);
        return view('Post.formPost',compact('id'));
    }

    public function storeAssignment(Request $req, $id){
        //return response()->json($req);
        $post= new Post;
        $post->class_id=$id;
        $post->name=$req->name;
        $post->description = $req->description;
        $post->save();
        
        $class=classes::where('id','=',$id)->first();
        return view('Class.teachersView',compact('class'));
    }
    public function viewAssignmentPage($id){
        //return response()->json($id);

        $post= Post::where('class_id','=',$id)->get();

        return view('Post.viewAssignment',compact('post'));
    }
    public function getstAssignmentPage($id){
        $stu= Student::where('id','=',$id)->first();
        $post= Post::where('class_id','=',$stu->class_id)->get();
        return view('Post.sviewAssignment',compact('post'));
    }
}
