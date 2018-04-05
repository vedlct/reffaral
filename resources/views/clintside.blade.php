<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Raffaral</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">



    <script type="text/javascript" src='http://code.jquery.com/jquery-latest.min.js'></script>

    <!-- For Bootstrap UI Button -->
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


    <script type="text/javascript" src="{{url('public/assets/js/multiple-emails.js')}}"></script>
    <link type="text/css" rel="stylesheet" href="{{url('public/assets/css/multiple-emails.css')}}" />


    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

        body{overflow: hidden; background-color: #f9f9f9;}

        .forminput {
            margin-top: 200px;
            text-align: center;
        }

        .form-group {
            padding: 20px;
        }



        .copyright {
            background-color: #404040;
            bottom: 0;
            left: 0;
            overflow: hidden;
            padding: 30px;
            position: absolute;
            width: 100%;
            color: #fff;
        }


        .formstyle{padding: 100px;}
    </style>

</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="header">
            <img width="100%" class="img-responsive" src="{{url('/public/img/ppd-cover.png')}}" alt="">
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
            <div class="formstyle text-center">
                <form class="form-inline" action="{{route('saveemail')}}" method="post">
                    {{csrf_field()}}
                    <div class='form-group'>
                        <div class='col-lg-12'>
                            <h4 for='example_emailBS' style="color: #1394D2">Lets Share your Email Addresses</h4>
                            <input type='text' id='example_emailBS' name='example_emailBS' class='form-control' value='["hello@git.com","tom@net.com"]'>
                        </div>
                        <div  class='btnsubmit'>
                            <button style="margin-top: 10px; " type="submit" class="btn btn-success">Submit</button>
                        </div>
                        {{--<div class='col-sm-offset-2 col-sm-4'>--}}
                        {{--<h4>Current email addresses</h4>--}}
                        {{--<pre id='current_emailsBS'></pre>--}}
                        {{--</div>--}}
                    </div>

                </form>
            </div>
        </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="copyright">
            <p>&copy;  Copyright - 2018&nbsp; | &nbsp;<a href="http://techcloudltd.com/" class="highlight">Tech Cloud Ltd.</a>&nbsp; | &nbsp;All Rights Reserved.</p>
        </div>

    </div>
</div>



<script type="text/javascript">

    //Plug-in function for the bootstrap version of the multiple email
    $(function() {
        //To render the input device to multiple email input using BootStrap icon
        $('#example_emailBS').multiple_emails({position: "bottom"});
        //OR $('#example_emailBS').multiple_emails("Bootstrap");

        //Shows the value of the input device, which is in JSON format
        $('#current_emailsBS').text($('#example_emailBS').val());
        $('#example_emailBS').change( function(){

           // alert($('#example_emailBS').val());
        });
    });
    $(document).ready(function() {
        $(window).keydown(function(event){
            if(event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });

</script>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
