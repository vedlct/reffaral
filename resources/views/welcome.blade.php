@extends('main')

    @section('content')

        <!-- End Navbar -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Stock Info</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                            <label>Product Category</label>
                                            <select class="form-control" >
                                                <option value="">Select Product Category</option>
                                                <option value="">Men->Pant</option>
                                                <option value="">Women->Gown</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <select class="form-control" >
                                                <option value="">Select Product Location</option>
                                                <option value="">Pallet-1</option>
                                                <option value="">Pallet-2</option>
                                                <option value="">Pallet-3</option>
                                                <option value="">Pallet-4</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>SKU</th>
                                            <th>Color</th>
                                            <th>Location</th>
                                            <th>RRP</th>
                                            <th>Stock Quantity</th>
                                            <th>Min Qty Alert</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr style="color: red;">
                                            <td>Cobalt low-back satin gown</td>
                                            <td>Womenswear>Gowns</td>
                                            <td>ABCD-123-BLS</td>
                                            <td>Yellow Croc</td>
                                            <td>pallet-1</td>
                                            <td>90</td>
                                            <td>123</td>
                                            <td><span>2</span></td>
                                        </tr>
                                        <tr>
                                            <td>Bordeaux low-back satin gown</td>
                                            <td>WW Accessories Mirakl / Bags / Shoulder Bags</td>
                                            <td>ABCD-124-BLS</td>
                                            <td>Yellow Croc</td>
                                            <td>pallet-2</td>
                                            <td>90</td>
                                            <td>123</td>
                                            <td>10</td>
                                        </tr>
                                        <tr style="color: red;">
                                            <td>Bordeaux low-back satin gown</td>
                                            <td>WW Accessories Mirakl / Bags / Shoulder Bags</td>
                                            <td>ABCD-125-BLS</td>
                                            <td>Black</td>
                                            <td>pallet-3</td>
                                            <td>90</td>
                                            <td>123</td>
                                            <td><span>5</span></td>
                                        </tr>
                                        <tr>
                                            <td>Cobalt low-back satin gown</td>
                                            <td>Womenswear>Gowns</td>
                                            <td>ABCD-126-BLS</td>
                                            <td>Yellow Croc</td>
                                            <td>pallet-4</td>
                                            <td>90</td>
                                            <td>123</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>Cobalt low-back satin gown</td>
                                            <td>Womenswear>Gowns</td>
                                            <td>ABCD-127-BLS</td>
                                            <td>Yellow Croc</td>
                                            <td>pallet-5</td>
                                            <td>90</td>
                                            <td>123</td>
                                            <td>10</td>
                                        </tr>
                                        <tr style="color: red;">
                                            <td>Cobalt low-back satin gown</td>
                                            <td>Womenswear>Gowns</td>
                                            <td>ABCD-223-BLS</td>
                                            <td>Yellow Croc</td>
                                            <td>pallet-6</td>
                                            <td>90</td>
                                            <td>123</td>
                                            <td><span>4</span></td>
                                        </tr>
                                        <tr>
                                            <td>Cobalt low-back satin gown</td>
                                            <td>Womenswear>Gowns</td>
                                            <td>ABCD-423-BLS</td>
                                            <td>Blue</td>
                                            <td>pallet-7</td>
                                            <td>90</td>
                                            <td>123</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>Cobalt low-back satin gown</td>
                                            <td>Womenswear>Gowns</td>
                                            <td>ABCD-123-BLS</td>
                                            <td>Brown</td>
                                            <td>pallet-8</td>
                                            <td>90</td>
                                            <td>123</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>Cobalt low-back satin gown</td>
                                            <td>Womenswear>Gowns</td>
                                            <td>ABCD-332-BLS</td>
                                            <td>Yellow Croc</td>
                                            <td>pallet-9</td>
                                            <td>90</td>
                                            <td>123</td>
                                            <td>10</td>
                                        </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



</div>

        @endsection

                {{--<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>--}}
                {{--<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>--}}

                {{--<script>--}}

                    {{--$(document).ready(function() {--}}
                        {{--$('#example').DataTable();--}}
                    {{--} );--}}

                {{--</script>--}}



