@extends('layouts.panel')
@section('content')

    <div class="container" style="border-radius: 10px;">
        <form method="POST" action="{{route('editQuestion.update' , ['id'=>$question->id])}} " enctype="multipart/form-data" >
            {{ csrf_field() }}
            {{method_field('PATCH')}}
            <div class="row">
                <div class="col-md-12">
                    <div style="border-radius:10px;margin-bottom:10px;border: 1px solid black; padding: 10px; min-width:10px; display: inline-block;background-color: #0E2231">
                        <a href="{{route('editQuestion.index')}}">Back to list</a>
                    </div>
                    <div class="panel panel-default" style="border-radius: 10px;">
                        <div class="panel-heading">
                            <h3>Edit question</h3>
                        </div>
                        <div class="panel-body">
                            @if($con)
                                <div class="alert alert-success" role="alert" id="success">
                                    Successfully applied!
                                </div>
                            @endif
                            <div class="alert-danger "  style="border-radius: 20px; padding: 30px; margin-bottom: 5px;display: {{count($errors)>0 ?'block':'none'}}">
                                @foreach($errors->all() as $error)
                                    <strong>{{$error}}</strong>
                                    <br>
                                @endforeach
                            </div>
                            <div class="row">

                                <div class="col-md-6" style="padding-top: 20px; padding-left: 50px">
                                    <form class="form-group">
                                        <label for="title" class="label" style="color: #0A0A0A; font-size: medium" >Title :</label>
                                        <input id="title" type="text" name="title" class="form-control input-mini" value="{{$question->title}}">
                                    </form>
                                </div>
                            </div>

                            <div id="c1" style="padding-bottom: 10px;">
                                {{--                            //content--}}
                                <div class="row" style="padding: 10px;">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-12" style="margin-bottom: 10px">
                                                <p class="label" style="color: #0A0A0A; font-size: medium">Question :</p>
                                            </div>
                                        </div>
                                        <textarea class="ckeditor" name="contents" id="editor" >{{$question->contents}}</textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <form enctype="multipart/form-data" >
                                            <div class="row">
                                                <div class="form-group">
                                                    <label>If your question need image : </label>
                                                    <input name="img"  type="file" class="form-control-file" />
                                                    {{--                                    {{Form::file('img')}}--}}

                                                </div>
                                            </div>
                                        </form>

                                        <div class="row">
                                            <img src="{{url($question->img)}}">
                                            <p class="form-group">
                                                <a href="{{url('/admin/'. $question->id . '/download')}}" target="_blank">Download</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{--                            //options--}}

                                <div class="row-no-gutters">
                                    <div class="form-group">
                                        <input value="{{$question->o1}}" id="o1" type="text"  name="o1" class="form-control" placeholder="PLease Enter Option 1" />
                                    </div>
                                </div>

                                <div class="row-no-gutters">
                                    <div class="form-group">
                                        <input value="{{$question->o2}}" id="o2" type="text"  name="o2" class="form-control" placeholder="PLease Enter Option 2" />
                                    </div>
                                </div>

                                <div class="row-no-gutters">
                                    <div class="form-group">
                                        <input value="{{$question->o3}}" id="o3" type="text"  name="o3" class="form-control" placeholder="PLease Enter Option 3" />
                                    </div>
                                </div>

                                <div class="row-no-gutters">
                                    <div class="form-group">
                                        <input value="{{$question->o4}}" id="o4" type="text"  name="o4" class="form-control" placeholder="PLease Enter Option 4" />
                                    </div>
                                </div>
                                {{--                            // answer--}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="ans" class=""> <strong>Correct Option :</strong></label>
                                        <input type="number" id="ans" class="form-control " style="width: 100px; color: green" name="ans" value="{{$question->ans}}" >
                                    </div>
                                </div>
                                <hr/>
                            </div>
                            <div class="form-group">
                                <button id="sub" type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>

    @endsection

@section('script')
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
    <script>
        $("#success").delay(2000).fadeOut();

        $('.textarea').ckeditor();


    </script>

@endsection