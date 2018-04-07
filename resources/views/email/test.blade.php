<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Quickstart pack</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">



    <!--[if lt IE 9]-->
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--[endif]-->

    <style>

        body{overflow: hidden; background-color: #fff;}

        .forminput {
            margin-top: 200px;
            text-align: center;
        }

        .form-group {
            padding: 20px;
        }


        .header.text-center {
            background-color: #56DCF4;
        }
        .header img {
            padding: 8px;
        }
        .h1, .h2, .h3, h1, h2, h3 {
            margin: 0;
            padding: 0;
        }

        .header_bottom h3 {
            background-color: #ddd;
            padding: 10px;
        }

        .content {
            background-color: #fff;
            padding: 180px;
            text-align: center;
        }

        .middle_content {
            background-color: #eee;
            padding: 40px;
        }
    </style>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="header text-center">
            <img src="{{url("public/img/logo.png")}}" alt="Tech Cloud Logo">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="header_bottom text-center">
            <h3>Invite Friends to get discount</h3>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="middle_content">
            <div class="content">

                <pre>{{$text}}</pre>
                <button type="button" class="btn btn-default">Send Invites Now</button>
            </div>
        </div>
    </div>
</div>









<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
