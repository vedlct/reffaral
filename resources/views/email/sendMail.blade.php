@extends('main')
@section('header')

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />

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
                                @for($i=0 ; $i<3 ; $i++)
                                    <th>Select</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                @endfor
                                </tr>
                                </thead>

                                <tbody>

                                    @php
                                    $count = 1
                                    @endphp
                                @foreach($clientInfo as $client)

                                    @if($count % 4 == 0)
                                        <tr>
                                    @endif
                                    <td><input data-panel-id="{{$client->clinetinfoid}}" onclick="selected_rows(this)" class="chk" name="selected_rows[]" type="checkbox"></td>
                                    <td>{{$client->clientname .$count}}</td>
                                    <td>{{$client->email}}</td>
                                    @if($count % 4 == 0)
                                        </tr>
                                    @endif
                                    @php
                                    $count ++
                                    @endphp
                                @endforeach

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

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready( function () {
            $('#example').DataTable();
        } );

        var selecteds = [];
        function selected_rows(x) {
            btn = $(x).data('panel-id');
            var index = selecteds.indexOf(btn)
            if (index == "-1"){
                selecteds.push(btn);

            }else {

                selecteds.splice(index, 1);
            }


        }

    </script>

@endsection