<?php

Auth::routes();

Route::get('/', function () { return redirect('/home'); });

Route::get('/home', 'HomeController@index')->name('home');

//Route::middleware('auth')->group(function (){
//    Route::resource('newExam' , 'QuestionController');
//    Route::resource('users' , 'UserController');
//});


Route::group(['namespace'=>'Administrator' , 'prefix'=>'admin' , 'middleware'=>['auth' ,'panel']] ,function (){
    Route::resource('newExam' , 'QuestionController');
    Route::resource('users' , 'UserController');
    Route::resource('editQuestion' , 'QuestionListController');
//    Route::get('/{id}/download', 'DownloadController@download');
    Route::get('/decreaseAll',['uses'=>'AttempController@decrease' , 'as'=>'attemp.decrease']);
    Route::get('/increaseAll',['uses'=>'AttempController@increase' , 'as'=>'attemp.increase']);
    Route::get('/increase/{id}',['uses'=>'AttempController@increase_by_id' , 'as'=>'attemp.increase_by_id']);
        Route::get('/decrease/{id}',['uses'=>'AttempController@decrease_by_id' , 'as'=>'attemp.decrease_by_id']);

    Route::get('/report',['uses'=>'ReportController@result' , 'as'=>'admin.report']);
    Route::get('/report/download','ReportController@downloadExcel');
    Route::get('/report/deleteAll','ReportController@deleteAll');
    Route::get('/report/setExamTitle',['uses'=>'ReportController@set_exam_title','as'=>'report.set']);


});
Route::group(['middleware'=>['auth']] ,function (){
    Route::resource('student' , 'StudentController');
    Route::post('student/{id}/result' , ['uses' =>'StudentController@result', 'as'=>'student.result']);
});

