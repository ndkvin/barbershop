<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Barbershop - Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- App css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
</head>

<body>

    <div style="background-color: #181818">
        <div class="container" >
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center min-vh-100">
                        <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                            <div class="row">
                                <div class="col-lg-5 d-none d-lg-block bg-register rounded-left"></div>
                                <div class="col-lg-7">
                                    <div class="p-5">
                                        
                                        <h1 class="h5 mb-1 mt-5">Create an Account!</h1>
                                        <p class="text-muted mb-4">Don’t have an account? Create your own account, it
                                            take less than a minute</p>
                                        <form class="user" action="{{ route('register') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user"
                                                    id="name" placeholder="Name" name="name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user"
                                                    id="email" placeholder="Email Address" name="email">
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="password" class="form-control form-control-user"
                                                        id="exampleInputPassword" placeholder="Password"
                                                        name="password">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="password" class="form-control form-control-user"
                                                        id="exampleRepeatPassword" placeholder="Repeat Password"
                                                        name="password_confirmation">
                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-success btn-block waves-effect waves-light rounded-lg" style="background-color: #C38D58; border: none">
                                                Register
                                                Account </button>

                                            <a href="#"
                                                class="btn btn-success btn-block waves-effect waves-light rounded-lg mt-3" style="background-color: #C38D58; border: none">
                                                Login With Google </a>

                                        </form>

                                        <div class="row mt-4 mb-5">
                                            <div class="col-12 text-center">
                                                <p class="text-muted mb-0">Already have account? <a
                                                        href="{{ route("login") }}"
                                                        class="text-muted font-weight-medium ml-1"><b>Sign In</b></a>
                                                </p>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div> <!-- end .padding-5 -->
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div> <!-- end .w-100 -->
                    </div> <!-- end .d-flex -->
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- jQuery  -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/metismenu.min.js"></script>
    <script src="/assets/js/waves.js"></script>
    <script src="/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="/assets/js/theme.js"></script>
    @if ($errors->any())
        <script>
            let errorMessages = '';
            @foreach ($errors->all() as $error)
                errorMessages += "{{ $error }}";
            @endforeach
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: errorMessages,
            })
        </script>
    @endif
</body>

</html>
