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


                        <div class="form-group">
                            <div class="row">
                                <label class="control-label col-md-2">Discount</label>
                                <input type="text" class="col-md-8  form-control" id="discount" name="discount" placeholder="Discount Amount" >
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="control-label col-md-2 " for="exampleInputEmail">Template</label>

                                <select  class="form-control col-md-8 " id="template" name="template">
                                    <option value="">Select Template</option>
                                    @for($i=0;$i<count(Template);$i++)
                                        <option value="{{Template[$i]}}">{{Template[$i]}}</option>
                                    @endfor

                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="row">
                                <label class="control-label col-md-2 " for="exampleInputEmail">Text</label>

                                <textarea class="form-control ckeditor" id="text" name="text" rows="6"></textarea>

                            </div>
                        </div>

                        <br>

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



                        <br>

                        <div class="form-group">
                            <div style="margin-left: 14%" class="col-md-8 custom-input-style">
                                <a onclick="sendMail()" class="btn btn-primary">Submit</a>
                            </div>
                        </div>

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
    <script type="text/javascript" src="{{url('public/assets/ckeditor/ckeditor.js')}}"></script>


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
        function sendMail() {
            var client=selecteds;
            if (client.length >0) {
                var discount =$('#discount').val();
                var template =$('#template').val();
                var text =$('#text').val();
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: 'POST',
                    url: "{!!route('email.sendMail') !!}",
                    cache: false,
                    data: {_token: CSRF_TOKEN,'discount': discount,'template':template,'client':client,'text':text},
                    success: function (data) {
                        selecteds=[];
                        $(':checkbox:checked').prop('checked',false);
                    }
                });
            }
            else {
                alert("Please Select a Client first");
            }
        }
    </script>

@endsection