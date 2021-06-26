<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name','class_id', 'description', 
    ];

    public function classes(){
        return $this->belongsTo(classes::class, 'class_id', 'id');
    }
    
}
