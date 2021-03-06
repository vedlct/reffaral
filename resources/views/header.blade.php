<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('public/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{url('public/assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Raffaral| Admin Panel</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{url('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('public/assets/css/now-ui-dashboard.css?v=1.0.1')}}" rel="stylesheet" />
    <!--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">-->
    {{--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">--}}

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{url('public/assets/demo/demo.css')}}" rel="stylesheet" />
    {{--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    {{--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    @yield('header')
    <style>
        .table thead tr th{
            font-size: 14px;
        }
    </style>
</head>

<body class="">

<div class="wrapper ">

    <div class="sidebar" data-color="blue">
        <div class="logo">
            <a href="index.php" class="simple-text logo-normal">
               Raffaral
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">




                <li @if(Request::url()==Route('email.add') )class="active" @endif>
                    <a href="{{route('email.add')}}">
                        <i class="now-ui-icons design_app"></i>
                        <p>Add Emails</p>
                    </a>
                </li>
                <li @if(Request::url()==Route('email.show') )class="active" @endif>
                    <a href="{{route('email.show')}}">
                        <i class="now-ui-icons design_app"></i>
                        <p>All Emails</p>
                    </a>
                </li>


                <li @if(Request::url()==Route('reffaralemail') )class="active" @endif>
                    <a href="{{route('reffaralemail')}}">
                        <i class="now-ui-icons design_app"></i>
                        <p>Reffer Email List</p>
                    </a>
                </li>
                <li @if(Request::url()==Route('reffaralOrderList') )class="active" @endif>
                    <a href="{{route('reffaralOrderList')}}">
                        <i class="now-ui-icons design_app"></i>
                        <p>Reffer Order List</p>
                    </a>
                </li>

                <li @if(Request::url()==Route('email.sendMailShow') )class="active" @endif>
                    <a href="{{route('email.sendMailShow')}}">
                        <i class="now-ui-icons location_map-big"></i>
                        <p>Send Mail</p>
                    </a>
                </li>






            </ul>
        </div>
    </div>