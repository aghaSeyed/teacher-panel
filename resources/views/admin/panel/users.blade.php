@extends('layouts.panel')
@section('content')
    <h3 class="page-title">Students</h3>
    <button style="float: right;" class="btn btn-success"><a style="color: white" href="{{route('attemp.increase')}}">increase one attemp to all students</a></button>
    <button style="float: right" class="btn btn-danger"><a style="color: white" href="{{route('attemp.decrease')}}">decrease one attemp to all students</a></button>

    <div class="panel panel-default">
        <div class="panel-heading">
            Students
        </div>
        <div class="panel-body table-responsive">
    <table id="user_tabel" class="tabel ">
        <thead class="table-dark">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Family</th>
            <th>E-mail</th>
            <th>Student Number</th>
            <th>Attemps</th>
            <th>modify</th>
            <th> </th>
        </tr>
        </thead>
        <tbody class="{{$index=1}}">
            @foreach($users as $user)
                <tr>
                    @if($user->role!='admin')
                <td>{{$index++}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->family}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->stdNo}}</td>
                    <td>{{$user->attemps}}</td>
                    <td>
                        <button class="btn btn-success"><a style="color: white" href="{{route('attemp.increase_by_id',['id'=>$user->id])}}">Add attemp</a></button>
                    </td>
                    <td>
                            <button class="btn btn-danger"><a style="color: white" href="{{route('attemp.decrease_by_id',['id'=>$user->id])}}">Remove attemp</a></button>
                        </td>
                        @endif
                </tr>
            @endforeach

        </tbody>
    </table>
        </div>
    </div>


    @endsection
