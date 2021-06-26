<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    protected $fillable = [
        'name', 'description', 'User_id',
    ];

    public function student(){
        return $this->hasMany(Student::class,'id', 'class_id');
    }
    public function user(){
        return $this->belongsTo(User::class , 'User_id', 'id');
    }
    public function attendace(){
        return $this->hasMany(Attendance::class,'id', 'class_id');
    }
    public function result(){
        return $this->hasMany(Result::class,'id', 'class_id');
    }

}
