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
                    <h5 class="title">Add Emails</h5>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" method="post" action="{{route('email.insert')}}">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label class="control-label col-md-2 custom-label-style">Name</label>
                            <input type="text" class="col-md-8 custom-input-style form-control" id="name" name="name" placeholder="Name" >
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2 custom-label-style" for="exampleInputEmail">Email</label>
                            <input type="email"  class="col-md-8 custom-input-style form-control" id="email" name="email" placeholder="Email" required>
                        </div>




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

@endsection