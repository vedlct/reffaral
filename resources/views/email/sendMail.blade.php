@extends('main')
@section('header')
    {{--<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />--}}
@endsection

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
<div class="content">
    <div class="card">
        <br>



    <div class="table-responsive col-md-12">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>

                <th>Select</th>
                <th>Name</th>
                <th>Email</th>

            </tr>
            </thead>
            <tbody>
            @foreach($clientInfo as $client)
                <tr>
                    <td><input data-panel-id="{{$client->clinetinfoid}}" onclick="selected_rows(this)"class="chk" name="selected_rows[]" type="checkbox"></td>
                    <td>{{$client->clientname}}</td>
                    <td>{{$client->email}}</td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div></div>

</div>


@endsection
@section('foot-js')
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <script>

        $(document).ready(function() {
            $('#example').DataTable();
        } );

    </script>



@endsection