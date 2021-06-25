<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'class_id', 'User_id', 'score', 'score_by',
    ];
    public function classes(){
        return $this->belongsTo(classes::class, 'class_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class , 'User_id', 'id');
    }
}
