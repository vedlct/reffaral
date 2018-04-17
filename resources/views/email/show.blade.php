@extends('main')
@section('header')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

@endsection
@section('content')

    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Send Emails</h5>
                    </div>
                    <div class="card-body">
                        {{--<form class="form-horizontal">--}}


                        <br>

                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>

                            <tr>

                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clientInfo as $client)
                                <tr>
                                    <td>{{$client->clientname}}</td>
                                    <td>{{$client->email}}</td>
                                    <td>
                                        <form method="post" onsubmit="return confirm('Do you really want to delete this item?');" class="form-horizontal"  action="{{route('email.delete')}}">
                                            <input type="hidden" value="{{$client->clinetinfoid}}" name="id">
                                            {{csrf_field()}}
                                            <a href="#target_user_modal" data-toggle="modal" class="btn btn-info btn-sm"
                                               data-id="{{$client->clinetinfoid}}"
                                               data-name="{{$client->clientname}}"
                                               data-email="{{$client->email}}">
                                                <i class="fas fa-edit"></i></a>
                                            <button class="btn btn-danger btn-sm" ><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                        </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>



                        <br>


                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Modal--}}
    {{--Set Target Modal--}}
    <div class="modal fade" id="target_user_modal" >
        <div class="modal-dialog" style="max-width: 60%;">
            <div class="modal-content">
                <form method="post" action="{{route('email.update')}}">
                    {{csrf_field()}}
                    <input type="hidden" name="id">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit User</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label for="email">email:</label>
                                <input id="email" type="email" class="form-control" name="email" >
                            </div>

                            <div class="form-group col-md-5">
                                <label for="firstName">Name:</label>
                                <input id="name" type="text" class="form-control" name="name" >
                            </div>

                            <div class="form-group col-md-2">
                                <button class="btn btn-success" type="submit">Update</button>
                            </div>


                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    {{--End Modal--}}

@endsection
@section('foot-js')

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>


    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready( function () {
            $('#example').DataTable();
        } );


        //Set  target_user_modal

        $('#target_user_modal').on('show.bs.modal', function(e){
            var id = $(e.relatedTarget).data('id');
            var name = $(e.relatedTarget).data('name');
            var email = $(e.relatedTarget).data('email');

            $(e.currentTarget).find('input[name="id"]').val(id);
            $(e.currentTarget).find('input[name="name"]').val(name);
            $(e.currentTarget).find('input[name="email"]').val(email);


        });



    </script>

@endsection