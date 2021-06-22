<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    protected $fillable = [
        'name', 'description', 'User_id',
    ];
}
