@if(session()->has('email'))
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>Mauaque Resettlement Highschool</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="{{asset('vendor/fontawesome/css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/animate.css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/toastr/toastr.min.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="icon" href="{{ asset('images/favicon-96x96.png') }}">
    
    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('styles/pe-icons/pe-icon-7-stroke.css')}}"/>
    <link rel="stylesheet" href="{{asset('styles/pe-icons/helper.css')}}"/>
    <link rel="stylesheet" href="{{asset('styles/stroke-icons/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('vendor/datatables/datatables.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
    <style type="text/css">
    .luna-nav.nav .nav-second li > a{
        margin:0px;
        transition: .5s;
    }
        .luna-nav.nav .nav-second li > a:hover{
            margin-left:15px;
            color:#fff;
        }
        a:hover >.active{
            margin-left:0px !important;
        }
        #subject>li,  #users>li, 
        #grades>li, #taskmanager>li, 
        #account>li, #pages>li, 
        #agenda>li, #notification>li{
            background:#282b33;
        }
        .dropdown-menu{
            border:0px;
            min-width: 205px;
        }
        .nav .open > a, .nav .open > a:hover, .nav .open > a:focus{
            background:#fff !important;
        }
        .dropdown-menu > li > .logout{
            color:#fff;
            padding:8px 20px;
             margin-bottom: -5px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        }
        .dropdown-menu > li> .logout:hover{
            background: #eaa01f;
            color:#fff; 
        }
        .dropdown-menu > .li-logout{
            background: #f6a821;
            margin-bottom: -5px;
            border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
    
        }
        .modal-open .modal{
            background: #222222ab;
        }
        .text-white{
            color:#fff;
        }
        .mt-3{
            margin-top:5px;
        }
        #toast-success > .toast:before {
            font-size: 18px;
        }
        .modal-open .modal{
            background:#0000001f;
        }
        .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
.ui-corner-all, .ui-corner-bottom, .ui-corner-right, .ui-corner-br{
   border-radius: 50px;
    height: 6px;
}
.ui-widget-content{
    border:0px;
}
.ui-widget.ui-widget-content{
    border:0px;
}
#ww-slide1 .ui-slider-range { 
    background: #0dfda4; 
}
#ww-slide1 .ui-slider-handle{
    border-radius: 50px;
}
#pt-slide1 .ui-slider-handle{
    border-radius: 50px;
}
#pt-slide1 .ui-slider-range { 
    background: #0dfda4; 
}
  #slider .ui-slider-handle { 
    border-color: #ef2929;
    border-radius: 50px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
    </style>
    <script type="text/javascript">
        function slider(val){
        document.getElementById('fw-val').innerHTML = val;
    }
    </script>
</head>
<body>

<!-- Wrapper-->
<div class="wrapper">

    <!-- Header-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <div id="mobile-menu">
                    <div class="left-nav-toggle">
                        <a href="#">
                            <i class="stroke-hamburgermenu"></i>
                        </a>
                    </div>
                </div>
                <a class="navbar-brand" href="/">
                    MRHS
                    <span>v.1.0</span>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="left-nav-toggle">
                    <a href="">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>
                <form class="navbar-form navbar-left">
                    <input type="text" class="form-control" placeholder="Search data for analysis" style="width: 175px">
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class=" profil-link">
                        <a href="login.html" data-toggle="dropdown">
                            <span class="profile-address">{{$admins['email']}}</span>
                            <img src="{{asset($admins['profile'])}}" width="35" class="img-circle" alt="">
                        </a>
                        <ul class="dropdown-menu">
                                    <li><a href="/admin/account/profile">Profile</a></li>
                                    <li><a href="#">Messages</a></li>
                                    <li><a href="/admin/notification">Notifications</a></li>
                                    <li class="divider"></li>
                                    <li class="li-logout"><a class="logout" href="/admin/logout">Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End header-->

    <!-- Navigation-->
    <aside class="navigation">
        <nav>
            <ul class="nav luna-nav">
                <li class="nav-category">
                    General
                </li>
                <li>
                    <a href="/admin"><span class="pe pe-7s-home icons"></span>Dashboard</a>
                </li>
                <li>
                    <a href="/admin/message"><span class="pe pe-7s-chat icons"></span>Message</a>
                </li>
                <li>
                    <a href="#notification" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-bell icons"></span>
                        Notification<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                        <span class="badge pull-right">2</span>
                    </a>
                    <ul id="notification" class="nav nav-second collapse">
                        <li><a href="/admin/notification">Notification <span class="badge pull-right">2</span></a></li>
                        <li><a href="/admin/notification-settings">Setting</a></li>
                    </ul>
                </li>
                <li class="nav-category">
                   Academics
                </li>
                <li>
                    <a href="#users" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-users icons"></span>
                        Users<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="users" class="nav nav-second collapse">
                        <li><a href="/admin/users">Users</a></li>
                        <li><a href="/admin/users/admin">Admin</a></li>
                        <li><a href="/admin/users/students">Student</a></li>
                        <li><a href="/admin/users/teachers">Teacher</a></li>
                        <li><a href="/admin/users/parents">Parent</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#taskmanager" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-graph1 icons"></span>
                        Task Manager<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="taskmanager" class="nav nav-second collapse">
                        <li><a href="/admin/taskmanager/account">Account</a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#subject" data-toggle="collapse" aria-haspopup="true" aria-expanded="true">
                        <span class="pe pe-7s-notebook icons"></span>
                        Subject<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="subject" class="nav nav-second collapse in">
                        <li><a href="/admin/subject/section">Section</a></li>
                        <li><a href="/admin/subject/class">Class</a></li>
                        <li class="active"><a href="/admin/subject/schedule">Schedule</a></li>
                        <li><a href="/admin/subject">Subject</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#grades" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-bookmarks icons"></span>
                        Grades<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="grades" class="nav nav-second collapse">
                        <li><a href="/admin/grades">Grades</a></li>
                        <li><a href="/admin/grades/grading-system">Grading System</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#events" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-star icons"></span>
                        Events <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="events" class="nav nav-second collapse">
                        <li><a href="/admin/events/events&program">Event/Program</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#account" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-config icons"></span>
                        Account<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="account" class="nav nav-second collapse">
                        <li><a href="/admin/account/profile">Profile</a></li>
                        <li><a href="/admin/account/account-settings">Account Settings</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#pages" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-copy-file icons"></span>
                        Pages <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="pages" class="nav nav-second collapse">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">List</a></li>
                        <li><a href="#">Timeline</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#agenda" data-toggle="collapse" aria-expanded="false">
                        <span class="fa fa-calendar-check-o icons"></span>
                        Agenda <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="agenda" class="nav nav-second collapse">
                        <li><a href="/admin/agenda/events">Events</a></li>
                        <li><a href="/admin/agenda/program">Program</a></li>
                        <li><a href="/admin/agenda/news">News</a></li>
                        <li><a href="/admin/agenda/announcement">Announcement</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#database" data-toggle="collapse" aria-expanded="false">
                        <span class="pe pe-7s-server icons"></span>
                        Database <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="database" class="nav nav-second collapse">
                        <li><a href="/admin/database/export">Export</a></li>
                    </ul>
                </li>  
                <li class="nav-info">
                    <i class="pe pe-7s-science text-accent"></i>
                    <div class="m-t-xs">
                        <span class="c-white">Wekonek</span> "WE" as a family connecting to become one and to make your life easier with <strong>wekonek</strong>.
                    </div>
                </li>
            </ul>
        </nav>
    </aside>
    <!-- End navigation-->
<div class="loader" style="background:#1d212b8f; position: fixed; z-index: 1; width: 100%; height: 100%; display: none;">
            <i class="fa fa-spinner fa-spin" style="font-size:50px; color:#fff; position: relative; top:40%; left:50%;"></i>
        </div>

    <!-- Main content-->
    <section class="content">
        
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-danger" style="display: none; background: #db524bba;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <!-- append -->
                            </div>
                    </div>
                </div>
                <a class="btn btn-default" href="/admin/subject/grading-system"><span class="pe pe-7s-back"></span>Back To Grading System</a>
                <br>
                <br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-filled">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="media">
                                        <h2 class="m-t-xs m-b-none">
                                           {{$view['name']}}
                                        </h2>
                                        <small>
                                           {{$view['description']}}
                                        </small>
                                    </div>
                                    <br>
                                    <button class="btn btn-default" data-toggle="modal" data-target="#setpercentage">Subject Percentage</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-filled">
                        <div class="panel-body">

                            <div class="row"> 
                                <div class="col-md-3">
                                    <table class="table small m-t-sm">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <strong class="c-white">
                                                    First Quarter
                                                <!--   -->
                                                </strong><br>
                                            </td>
                                            <td>
                                                <strong class="c-white">
                                                    <!--   -->
                                                </strong> <br>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <strong class="c-white">
                                                    0 %
                                                   <!--   -->
                                                </strong><br> Written Works
                                                
                                            </td>
                                            <td>
                                                <strong class="c-white">
                                                  0 %
                                                </strong><br>Performance Task
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong class="c-white">
                                                0 %
                                                </strong><br>
                                                Quarterly Assessment
                                            </td>
                                            <td>
                                                <strong class="c-white">
                                                    0 %
                                                </strong>
                                                <br>Percentage
                                            </td>
                                        </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-3">
                                    <table class="table small m-t-sm">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <strong class="c-white">
                                                    Second Quarter
                                                <!--   -->
                                                </strong><br>
                                            </td>
                                            <td>
                                                <strong class="c-white">
                                                    <!--   -->
                                                </strong> <br>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <strong class="c-white">
                                                    0 %
                                                   <!--   -->
                                                </strong><br> Written Works
                                                
                                            </td>
                                            <td>
                                                <strong class="c-white">
                                                  0 %
                                                </strong><br>Performance Task
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong class="c-white">
                                                0 %
                                                </strong><br>
                                                Quarterly Assessment
                                            </td>
                                            <td>
                                                <strong class="c-white">
                                                    0 %
                                                </strong>
                                                <br>Percentage
                                            </td>
                                        </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-3">
                                <table class="table small m-t-sm">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <strong class="c-white">
                                                    Third Quarter
                                                <!--   -->
                                                </strong><br>
                                            </td>
                                            <td>
                                                <strong class="c-white">
                                                    <!--   -->
                                                </strong> <br>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <strong class="c-white">
                                                    0 %
                                                   <!--   -->
                                                </strong><br> Written Works
                                                
                                            </td>
                                            <td>
                                                <strong class="c-white">
                                                  0 %
                                                </strong><br>Performance Task
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong class="c-white">
                                                0 %
                                                </strong><br>
                                                Quarterly Assessment
                                            </td>
                                            <td>
                                                <strong class="c-white">
                                                    0 %
                                                </strong>
                                                <br>Percentage
                                            </td>
                                        </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-3">
                                    <table class="table small m-t-sm">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <strong class="c-white">
                                                    Fourth Quarter
                                                <!--   -->
                                                </strong><br>
                                            </td>
                                            <td>
                                                <strong class="c-white">
                                                    <!--   -->
                                                </strong> <br>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <strong class="c-white">
                                                    0 %
                                                   <!--   -->
                                                </strong><br> Written Works
                                                
                                            </td>
                                            <td>
                                                <strong class="c-white">
                                                  0 %
                                                </strong><br>Performance Task
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong class="c-white">
                                                0 %
                                                </strong><br>
                                                Quarterly Assessment
                                            </td>
                                            <td>
                                                <strong class="c-white">
                                                    0 %
                                                </strong>
                                                <br>Percentage
                                            </td>
                                        </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="setpercentage" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h4 class="modal-title">Percentage Editor</h4>
                                                <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel">
                                                            <div class="panel-body">
                                                              <div class="row">
                                                                  <div class="col-md-8">
                                                                    <div class="form-group">
                                                                        <label>Quarters *</label>
                                                                        <select class="form-control">
                                                                            <option value="">---------</option>
                                                                            <option value="First">First Quarter</option>
                                                                            <option value="Second">Second Quarter</option>
                                                                            <option value="Third">Third Quarter</option>
                                                                            <option value="Fourth">Fourth Quarter</option>
                                                                        </select>
                                                                    </div>
                                                                       <p>
                                                                          <label>Written Works(WW) *</label>
                                                                          <input type="text" class="form-control" id="fw-1" readonly name="fw-1" style="border:0; color:#f6931f; font-weight:bold;">
                                                                        </p>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div id="ww-slide1"></div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                  </div>
                                                              </div>
                                                             <div class="row" style="margin-top:30px;">
                                                                 <div class="col-md-8">
                                                                      <p>
                                                                          <label>Performance Task(PT) *</label>
                                                                          <input type="text" class="form-control" id="fp-1" readonly name="pt-1" style="border:0; color:#f6931f; font-weight:bold;">
                                                                        </p>
                                                                        <div id="pt-slide1"></div>
                                                                  </div>
                                                             </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-accent">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-tools">
                                
                                
                            </div>
                            Percentages under Deped
                        </div>
                        <div class="panel-body">
                            <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>

                            <div class="table-responsive">
                                <table cellpadding="1" cellspacing="1" class="table table-bordered">
                                    <thead>
                                    <tr>
                                         <th>Subject</th>
                                        <th>Start</th>
                                        <th>End</th>
                                        <th>Day</th>
                                        <th>Instructor</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="td">
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End main content-->
</div>



<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="{{asset('vendor/pacejs/pace.min.js')}}"></script>
<script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('vendor/toastr/toastr.min.js')}}"></script>
<script src="{{asset('vendor/sparkline/index.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.min.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.spline.js')}}"></script>
<script src="{{asset('vendor/animateNumber/jquery.animateNumber.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
<script src="{{asset('vendor/datatables/datatables.min.js')}}"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- App scripts -->
<script src="{{asset('scripts/luna.js')}}"></script>

<script>
    $( function() {
    $( "#ww-slide1" ).slider({
      range: "min",
      value: 30,
      min: 1,
      max: 100,
      slide: function( event, ui ) {
        $( "#fw-1" ).val(ui.value+ "%" );
      }
    });
    $( "#pt-slide1" ).slider({
      range: "min",
      value: 50,
      min: 1,
      max: 100,
      slide: function( event, ui ) {
        $( "#fp-1" ).val(ui.value+ "%" );
      }
    });
    $( "#fp-1" ).val($( "#pt-slide1" ).slider( "value" )+ "%");
    $( "#fw-1" ).val($( "#ww-slide1" ).slider( "value" )+ "%");
    
    });
    $(document).ready(function () {
        $('.close').click(function(){
                            $('.alert-danger').css({'display': 'none'});
                        });
        $('#addsched').click(function(e){
            e.preventDefault();
            $('#addschedule').modal('hide');
            $('.loader').fadeIn();
            $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
                      }
                  });
            $.ajax({
                type: 'POST',
                url: '/admin/subject/schedule/manageschedule/add',
                data: {
                    '_token': $('input[name=_token]').val(), subject: $('select[name=subject]').val(), category: $('select[name=category]').val(), teacher: $('select[name=teacher]').val(), timestart: $('input[name=start]').val(), timeend: $('input[name=end]').val(), day: $('select[name=day]').val()
                },
                dataType:'json',
                 success: function(data){
                    if(data.errors){
                     

                        toastr.error(
                        $.each(data.errors, function(key, value){
                        '<p>' + value + '</p>'
                        
                      }), 'Invalid Input');
                    }else{
                        toastr.success('Created a Subject Schedule', 'Success');
                        if(data.category == 'Primary'){
                            $('#tb').append('<tr class="'+data.id+'">'+
                                        '<td>'+data.subject+'</td>'+
                                        '<td>'+data.timestart +'</td>'+
                                        '<td>'+data.timeend +'</td>'+
                                        '<td>'+data.day +'</td>'+
                                        '<td>'+data.teacher+'</td>'+
                                        '<td style="width:25%;"><button class="btn btn-default" style="margin-right: 5px;" data-toggle="modal" data-target="#edit'+data.id+'"><span class="fa fa-edit"></span></button><button class="btn btn-default" data-toggle="modal" data-target="#delete'+data.id+'"><span class="fa fa-trash"></span></button></td>'+
                                    '</tr>');
                        }
                        else if(data.category == 'Secondary'){
                            $('#td').append('<tr class="'+data.id+'">'+
                                        '<td>'+data.subject+'</td>'+
                                        '<td>'+data.timestart +'</td>'+
                                        '<td>'+data.timeend +'</td>'+
                                        '<td>'+data.day +'</td>'+
                                        '<td>'+data.teacher+'</td>'+
                                        '<td style="width:25%;"><button class="btn btn-default" style="margin-right: 5px;" data-toggle="modal" data-target="#edit'+data.id+'"><span class="fa fa-edit"></span></button><button class="btn btn-default" data-toggle="modal" data-target="#delete'+data.id+'"><span class="fa fa-trash"></span></button></td>'+
                                    '</tr>');
                        }
                        
                    }
                    
                 },
                 complete: function(){
              $('.loader').fadeOut();
            }
            });
        });
        $("body").on('click', '.editsection', function(e){
            e.preventDefault();
            var id = $(this).attr('id');
            $('.loader').fadeIn();
            $('.editmodal').modal('hide');
            $.ajax({
                type: 'POST',
                url: '/admin/subject/section/editsection/' + id,
                data: {
                    '_token': $('input[name=_token]').val(), updatename: $('input[name=updatename]').val(), updatedescription: $('textarea[name=updatedescription]').val(), updatelevel: $('select[name=updatelevel]').val(), updateroom: $('input[name=updateroom]').val(), updatestatus: $('select[name=updatestatus]').val()
                },
                success:function(data){
                   $.each(data.errors, function(key, value){
                        $('.alert-danger').show();
                        $('.alert-danger').append('<p>'+value+'</p>'); 
                      });
                   if(data.errors){

                   }else{
                    console.log(data);
                    toastr.info('Successfully: Updated ' + data.updatename, 'Success');
                    $('.sections'+data.id).replaceWith('<tr class="sections'+data.id+'"><td>'+ data.id +'</td>' +
                                        '<td>' + data.updatename +'</td>' +
                                        '<td>' + data.updatedescription +'</td>' +
                                        '<td>' + data.updateroom + '</td>' +
                                        '<td><span class="label label-primary">Grade ' + data.updatelevel + '</span></td>' +
                                        '<td>' + (data.updatestatus == 'Open'? '<span class="label label-success">' + data.updatestatus + '</span>' : '<span class="label label-danger">' + data.updatestatus + '</span>')      
                                     + '</td>' +
                                        '<td><button class="btn btn-primary" style="margin-right: 5px;"><span class="fa fa-edit" data-toggle="modal" data-target="#edit'+ data.id +'"></span></button><button class="btn btn-danger" data-toggle="modal" data-target="#delete'+ data.id +'"><span class="fa fa-trash"></span></button></td></tr>');
                   }
                },
                 complete: function(){
              $('.loader').fadeOut();
            }
            });
        });

        $("body").on('click', '.deletesection', function(e){
            e.preventDefault();
            $('.loader').fadeIn();
            $('.deletemodal').modal('hide');
            var id = $(this).attr('id');
            $.ajax({
                type: 'POST',
                url: '/admin/subject/section/deletesection/' + id,
                data : {
                    '_token': $('input[name=_token]').val(),
                },
                dataType: 'json',
                success:function(data){
                    toastr.error('Successfully: Deleted the section !', 'Removed');
                    console.log(data);
                    $('.sections'+ data.id).remove();
                },
                 complete: function(){
              $('.loader').fadeOut();
            }
            });
        });

        // Sparkline charts
        var sparklineCharts = function () {
            $(".sparkline").sparkline([20, 34, 43, 43, 35, 44, 32, 44, 52, 45], {
                type: 'line',
                lineColor: '#FFFFFF',
                lineWidth: 3,
                fillColor: '#404652',
                height: 47,
                width: '100%'
            });

            $(".sparkline7").sparkline([10, 34, 13, 33, 35, 24, 32, 24, 52, 35], {
                type: 'line',
                lineColor: '#FFFFFF',
                lineWidth: 3,
                fillColor: '#f7af3e',
                height: 75,
                width: '100%'
            });

            $(".sparkline1").sparkline([0, 6, 8, 3, 2, 4, 3, 4, 9, 5, 3, 4, 4, 5, 1, 6, 7, 15, 6, 4, 0], {
                type: 'line',
                lineColor: '#2978BB',
                lineWidth: 3,
                fillColor: '#2978BB',
                height: 170,
                width: '100%'
            });

            $(".sparkline3").sparkline([-8, 2, 4, 3, 5, 4, 3, 5, 5, 6, 3, 9, 7, 3, 5, 6, 9, 5, 6, 7, 2, 3, 9, 6, 6, 7, 8, 10, 15, 16, 17, 15], {

                type: 'line',
                lineColor: '#fff',
                lineWidth: 3,
                fillColor: '#393D47',
                height: 70,
                width: '100%'
            });

            $(".sparkline5").sparkline([0, 6, 8, 3, 2, 4, 3, 4, 9, 5, 3, 4, 4, 5], {
                type: 'line',
                lineColor: '#f7af3e',
                lineWidth: 2,
                fillColor: '#2F323B',
                height: 20,
                width: '100%'
            });
            $(".sparkline6").sparkline([0, 1, 4, 2, 2, 4, 1, 4, 3, 2, 3, 4, 4, 2, 4, 2, 1, 3], {
                type: 'bar',
                barColor: '#f7af3e',
                height: 20,
                width: '100%'
            });

            $(".sparkline8").sparkline([4, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline9").sparkline([3, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline10").sparkline([4, 1], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline11").sparkline([1, 3], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline12").sparkline([3, 5], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline13").sparkline([6, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
        };
        $('#tableExample3').DataTable({
            ordering:  false,
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
            buttons: [
            ]
        });

        var sparkResize;

        // Resize sparkline charts on window resize
        $(window).resize(function () {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineCharts, 100);
        });

        // Run sparkline
        sparklineCharts();


        // Flot charts data and options
        var data1 = [ [0, 16], [1, 24], [2, 11], [3, 7], [4, 10], [5, 15], [6, 24], [7, 30] ];
        var data2 = [ [0, 26], [1, 44], [2, 31], [3, 27], [4, 36], [5, 46], [6, 56], [7, 66] ];

        var chartUsersOptions = {
            series: {
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 1

                }

            },
            grid: {
                tickColor: "#404652",
                borderWidth: 0,
                borderColor: '#404652',
                color: '#404652'
            },
            colors: [ "#f7af3e","#DE9536"]
        };

       toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": true,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        } 
       


    });
</script>

</body>

</html>
@else
  <script>window.location = "/admin/login";</script>
@endif