@extends('main')


@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">

    <div class="card">
        <div class="card-header">
            <h5 class="title">Password Change</h5>
        </div>
        <div class="card-body">

            <form method="post" id="validatedForm" action="{{route('changepassword')}}">
                {{csrf_field()}}
                <div class="form-group col-md-6">
                    <label for="usr">Old Password:</label>
                    <input type="password" class="form-control" id="usr" name="currentPassword">
                </div>


                <div class="form-group col-md-6">
                    <label for="pwd">New Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="form-group col-md-6">
                    <label for="pwd">Confirm Password:</label>
                    <input type="password" class="form-control" id="confirm_password" >
                </div>
                <div id="message"></div>
                <button type="submit" class="btn btn-success">change</button>
            </form>
        </div>
    </div>
    </div>



    @endsection


@section('foot-js')
    <script>

        $( document ).ready(function() {

            $('#password,#confirm_password').bind('input',function() {


                if ($('#password').val() == $('#confirm_password').val()) {
                $('#message').html('Matched').css('color', 'green');

                } else
                    $('#message').html('Not Matched').css('color', 'red');
            });

        });

    </script>


@endsection