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
                <h4 class="mb-0 font-size-18">Dashboard</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end align-items-center mb-3">
        <button type="button" class="btn mr-3" data-toggle="modal" data-target="#create" style="background: #C38D58; color: white">
            <i class="mdi mdi-plus"></i>
            Create Product
        </button>
        <nav>
            <ul class="pagination m-0">
                <li class="page-item">
                    <a class="page-link waves-effect" href="javascript: void(0);" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link waves-effect" href="javascript: void(0);">1</a></li>
                <li class="page-item"><a class="page-link waves-effect" href="javascript: void(0);">2</a></li>
                <li class="page-item active" ><a class="page-link waves-effect" href="javascript: void(0);" style="background: #C38D58;">3</a></li>
                <li class="page-item"><a class="page-link waves-effect" href="javascript: void(0);">4</a></li>
                <li class="page-item"><a class="page-link waves-effect" href="javascript: void(0);">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="javascript: void(0);" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
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

    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Products</h4>

                    <div class="table-responsive">
                        <table id="products" class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->stock }}</td>
                                        <td>
                                            <button type="button" class="btn text-dark" data-toggle="modal"
                                                data-target="#edit">
                                                <i class="mdi mdi-circle-edit-outline"></i>
                                            </button>

                                            <button type="button" class="btn text-danger" data-toggle="modal"
                                                data-target="#delete">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- create modal--}}
    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Product</h5>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.product.update', 1) }}">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Name"
                                name="name">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="price" id="price" class="form-control" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="stock" id="stock" class="form-control" placeholder="Stock">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect waves-light"
                        data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    {{-- edit modal--}}
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.product.update', 1) }}">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Name"
                                name="name">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="price" id="price" class="form-control" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="stock" id="stock" class="form-control" placeholder="Stock">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect waves-light"
                        data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    {{-- delete modal--}}
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
                    Are you sure want to delete this product?
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
        $("#products").dataTable();
    </script>
@endsection
