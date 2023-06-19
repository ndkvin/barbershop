@extends('layouts.admin')

@section('title', 'Admin Dashboard')

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
        <div class="mx-auto mx-md-0 col-10 col-md-4">
            <div class="card rounded-xl">
                <img src="https://images.unsplash.com/photo-1532710093739-9470acff878f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    class="card-img-top" alt="barber image">
                <div class="card-body">
                    <h5 class="card-title">Lincoln Torff</h5>
                    <a href="" class="btn btn-warning">Edit<i class="ml-2 mdi mdi-square-edit-outline"></i></a>
                    <a href="" class="btn btn-danger">Delete<i class="ml-2 mdi mdi-delete-outline"></i></a>
                </div>
            </div>
        </div>
        <div class="mx-auto mx-md-0 col-10 col-md-4">
            <div class="card rounded-xl">
                <img src="https://images.unsplash.com/photo-1532710093739-9470acff878f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    class="card-img-top" alt="barber image">
                <div class="card-body">
                    <h5 class="card-title">Lincoln Torff</h5>
                    <a href="" class="btn btn-warning">Edit<i class="ml-2 mdi mdi-square-edit-outline"></i></a>
                    <a href="" class="btn btn-danger">Delete<i class="ml-2 mdi mdi-delete-outline"></i></a>
                </div>
            </div>
        </div>
        <div class="mx-auto mx-md-0 col-10 col-md-4">
            <div class="card rounded-xl">
                <img src="https://images.unsplash.com/photo-1532710093739-9470acff878f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                    class="card-img-top" alt="barber image">
                <div class="card-body">
                    <h5 class="card-title">Lincoln Torff</h5>
                    <a href="" class="btn btn-warning">Edit<i class="ml-2 mdi mdi-square-edit-outline"></i></a>
                    <a href="" class="btn btn-danger">Delete<i class="ml-2 mdi mdi-delete-outline"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Product</h4>
            </div>
        </div>
    </div>

    <div class="card-deck row">
        <div class="mx-auto mx-md-0 col-10 col-md-3">
            <div class="card rounded-xl">
                <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                    class="card-img-top" alt="barber image">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Hair Powder</h5>
                        <h5 class="card-title text-warning"><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i
                                class="mdi mdi-star"></i><i class="mdi mdi-star-half"></i><i
                                class="mdi mdi-star-outline"></i></h5>
                    </div>
                    <div style="font-weight: 700;color: #000000">
                        Rp50.000
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto mx-md-0 col-10 col-md-3">
            <div class="card rounded-xl">
                <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                    class="card-img-top" alt="barber image">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Hair Powder</h5>
                        <h5 class="card-title text-warning"><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i
                                class="mdi mdi-star"></i><i class="mdi mdi-star-half"></i><i
                                class="mdi mdi-star-outline"></i></h5>
                    </div>
                    <div style="font-weight: 700;color: #000000">
                        Rp50.000
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto mx-md-0 col-10 col-md-3">
            <div class="card rounded-xl">
                <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                    class="card-img-top" alt="barber image">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Hair Powder</h5>
                        <h5 class="card-title text-warning"><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i
                                class="mdi mdi-star"></i><i class="mdi mdi-star-half"></i><i
                                class="mdi mdi-star-outline"></i></h5>
                    </div>
                    <div style="font-weight: 700;color: #000000">
                        Rp50.000
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto mx-md-0 col-10 col-md-3">
            <div class="card rounded rounded-lg">
                <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                    class="card-img-top" alt="barber image">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Hair Powder</h5>
                        <h5 class="card-title text-warning"><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i
                                class="mdi mdi-star"></i><i class="mdi mdi-star-half"></i><i
                                class="mdi mdi-star-outline"></i></h5>
                    </div>
                    <div style="font-weight: 700;color: #000000">
                        Rp50.000
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
@endsection
