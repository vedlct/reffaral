@extends('main')


@section('content')

    <div class="panel-header panel-header-sm">
    </div>

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
                    <input type="password" class="form-control" id="password_confirm" >
                </div>
                <div id="message"></div>
                <button type="submit" class="btn btn-success">change</button>
            </form>
        </div>
    </div>




    @endsection


@section('foot-js')
    <script>

        $('#password, #password_confirm').on('keyup', function () {
            if ($('#password').val() == $('#confirm_password').val()) {
                $('#message').html('Matching').css('color', 'green');
            } else
                $('#message').html('Not Matching').css('color', 'red');
        });
    </script>


@endsection