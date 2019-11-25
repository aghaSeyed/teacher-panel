@extends('layouts.panel')
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Exam result
        </div>
        <div class="panel-body table-responsive">
            <table id="user_tabel" class="tabel ">
                <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Family</th>
                    <th>Student Number</th>
                    <th>Score</th>
                    <th>Submit at</th>
                </tr>
                </thead>
                <tbody class="{{$index=1}}">
                @foreach($reports as $report)
                    <tr>
                        <td>{{$index++}}</td>
                        <td>{{$report->name}}</td>
                        <td>{{$report->family}}</td>
                        <td>{{$report->stdNo}}</td>
                        <td>{{$report->score}}</td>
                        <td>{{$report->updated_at->format('d M Y - H:i:s') }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            <form action="{{route('report.set')}}" method="GET">
                {{csrf_field()}}
                <label class="label-default" style="font-size: 18px;border-radius: 10px;padding:10px;"> Exam load from title: {{$current->title}}  </label>
                <input name="title" class="form-control" type="text" style="width: 30%;">
                <input class="btn btn-success" type="submit" style="margin-top: 10px;">
            </form>
        </div>
    </div>
    <div style="display: flex;">
    <a href="{{url('admin/report/download')}}" style="font-size: 20px;color: #0d3625;border-style: solid;border-radius: 5px;margin-top: 50px;padding: 10px;">Export to Excel file</a>
    <a href="{{url('admin/report/deleteAll')}}" style="font-size: 20px;color: red;border-style: solid;border-radius: 5px;margin-top: 50px;padding: 10px;">Finish exam(delete all records)</a>
    </div>
@endsection

@section('script');

    @endsection