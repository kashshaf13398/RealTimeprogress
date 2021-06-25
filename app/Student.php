<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'reg_no', 'User_id','class_id',
    ];

    public function studentClass(){
        return $this->hasMany(studentclass::class);
    }
    public function classes(){
        return $this->belongsTo(classes::class, 'class_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class , 'User_id', 'id');
    }
}
