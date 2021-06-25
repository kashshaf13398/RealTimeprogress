<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentclass extends Model
{
    protected $fillable = [
        'class_id', 'student_id', 
    ];
    public function classes(){
        return $this->belongsTo(classes::class, 'class_id', 'id');
    }
    public function student(){
        return $this->belongsTo(Student::class , 'student_id', 'User_id');
    }
}
