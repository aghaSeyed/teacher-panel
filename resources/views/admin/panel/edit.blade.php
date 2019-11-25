@extends('layouts.panel')
@section('content')

    <h3 class="page-title">Questions List</h3>
    <div style="border-radius:10px;margin-bottom:10px;border: 1px solid black; padding: 10px; min-width:10px; display: inline-block;background-color: darkgreen">
        <a style="color: white" href="{{url('admin/newExam')}}">Add a new question</a>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            Questions
        </div>
        <div class="panel-body table-responsive">
            <table id="user_tabel" class="tabel ">
                <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Created-at</th>
                    <th>Updated-at</th>
                    <th style="text-align: center">Modify</th>
                </tr>
                </thead>
                <tbody {{$c=1}}>
                @foreach($questions as $question)
                    <tr>
                        <td>{{$c++}}</td>
                        <td>{{$question->title}}</td>
                        <td>{{ $question->created_at->format('d M Y - H:i:s') }}</td>
                        <td>{{ $question->updated_at->format('d M Y - H:i:s') }}</td>
                        <td>
                            <div class="container-fluid">
                            <div class="row form-group" >
                                <div class="col-md-4 col-sm-4">
                                    <form action="{{route('editQuestion.edit',['id'=>$question->id])}}" >
                                        <button style="width: 80px" type="submit" class="btn btn-warning btn-sm">Edit</button>
                                    </form>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <form action="{{route('editQuestion.destroy',['id'=>$question->id])}}" method="post">
                                        {{@method_field('delete')}}
                                        {{csrf_field()}}
                                        <button style="width: 80px" type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

    @endsection