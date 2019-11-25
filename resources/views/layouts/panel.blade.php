<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <!-- BOOTSTRAP STYLES-->
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <!-- FONTAWESOME STYLES-->
    <link href="{{url('css/font-awesome.css')}}" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="{{url('js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{url('css/custom.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
{{--    datatable--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <meta name="_token" content="{{csrf_token()}}" />
</head>
<body>

<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">Admin Panel</a>
        </div>
        <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
                    {{date('m/d/Y h:i:s a', time())}} &nbsp; <a href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>


        </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="{{url('img/find_user.png')}}" class="user-image img-responsive"/>
                </li>


                <li>
                    <a class="active-menu"  href="{{route('home')}}"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                </li>
                <li>
                    <a  href="{{url('admin\users')}}"><i class="fa fa-qrcode fa-3x"></i> Students</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-3x"></i> Exam<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('admin\newExam')}}">New Question</a>
                        </li>
                        <li>
                            <a href="{{url('admin\editQuestion')}}">Edit Question</a>
                        </li>

                    </ul>
                </li>
                <li  >
                    <a   href="{{route('admin.report')}}"><i class="fa fa-bar-chart-o fa-3x"></i> Report</a>
                </li>

            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">

@yield('content')
            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->

<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="{{url('js/jquery-1.10.2.js')}}"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{url('js/bootstrap.min.js')}}"></script>
<!-- METISMENU SCRIPTS -->
<script src="{{url('js/jquery.metisMenu.js')}}"></script>
<!-- MORRIS CHART SCRIPTS -->
<script src="{{url('js/morris/raphael-2.1.0.min.js')}}"></script>
<script src="{{url('js/morris/morris.js')}}"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{url('js/custom.js')}}"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
@yield('script')
</body>
</html>
