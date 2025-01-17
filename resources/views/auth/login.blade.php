<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="bg-primary-subtle">
    <!-- Begin page -->
    <div class="account-page">
        <div class="p-0 container-fluid">
            <div class="row align-items-center g-0">

                <div class="col-xl-5">
                    <div class="row">
                        <div class="mx-auto col-md-8">
                            <div class="p-3 mb-0 card">
                                <div class="card-body">

                                    <div class="p-4 mb-0 border-0 p-md-5 p-lg-0">
                                        <div class="p-0 mb-4 text-center">
                                            <a href="index.html" class="auth-logo">
                                                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="logo-dark"
                                                    class="mx-auto" height="48" />
                                            </a>
                                        </div>

                                        @if (Session::has('error'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ Session::get('error') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif

                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger" role="alert">
                                                {{ $error }}
                                            </div>
                                        @endforeach

                                        <div class="pt-0">
                                            <form action="{{ route('authenticate') }}" class="my-4" method="POST"
                                                autocomplete="off">
                                                @csrf
                                                <div class="mb-3 form-group">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input class="form-control" type="text" id="username"
                                                        name="username" placeholder="Masukkan Email" required>
                                                </div>

                                                <div class="mb-3 form-group">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input class="form-control" type="password" id="password"
                                                        name="password" placeholder="Masukkan Password" required>
                                                </div>

                                                <div class="mb-3 form-group">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="checkbox-signin">
                                                        <label class="form-check-label" for="checkbox-signin">Remember
                                                            me</label>
                                                    </div>
                                                </div>

                                                <div class="mb-0 form-group row">
                                                    <div class="col-12">
                                                        <div class="d-grid">
                                                            <button class="btn btn-primary" type="submit"> Log In
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="mb-4 text-center text-muted">
                                                <p class="mb-0">Belum punya akun ?<a
                                                        class='text-primary ms-2 fw-medium'
                                                        href='{{ route('register') }}'>Daftar</a></p>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="p-4 account-page-bg p-md-5">
                        <div class="text-center">
                            <div class="auth-image">
                                <img src="{{ asset('assets/images/auth-images.svg') }}" class="mx-auto img-fluid"
                                    alt="images">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- END wrapper -->

    <!-- Vendor -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>
