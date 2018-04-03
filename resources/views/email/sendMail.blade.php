@extends('main')
@section('header')
    <link href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" />

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
                        <form class="form-horizontal" method="post" action="{{route('email.insert')}}">
                            {{csrf_field()}}

                            <div class="form-group">

                                <label class="control-label custom-label-style col-md-2">Discount</label>
                                <input type="text" class="col-md-8 custom-input-style form-control" id="discount" name="discount" placeholder="Discount Amount" >

                            </div>
                            <div class="form-group">
                                <label class="control-label custom-label-style col-md-2 " for="exampleInputEmail">Email</label>

                                    <select  class="form-control col-md-8 custom-input-style " >
                                        <option value="">Select Template</option>
                                        @foreach( $template as $template)
                                        <option value="{{$template->templateid}}">{{$template->name}}</option>
                                        @endforeach
                                    </select>

                            </div>

                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    @foreach($clientInfo as $client)
                                    <th>Select</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    @foreach($clientInfo as $client)
                                    <td><input name="selected_rows[]" type="checkbox"></td>
                                    <td>{{$client->clientname}}</td>
                                    <td>{{$client->clientname}}</td>
                                    @endforeach
                                </tr>

                                </tbody>

                            </table>



                            <br>

                            <div class="form-group">
                                <div style="margin-left: 14%" class="col-md-8 custom-input-style">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('foot-js')

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#example').DataTable();
        } );
    </script>

@endsection