@extends('main')
@section('header')


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
                            <input type='text' id='refferEmail' name='refferEmail' class='col-md-8 custom-input-style form-control'>

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


@endsection