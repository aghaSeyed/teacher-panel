<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable= ['title','contents' , 'o1','o2','o3','o4','ans' , 'img'];
    public $incrementing = true;
    public $timestamps =true;

    public static $rules = [
        'title'=>'required',
        'contents'=>'required|unique:questions',
        'o1'=>'required',
        'o2'=>'required',
        'o3'=>'required',
        'o4'=>'required',
        'ans'=> 'required|numeric|min:1|max:4',
];
}
