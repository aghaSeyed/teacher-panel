<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = ['user_id', 'name', 'family', 'stdNo', 'score'];

}