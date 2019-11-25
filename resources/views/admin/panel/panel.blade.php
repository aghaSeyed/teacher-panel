@extends('layouts.panel')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="typed" id="typed" style="font-size:20px;background-color: #1d2124;color: white;border-radius: 10px;text-align:center;width: 100%; padding: 10px;margin: 10px"></div>
        </div>
    </div>
    </div>
    <h5>Welcome <strong>{{$user['name'].' '.$user['family']}}</strong> , Love to see you back. </h5>

    <!-- /. ROW  -->
    <div class="row">


        <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                     Avg of students
                     </div>
                <div class="panel-body">
                    <div id="myfirstchart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
{{--            for insert site logs--}}
        </div>

    </div>
    <!-- /. ROW  -->
    <div class="row" >
        <div class="col-md-9 col-sm-12 col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    Top rank
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>StudentNo</th>
                                <th>Score</th>
                            </tr>
                            </thead>
                            <tbody {{$index=1}}>
                            @foreach($reports as $report)
                            @if($report->score == 100)
                                <tr>
                                    <td>{{$index++}}</td>
                                    <td>{{$report->name}}</td>
                                    <td>{{$report->family}}</td>
                                    <td>{{$report->stdNo}}</td>
                                    <td>{{$report->score}}%</td>
                                </tr>
                                @endif
                                @endforeach
                    @foreach($reports as $report)
                            @if($report->score == 90)
                                <tr>
                                    <td>{{$index++}}</td>
                                    <td>{{$report->name}}</td>
                                    <td>{{$report->family}}</td>
                                    <td>{{$report->stdNo}}</td>
                                    <td>{{$report->score}}%</td>
                                </tr>
                                @endif
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
    <script>
        var typed = new Typed("#typed", {
            strings: ["Admin Dashboard","How do you do,dude?", "Everything is in your control." , "Click on me if need some help."],
            smartBackspace: true, // Default value
            typeSpeed: 80,
            showCursor: true,
            cursorChar: '|',
            autoInsertCss: true,
            loop: true,
        });
        new Morris.Line({
            // ID of the element in which to draw the chart.
            element: 'myfirstchart',
            // Chart data records -- each entry in this array corresponds to a point on
            // the chart.

            data: [
                { month: '2017', value: 80 },
                { month: '2016', value: 74 },
                { month: '2015', value: 36 },
                { month: '2018', value: 55 },
                { month: '2019', value: 20 }
            ],
            // The name of the data record attribute that contains x-values.
            xkey: 'month',
            // A list of names of data record attributes that contain y-values.
            ykeys: ['value'],
            // Labels for the ykeys -- will be displayed when you hover over the
            // chart.
            labels: ['Value']
        });
        </script>
    @endsection