<?php

namespace App\Http\Controllers\Administrator;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Schema;
use PhpParser\Node\Expr\Error;

class QuestionController extends admin
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = Question::all();
        $con=0;
        $user = Auth::user();
        return view('admin.panel.newExam',['question'=>$question, 'con' =>$con , 'user' =>$user]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        Schema::create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'contents'=>'required|unique:questions',
            'o1'  =>'required',
            'o2'  =>'required',
            'o3'  =>'required',
            'o4'  =>'required',
            'ans' => 'required|numeric|min:1|max:4',
            'img' =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $q = new Question();
        $q->title = $request->title;
        $q->contents = $request->contents;
        $q->o1 = $request->o1;
        $q->o2 = $request->o2;
        $q->o3 = $request->o3;
        $q->o4 = $request->o4;
        $q->ans = $request->ans;
        if($request->hasFile('img')){
            $q->img=$this->storePic($request->file('img'));
        }
        $q->save();

            $user = Auth::user();
            $con = 1;

            return view('admin.panel.newExam',['con' =>$con , 'user' =>$user]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user();
        $con = 1;

        return view('admin.panel.newExam',['con' =>$con , 'user' =>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        if($question->fill($request->all())->save()){
            return true;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        if($question->delete()){
            return true;
        }
    }
}
