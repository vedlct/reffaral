@extends('main')
@section('header')
    <!-- For Semantic UI Button -->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.12.2/semantic.min.css" />


    <link type="text/css" rel="stylesheet" href="{{url('public/assets/css/multiple-emails.css')}}" />


@endsection
@section('content')

    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Reffer Discount Email</h5>
                    </div>
                    <div class="card-body">
                        {{--<form class="form-horizontal">--}}

                        <input type="hidden" class="col-md-8 custom-input-style form-control" id="reffereceEmail" name="reffereceEmail" placeholder="reffereceEmail" readonly required>


                        <div class="form-group">

                            <label class="control-label custom-label-style col-md-2">Discount</label>
                            <input type="text" class="col-md-8 custom-input-style form-control" id="discount" name="discount" placeholder="Discount Amount" readonly>

                        </div>

                        <div class="form-group">

                            <label class="control-label custom-label-style col-md-2">Enter Reffer Email</label>
                            {{--<input type='text' id='refferEmail1' name='refferEmail' class='col-md-8 custom-input-style form-control'>--}}
                            <input type='hidden' id='refferEmail' name='refferEmail' class='col-md-8 custom-input-style form-control'>

                        </div>

                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('foot-js')

    {{--<!-- For Semantic UI Button -->--}}
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.12.2/semantic.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.12.2/semantic.min.js"></script>

    <script type="text/javascript" src="{{url('public/assets/js/multiple-emails.js')}}"></script>


    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script type="text/javascript">

        var selecteds = [];

        //Plug-in function for the bootstrap version of the multiple email
        $(function() {

            $('#refferEmail1').bind("enterKey",function(e){
                var emails =$('#refferEmail').val();
                selecteds.push(emails);
                alert(selecteds);


            });
            $('#refferEmail1').keyup(function(e){
                if(e.keyCode == 13)
                {
                    $(this).trigger("enterKey");

                }
            });

            //To render the input device to multiple email input using BootStrap icon
            $('#refferEmail').multiple_emails({position: "bottom"});
            //OR $('#example_emailBS').multiple_emails("Bootstrap");

            //Shows the value of the input device, which is in JSON format
            $('#refferEmail').text($('#refferEmail').val());
            $('#refferEmail').change( function(){
                $('#refferEmail').text($(this).val());
            });




        });



    </script>


@endsection