<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Report;
use App\Role;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\App;
use Maatwebsite\ExcelLight\Excel;
use App\Exam;
class ReportController extends Controller
{
public function result(){
    $reports=Report::all();
    $current=DB::table('roles')->latest('created_at')->first();
    return view('admin.panel.report',compact('reports','current'));
}

public function downloadExcel(){
    $report_data=DB::table('reports')->get()->toArray();
    $report_array[]=array('NAME' , 'FAMILY' , 'STUDENT NUMBER' , 'SCORE','SUBMIT AT');
    foreach ($report_data as $report){
        $report_array[]=array(
            'NAME'    => $report->name,
            'FAMILY'  => $report->family,
            'STUDENT NUMBER'   => $report->stdNo,
            'SCORE'   => $report->score,
            'SUBMIT AT'=>$report->updated_at,
        );
    }
    $excel=App::make('excel');
    $excel->create('exam_result',function ($excel)use ($report_array){
        $excel->setTitle('exam_result');
        $excel->sheet('exam_result',function ($sheet)use($report_array){
            $sheet->fromArray($report_array,null,'A1',false,false);
        });
    })->download('xlsx');
    $current=DB::table('roles')->latest('created_at')->first();
    $reports=Report::all();
    return view('admin.panel.report',compact('reports','current'));
}
public function deleteAll(){
    $reports=Report::all();
    foreach($reports as $report){
        $exam=new Exam();
        $exam->user_id=$report->user_id;
        $exam->name=$report->name;
        $exam->family=$report->family;
        $exam->stdNo=$report->stdNo;
        $exam->stdNo=$report->score;
        $exam->save();
    }
    DB::table('reports')->delete();
    $current=DB::table('roles')->latest('created_at')->first();
    $this->downloadExcel();
    return view('admin.panel.report',compact('reports','current'));
}
public function set_exam_title(Request $request){
    $role =new Role();
    $role->title=$request->title;
    $role->save();
    $reports=Report::all();
    $current=DB::table('roles')->latest('created_at')->first();
    return view('admin.panel.report',compact('reports','current'));
}
}
