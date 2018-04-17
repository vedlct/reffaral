
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


        <script type="text/javascript" src="http://techcloudltd.com/raffaral/public/assets/js/multiple-emails.js"></script>
        <link type="text/css" rel="stylesheet" href="http://techcloudltd.com/raffaral/public/assets/css/multiple-emails.css" />


        <!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

        <style>

            body{ background-color: #f9f9f9; margin: 0; padding: 0; overflow: auto;}



            .form-group {
                padding: 10px;
                margin: 0;
            }



            .copyright {
                background-color: #404040;
                padding: 30px;
                color: #fff;
            }
            
            .header {
                margin-bottom: 70px;
            }


            .formstyle {
                min-height: 540px !important;
            }
        </style>

    </head>
    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="header">
                    <img width="100%" class="img-responsive" src="http://techcloudltd.com/raffaral/public/img/ppd-cover.png" alt="">
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row">
                <div class="formmiddle">
                    <div class="formstyle">


                        <form class="form-horizontal" action="{{route('ordersave')}}">
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email">Your Name:</label>
                                <div class="col-sm-6">
                                    <input type="name" class="form-control" name="name" id="email" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="pwd">Your Email:</label>
                                <div class="col-sm-6"> 
                                    <input type="email" class="form-control" name="email" id="pwd" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="pwd">Company Name: </label>
                                <div class="col-sm-6"> 
                                    <input type="name" class="form-control" name="companyname" id="pwd" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="pwd">Messages: </label>
                                <div class="col-sm-6"> 
                                    <textarea class="form-control" rows="5" name="message" id="comment"></textarea>
                                </div>
                            </div>

                            <div class="form-group"> 
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>

        <div style=" bottom: 0; width: 100%;" class="container-fluid">
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
