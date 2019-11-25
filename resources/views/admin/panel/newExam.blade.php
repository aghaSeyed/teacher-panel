@extends('layouts.panel')
@section('content')
<div class="container" style="border-radius: 10px;">
    <form method="POST" action="{{route('newExam.store')}} " enctype="multipart/form-data" >
        {{ csrf_field() }}
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default" style="border-radius: 10px;">
                <div class="panel-heading">
                    <h3>Create a new question</h3>
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
                                <input id="title" type="text" name="title" class="form-control input-mini" placeholder="Subject ...">
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
                                <textarea class="ckeditor" name="contents" id="editor" >{{old('contents')}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                <div class="form-group">
                                    <label>If your question need image : </label>
                                    <input name="img"  type="file" class="form-control-file" />
                                </div>
                                </div>
                                <div class="row">
                                    <img src="{{url('img/4.png')}}">
                                </div>
                            </div>
                        </div>
{{--                            //options--}}

                        <div class="row-no-gutters">
                            <div class="form-group">
                                <input value="{{old('o1')}}" id="o1" type="text"  name="o1" class="form-control" placeholder="PLease Enter Option 1" />
                            </div>
                        </div>
                        <div class="row-no-gutters">
                            <div class="form-group">
                                <input value="{{old('o2')}}" id="o2" type="text"  name="o2" class="form-control" placeholder="PLease Enter Option 2" />
                            </div>
                        </div>
                        <div class="row-no-gutters">
                            <div class="form-group">
                                <input value="{{old('o3')}}" id="o3" type="text"  name="o3" class="form-control" placeholder="PLease Enter Option 3" />
                            </div>
                        </div>
                        <div class="row-no-gutters">
                            <div class="form-group">
                                <input value="{{old('o4')}}" id="o4" type="text"  name="o4" class="form-control" placeholder="PLease Enter Option 4" />
                            </div>
                        </div>
{{--                            // answer--}}
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="ans" class=""> <strong>Correct Option :</strong></label>
                                    <input type="number" id="ans" class="form-control " style="width: 100px; color: green" name="ans" placeholder="?" >
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

    $(function(){
        $(".typed").typed({
            strings: ["Developers.", "Designers.", "People."],
            // Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
            stringsElement: null,
            // typing speed
            typeSpeed: 30,
            // time before typing starts
            startDelay: 1200,
            // backspacing speed
            backSpeed: 20,
            // time before backspacing
            backDelay: 500,
            // loop
            loop: true,
            // false = infinite
            loopCount: 5,
            // show cursor
            showCursor: false,
            // character for cursor
            cursorChar: "|",
            // attribute to type (null == text)
            attr: null,
            // either html or text
            contentType: 'html',
            // call when done callback function
            callback: function() {},
            // starting callback function before each string
            preStringTyped: function() {},
            //callback for every typed string
            onStringTyped: function() {},
            // callback for reset
            resetCallback: function() {}
        });
    });

</script>

    @endsection