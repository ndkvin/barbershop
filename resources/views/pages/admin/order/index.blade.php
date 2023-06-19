@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('heads')
    <style>
        #products_filter,
        .pagination {
            display: flex;
            justify-content: end
        }

        li.active.page-item a.page-link {
            background: #C38D58;
        }
    </style>
@endsection

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Order</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                        <li class="breadcrumb-item active">Order</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!--end row-->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Order</h4>

                    <div class="table-responsive">
                        <table id="products" class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Customer Name</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Invoice</th>
                                </tr>
                            </thead>


                            <tbody>
                                @for ($i = 0; $i < 100; $i++)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>20 April 2023</td>
                                        <td>Budianto</td>
                                        <td>Rp100.000</td>
                                        <td class="text-success">Success</td>
                                        <td>
                                            <button type="button" class="btn text-dark" data-toggle="modal"
                                                data-target="#show">
                                                <i class="mdi mdi-eye"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Order Detail</h5>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <h4><b></b></h4>
                                        </div>
                                        <div class="float-right">
                                            <h4 class="m-0 d-print-none">Invoice</h4>
                                        </div>
                                    </div>


                                    <div class="row mt-4">
                                        <div class="col-6">
                                            <h6 class="font-weight-bold">TO:</h6>

                                            <address class="line-h-24">
                                                <b>Nugroho</b><br>
                                                <abbr title="Phone">Phone:</abbr> +6281234567810
                                            </address>
                                        </div><!-- end col -->
                                        <div class="col-6">
                                            <div class="mt-3 float-right">
                                                <p class="mb-2"><strong>Order Date: </strong> 20 April 2023</p>
                                                <p class="mb-2"><strong>Order Status: </strong> <span
                                                        class="badge badge-soft-success">Success</span></p>
                                                <p class="m-b-10"><strong>Order ID: </strong> #132</p>
                                            </div>
                                        </div><!-- end col -->
                                    </div>
                                    <!-- end row -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table mt-4">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Item</th>
                                                            <th>Quantity</th>
                                                            <th>Unit Cost</th>
                                                            <th class="text-right">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <b>Hair Powder</b>
                                                                <br />
                                                                Brand Bank Senja 200g
                                                            </td>
                                                            <td>1</td>
                                                            <td>Rp10.000</td>
                                                            <td class="text-right">Rp10.000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>
                                                                <b>Clay Gel</b> <br />
                                                                Brand Bank Senja 100g
                                                            </td>
                                                            <td>3</td>
                                                            <td>Rp50.000</td>
                                                            <td class="text-right">Rp150.000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="float-right">
                                                <p><b>Sub-total:</b> Rp160.000</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect waves-light"
                        data-dismiss="modal">Close</button>
                    <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i
                            class="fa fa-print m-r-5"></i> Print</a>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        $("#products").dataTable();
    </script>
@endsection
