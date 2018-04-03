<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('public/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{url('public/assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>LLoyd Baker | Admin Panel</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{url('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('public/assets/css/now-ui-dashboard.css?v=1.0.1')}}" rel="stylesheet" />
    <!--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{url('public/assets/demo/demo.css')}}" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
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
                LLoyd Baker
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active">
                    <a href="index.php">
                        <i class="now-ui-icons design_app"></i>
                        <p>Stock info</p>
                    </a>
                </li>

                <li>
                    <a href="{{route('email.add')}}">
                        <i class="now-ui-icons design_app"></i>
                        <p>Add Emails</p>
                    </a>
                </li>

                <li >
                    <a href="addproduct.php">
                        <i class="now-ui-icons location_map-big"></i>
                        <p>Add Product</p>
                    </a>
                </li>

                <li>
                    <a href="product.php">
                        <i class="now-ui-icons design_app"></i>
                        <p>Product list</p>
                    </a>
                </li>

                <li>
                    <a href="user.php">
                        <i class="now-ui-icons design_app"></i>
                        <p>User list</p>
                    </a>
                </li>




                <li>
                    <a href="forms.php">
                        <i class="now-ui-icons location_map-big"></i>
                        <p>Forms</p>
                    </a>
                </li>
                <li>
                    <a href="tables.php">
                        <i class="now-ui-icons design_bullet-list-67"></i>
                        <p>Table</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>