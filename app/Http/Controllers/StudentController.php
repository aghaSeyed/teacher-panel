<?php

namespace App\Http\Controllers;

use App\Exam;
use App\Http\Middleware\student;
use App\Question;
use App\Report;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Global_;
use DB;
use Carbon\Carbon;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $dt=new Carbon('','Asia/Tehran');
        $time=$dt->toDateTimeString();
        $user = Auth::user();
        $title=DB::table('roles')->latest('created_at')->first();
        $q = Question::all()->where('title',$title->title)->random(10);
        $ans=array();
        foreach ($q as $question){
                array_push($ans, $question->ans);
        }
        session_start();
        $_SESSION['ans']=$ans;
        if($user->attemps>0){
            $user->attemps-=1;
            $user->save();
        return view('student.exam',compact('q','user','time'));
        }
        else
            return view('student.examNotFound',compact('time'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function result($id,Request $request)
    {
        $dt=new Carbon('','Asia/Tehran');
        $time=$dt->toDateTimeString();
        $user=User::findOrFail($id);
        session_start();
        $ans=$_SESSION['ans'];
        $user_ans=array();
        array_push($user_ans,$request->Q0ans);
        array_push($user_ans,$request->Q1ans);
        array_push($user_ans,$request->Q2ans);
        array_push($user_ans,$request->Q3ans);
        array_push($user_ans,$request->Q4ans);
        array_push($user_ans,$request->Q5ans);
        array_push($user_ans,$request->Q6ans);
        array_push($user_ans,$request->Q7ans);
        array_push($user_ans,$request->Q8ans);
        array_push($user_ans,$request->Q9ans);
        $correct=0;
        for ($i=0;$i<10;$i++){
            if($ans[$i]==$user_ans[$i]){
                $correct++;
            }
        }
        $score=$correct*10;
        $report=Report::where('user_id','=',$user->id)->first();
        if($report==null) {
            $report=new Report();
            $report->user_id = $user->id;
            $report->name = $user->name;
            $report->stdNo = $user->stdNo;
            $report->family = $user->family;
            $report->score = $score;
            $report->save();
        }else{
            if($report->score<$score){
                $report->score=$score;
                $report->save();
            }
        }
        $exam = Exam::where('user_id','=',$user->id)->first();
        if($exam==null){
            $exam=new Exam();
            $exam->user_id=$user->id;
            $exam->name=$user->name;
            $exam->family=$user->family;
            $exam->stdNo=$user->stdNo;
            $exam->score=$user->score;
        //    $exam->save();
        }else{
            $exam->score+=$score;
          //  $exam->save();
        }
        $user=Auth::user();
        return view('student.report',compact('user','score','time'));
}
}
