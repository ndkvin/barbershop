@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('heads')
    <style>
        #order_filter,
        #booking_filter,
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
                <h4 class="mb-0 font-size-18">Dashboard</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <span class="badge badge-soft-primary float-right">Daily</span>
                        <h5 class="card-title mb-0">Cost per Unit</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                $17.21
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span class="text-muted">12.5% <i class="mdi mdi-arrow-up text-success"></i></span>
                        </div>
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 57%;">
                        </div>
                    </div>
                </div>
                <!--end card body-->
            </div><!-- end card-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <span class="badge badge-soft-primary float-right">Per Week</span>
                        <h5 class="card-title mb-0">Market Revenue</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                $1875.54
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span class="text-muted">18.71% <i class="mdi mdi-arrow-down text-danger"></i></span>
                        </div>
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 57%;">
                        </div>
                    </div>
                </div>
                <!--end card body-->
            </div><!-- end card-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <span class="badge badge-soft-primary float-right">Per Month</span>
                        <h5 class="card-title mb-0">Expenses</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                $784.62
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span class="text-muted">57% <i class="mdi mdi-arrow-up text-success"></i></span>
                        </div>
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 57%;">
                        </div>
                    </div>
                </div>
                <!--end card body-->
            </div>
            <!--end card-->
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <span class="badge badge-soft-primary float-right">All Time</span>
                        <h5 class="card-title mb-0">Daily Visits</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                1,15,187
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                            <span class="text-muted">17.8% <i class="mdi mdi-arrow-down text-danger"></i></span>
                        </div>
                    </div>

                    <div class="progress shadow-sm" style="height: 5px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 57%;">
                        </div>
                    </div>
                </div>
                <!--end card body-->
            </div><!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Barberman</h4>
            </div>
        </div>
    </div>

    <div class="card-deck row">
        @for ($i = 0; $i < 9; $i++)
            <div class="mx-auto mx-md-0 col-10 col-md-4 mt-3">
                <div class="card rounded-xl">
                    <img src="https://images.unsplash.com/photo-1532710093739-9470acff878f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        class="card-img-top" alt="barber image">
                    <div class="card-body">
                        <h5 class="card-title">Lincoln Torff</h5>
                        <button type="button" class="btn mr-3 text-white" data-toggle="modal" data-target="#edit"
                            style="background: grey">
                            Edit<i class="ml-2 mdi mdi-square-edit-outline"></i>
                        </button>
                        <button type="button" class="btn mr-3 btn-danger text-white"
                            data-toggle="modal"data-target="#delete">
                            Delete<i class="ml-2 mdi mdi-delete-outline"></i>
                        </button>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Product</h4>
            </div>
        </div>
    </div>

    <div class="card-deck row">
        @for ($i = 0; $i < 12; $i++)
            <div class="mx-auto mx-md-0 col-10 col-md-3 mt-3">
                <div class="card rounded-xl">
                    <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                        class="card-img-top" alt="barber image">
                    <div class="card-body">

                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">Hair Powder</h5>
                            <h5 class="card-title text-warning"><i class="mdi mdi-star"></i><i
                                    class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i
                                    class="mdi mdi-star-half"></i><i class="mdi mdi-star-outline"></i></h5>
                        </div>
                        <div style="font-weight: 700;color: #000000">
                            Rp50.000
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
    <!--end row-->


    {{-- order --}}
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Order</h4>

                    <div class="table-responsive">
                        <table id="order" class="table">
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
                                        <td>Rp100.000</td>
                                        <td>1000</td>
                                        <td class="text-success">Success</td>
                                        <td>
                                            <button type="button" class="btn text-dark" data-toggle="modal"
                                                data-target="#orderDetail">
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

    {{-- booking --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Order</h4>

                    <div class="table-responsive">
                        <table id="booking" class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Booking Date</th>
                                    <th>Customer</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Service</th>
                                </tr>
                            </thead>


                            <tbody>
                                @for ($i = 0; $i < 100; $i++)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>20 April 2023</td>
                                        <td>Budianto</td>
                                        <td>10:00PM</td>
                                        <td class="text-success">Success</td>
                                        <td>
                                            <button type="button" class="btn text-dark" data-toggle="modal"
                                                data-target="#detailBooking">
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

    <div class="modal fade" id="detailBooking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Booking Detail</h5>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                        aria-label="Close">
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
                                                                <b>Hair Cut</b>
                                                                <br />
                                                                By Julianto
                                                            </td>
                                                            <td>1</td>
                                                            <td>Rp50.000</td>
                                                            <td class="text-right">Rp50.000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>
                                                                <b>Hair Coloring</b> <br />
                                                                Red Color
                                                            </td>
                                                            <td>1</td>
                                                            <td>Rp150.000</td>
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
                                                <p><b>Sub-total:</b> Rp200.000</p>
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

    {{-- order Detail --}}
    <div class="modal fade" id="orderDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Order Detail</h5>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                        aria-label="Close">
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

    {{-- edit modal --}}
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Barber</h5>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.barberman.store', 1) }}" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Name"
                                name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="Email"
                                name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" placeholder="Password"
                                name="password">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="price" id="price" class="form-control" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect waves-light"
                        data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>

    {{-- delete modal --}}
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure want to delete this barberman?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect waves-light"
                        data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light">Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        $('#order').DataTable();
        $('#booking').DataTable();
    </script>

@endsection
