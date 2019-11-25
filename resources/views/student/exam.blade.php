<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/fontFa.css')}}">
    <link href="{{url('css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{url('css/bootstrap-rtl.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <link href="{{url('css/font-awesome.css')}}" rel="stylesheet" />

    <title>Exam</title>
</head>
<body>
<div class="" id="wrap">
    <div id="particles-js" style="position: fixed;">
    </div>
    <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;position: absolute">

        {{$time}} &nbsp;

        <button class="btn" style="background-color: #0E2231"><a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Logout
            </a></button>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

    </div>

    <div id="panel" class="container">
<form action="{{route('student.result',['id'=>$user->id])}}" method="post">
    {{ csrf_field() }}
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 col-sm-12 ">
                <div class="panel with-nav-tabs panel-success">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1success" data-toggle="tab">First Question</a></li>
                            <li><a href="#tab2success" data-toggle="tab">Second Question</a></li>
                            <li><a href="#tab3success" data-toggle="tab">Third Question</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown"><strong>Other Questions </strong><span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#tab4success" data-toggle="tab">4th Question</a></li>
                                    <li><a href="#tab5success" data-toggle="tab">5th Question</a></li>
                                    <li><a href="#tab6success" data-toggle="tab">6th Question</a></li>
                                    <li><a href="#tab7success" data-toggle="tab">7th Question</a></li>
                                    <li><a href="#tab8success" data-toggle="tab">8th Question</a></li>
                                    <li><a href="#tab9success" data-toggle="tab">9th Question</a></li>
                                    <li><a href="#tab10success" data-toggle="tab">10th Question</a></li>
                                </ul>
                            </li>
                            <li>
                                <div><span id="count" style="color: red;"></span> <p class="fa fa-clock-o"> Second Remaining</p></div>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1success">
                                <div class="farsi alert alert-success" role="alert">
                                    <h4 align='justify' style='line-height:0.75cm;'>{{strip_tags($q[0]->contents)}}</h4>

                                </div>

                            <div class="farsi row">
                                <div class="col-md-6 pagination-centered">
                                    <div class="checkbox">
                                        <label><input type="checkbox" class="radio" value="1" name="Q0ans">{{$q[0]->o1}}</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" class="radio" value="2" name="Q0ans">{{$q[0]->o2}}</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" class="radio" value="3" name="Q0ans">{{$q[0]->o3}}</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" class="radio" value="4" name="Q0ans">{{$q[0]->o4}}</label>
                                    </div>
                                    <div style="margin: 20px;">
                                        <button type="button" class="btn btn-success"><a style="color: black" href="#tab2success" data-toggle="tab">Next</a></button>
                                </div>
                                </div>
                            </div>
                        </div>

                            <div class="tab-pane fade" id="tab2success">
                                <div class="farsi alert alert-success" role="alert">
                                    <h4 align='justify' style='line-height:0.75cm;'>{{strip_tags($q[1]->contents)}}</h4>

                                </div>
                                <div class="farsi row">
                                    <div class="col-md-6 pagination-centered">
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="1" name="Q1ans">{{$q[1]->o1}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="2" name="Q1ans">{{$q[1]->o2}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="3" name="Q1ans">{{$q[1]->o3}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="4" name="Q1ans">{{$q[1]->o4}}</label>
                                        </div>
                                        <div style="margin: 20px;">
                                        <button type="button" class="btn btn-success"><a style="color: black" href="#tab1success" data-toggle="tab">Back</a></button>
                                        <button type="button" class="btn btn-success"><a style="color: black" href="#tab3success" data-toggle="tab">Next</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3success">
                                <div class="farsi alert alert-success" role="alert">
                                    <h4 align='justify' style='line-height:0.75cm;'>{{strip_tags($q[2]->contents)}}</h4>
                                </div>
                                <div class="farsi row">
                                    <div class="col-md-6 pagination-centered">
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="1" name="Q2ans">{{$q[2]->o1}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="2" name="Q2ans">{{$q[2]->o2}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="3" name="Q2ans">{{$q[2]->o3}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="4" name="Q2ans">{{$q[2]->o4}}</label>
                                        </div>
                                        <div style="margin: 20px;">
                                            <button type="button" class="btn btn-success"><a style="color: black" href="#tab2success" data-toggle="tab">Back</a></button>
                                            <button type="button" class="btn btn-success"><a style="color: black" href="#tab4success" data-toggle="tab">Next</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab4success">
                                <div class="farsi alert alert-success" role="alert">
                                    <h4 align='justify' style='line-height:0.75cm;'>{{strip_tags($q[3]->contents)}}</h4>
                                </div>
                                <div class="farsi row">
                                    <div class="col-md-6 pagination-centered">
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="1" name="Q3ans">{{$q[3]->o1}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="2" name="Q3ans">{{$q[3]->o2}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="3" name="Q3ans">{{$q[3]->o3}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="4" name="Q3ans">{{$q[3]->o4}}</label>
                                        </div>
                                        <div style="margin: 20px;">
                                            <button type="button" class="btn btn-success"><a style="color: black" href="#tab3success" data-toggle="tab">Back</a></button>
                                            <button type="button" class="btn btn-success"><a style="color: black" href="#tab5success" data-toggle="tab">Next</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab5success">
                                <div class="farsi alert alert-success" role="alert">
                                    <h4 align='justify' style='line-height:0.75cm;'>{{strip_tags($q[4]->contents)}}</h4>
                                </div>
                                <div class="farsi row">
                                    <div class="col-md-6 pagination-centered">
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="1" name="Q4ans">{{$q[4]->o1}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="2" name="Q4ans">{{$q[4]->o2}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="3" name="Q4ans">{{$q[4]->o3}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="4" name="Q4ans">{{$q[4]->o4}}</label>
                                        </div>
                                        <div style="margin: 20px;">
                                            <button type="button" class="btn btn-success"><a style="color: black" href="#tab4success" data-toggle="tab">Back</a></button>
                                            <button type="button" class="btn btn-success"><a style="color: black" href="#tab6success" data-toggle="tab">Next</a></button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="tab6success">
                                <div class="farsi alert alert-success" role="alert">
                                    <h4 align='justify' style='line-height:0.75cm;'>{{strip_tags($q[5]->contents)}}</h4>
                                </div>
                                <div class="farsi row">
                                    <div class="col-md-6 pagination-centered">
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="1" name="Q5ans">{{$q[5]->o1}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="2" name="Q5ans">{{$q[5]->o2}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="3" name="Q5ans">{{$q[5]->o3}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="4" name="Q5ans">{{$q[5]->o4}}</label>
                                        </div>
                                        <div style="margin: 20px;">
                                            <button type="button" class="btn btn-success"><a style="color: black" href="#tab5success" data-toggle="tab">Back</a></button>
                                            <button type="button" class="btn btn-success"><a style="color: black" href="#tab7success" data-toggle="tab">Next</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab7success">
                                <div class="farsi alert alert-success" role="alert">
                                    <h4 align='justify' style='line-height:0.75cm;'>{{strip_tags($q[6]->contents)}}</h4>
                                </div>
                                <div class="farsi row">
                                    <div class="col-md-6 pagination-centered">
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="1" name="Q6ans">{{$q[6]->o1}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="2" name="Q6ans">{{$q[6]->o2}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="3" name="Q6ans">{{$q[6]->o3}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="4" name="Q6ans">{{$q[6]->o4}}</label>
                                        </div>
                                        <div style="margin: 20px;">
                                            <button type="button" class="btn btn-success"><a style="color: black" href="#tab6success" data-toggle="tab">Back</a></button>
                                            <button type="button" class="btn btn-success"><a style="color: black" href="#tab8success" data-toggle="tab">Next</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab8success">
                                <div class="farsi alert alert-success" role="alert">
                                    <h4 align='justify' style='line-height:0.75cm;'>{{strip_tags($q[7]->contents)}}</h4>
                                </div>
                                <div class="farsi row">
                                    <div class="col-md-6 pagination-centered">
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="1" name="Q7ans">{{$q[7]->o1}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="2" name="Q7ans">{{$q[7]->o2}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="3" name="Q7ans">{{$q[7]->o3}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="4" name="Q7ans">{{$q[7]->o4}}</label>
                                        </div>
                                        <div style="margin: 20px;">
                                            <button type="button" class="btn btn-success"><a style="color: black" href="#tab7success" data-toggle="tab">Back</a></button>
                                            <button type="button" class="btn btn-success"><a style="color: black" href="#tab9success" data-toggle="tab">Next</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab9success">
                                <div class="farsi alert alert-success" role="alert">
                                    <h4 align='justify' style='line-height:0.75cm;'>{{strip_tags($q[8]->contents)}}</h4>
                                </div>
                                <div class="farsi row">
                                    <div class="col-md-6 pagination-centered">
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="1" name="Q8ans">{{$q[8]->o1}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="2" name="Q8ans">{{$q[8]->o2}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="3" name="Q8ans">{{$q[8]->o3}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="4" name="Q8ans">{{$q[8]->o4}}</label>
                                        </div>
                                        <div style="margin: 20px;">
                                            <button type="button" class="btn btn-success"><a style="color: black" href="#tab8success" data-toggle="tab">Back</a></button>
                                            <button type="button" class="btn btn-success"><a style="color: black" href="#tab10success" data-toggle="tab">Next</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab10success">
                                <div class="farsi alert alert-success" role="alert">
                                    <h4 align='justify' style='line-height:0.75cm;'>{{strip_tags($q[9]->contents)}}</h4>
                                </div>
                                <div class="farsi row">
                                    <div class="col-md-6 pagination-centered">
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="1" name="Q9ans">{{$q[9]->o1}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="2" name="Q9ans">{{$q[9]->o2}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="3" name="Q9ans">{{$q[9]->o3}}</label>
                                        </div>
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="radio" value="4" name="Q9ans">{{$q[9]->o4}}</label>
                                        </div>
                                        <div style="margin: 20px;">
                                            <button type="button" class="btn btn-success"><a style="color: black" href="#tab9success" data-toggle="tab">Back</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block" id="submit">Submit</button>

            </div>
        </div>
</form>
    </div>
</div>


<script src="{{url('js/jquery-1.10.2.js')}}"></script>
<script src="{{url('js/particles.js')}}"></script>
<script>
    particlesJS.load('particles-js', '{{url('js/particles.json')}}', function() {
        console.log('callback - particles.js config loaded');
    });
    // $("#loading").delay(2000).fadeOut();
    setTimeout(function () {
        var element = document.getElementById("loading");
        element.parentNode.removeChild(element);
    }, 3000);

    // the selector will match all input controls of type :checkbox
    // and attach a click event handler
    $("input:checkbox").on('click', function() {
        // in the handler, 'this' refers to the box clicked on
        var $box = $(this);
        if ($box.is(":checked")) {
            // the name of the box is retrieved using the .attr() method
            // as it is assumed and expected to be immutable
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            // the checked state of the group/box on the other hand will change
            // and the current value is retrieved using .prop() method
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
    });
</script>
<script>
    $(document).ready(function(){
        var count = 250;
        var interval = setInterval(function(){
            document.getElementById('count').innerHTML=count;
            count--;
            if (count === 0){
                clearInterval(interval);
                document.getElementById('count').innerHTML='Done';
                // or...
                alert("You're out of time!");
            }
        }, 1000);

            setTimeout(function() {
                $("#submit").trigger('click');
            }, 300000);

    });
</script>
<script src="{{url('js/bootstrap.min.js')}}"></script>

</body>
</html>
