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
                <h4 class="mb-0 font-size-18">Barberman</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                        <li class="breadcrumb-item active">Barberman</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="d-flex justify-content-end align-items-center mb-3">
        <button type="button" class="btn mr-3" data-toggle="modal" data-target="#create"
            style="background: #C38D58; color: white">
            <i class="mdi mdi-plus"></i>
            Create Barberman
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
                <li class="page-item active"><a class="page-link waves-effect" href="javascript: void(0);"
                        style="background: #C38D58;">3</a></li>
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




    <!--end row-->

    {{-- create modal --}}
    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Barber</h5>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.barberman.store', 1) }}" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" placeholder="Name" name="name">
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
