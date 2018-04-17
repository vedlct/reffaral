@extends('main')
@section('header')

    {{--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">--}}

@endsection
@section('content')

    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Reffaral Emails</h5>
                    </div>
                    <div class="card-body">
                        {{--<form class="form-horizontal">--}}


                        <br>

                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>

                            <tr>

                                <th>SL</th>
                                <th>Company Name</th>
                                <th>Email</th>
                                <th>Order date</th>
                                <th>Discount Code</th>
                                <th>Reffaral Email</th>
                                <th>Discount Amount</th>
                                {{--<th>Action</th>--}}


                            </tr>
                            </thead>
                            <tbody>

                            @php
                                $count= 1
                            @endphp
                            @foreach($orderlist as $ol)
                                <tr>
                                    <td>{{$count}}</td>
                                    <td>{{$ol->cname}}</td>
                                    <td>{{$ol->email}}</td>
                                    <td>{{$ol->referorderedDate}}</td>
                                    <td>{{$ol->discountCode}}</td>
                                    <td>{{$ol->clientEmail}}</td>
                                    <td>{{$ol->offeramount}}</td>
                                    {{--<td><button data-id="{{$client->clinetinfoid}}" class="btn btn-info btn-sm" ><i class="fas fa-info-circle"></i></button></td>--}}
                                    @php
                                        $count++
                                    @endphp
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

            $('#example').DataTable({

                "columnDefs": [ {
                    "targets": [ 1,2,4,5 ],
                    "orderable": false
                } ]
            });
        } );

    </script>

@endsection