<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Register | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />
    <meta name="author" content="Zoyothemes" />
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
                            <div class="p-3 card">
                                <div class="card-body">

                                    <div class="p-4 mb-0 border-0 p-md-5 p-lg-0">
                                        <div class="p-0 mb-4 text-center">
                                            <a href="index.html" class="auth-logo">
                                                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="logo-dark"
                                                    class="mx-auto" height="48" />
                                            </a>
                                        </div>

                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                {{ $error }}
                                            </div>
                                        @endforeach

                                        <div class="pt-0">
                                            <form action="{{ route('register.store') }}" class="my-4" method="POST"
                                                autocomplete="off">
                                                @csrf
                                                <div class="mb-3 form-group">
                                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                                    <input class="form-control" name="nama" type="text"
                                                        name="nama" id="nama" placeholder="Masukkan nama"
                                                        required>
                                                </div>
                                                <div class="mb-3 form-group">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input class="form-control" name="username" type="text"
                                                        name="username" id="username" placeholder="Masukkan username"
                                                        required>
                                                </div>
                                                <div class="mb-3 form-group">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input class="form-control" type="password" id="password"
                                                        name="password" placeholder="Masukkan password">
                                                </div>
                                                <div class="mb-3 form-group">
                                                    <label for="passwordConfirm" class="form-label">Konfirmasi
                                                        Password</label>
                                                    <input class="form-control" type="password" id="passwordConfirm"
                                                        name="password_confirmation" placeholder="Masukkan password">
                                                </div>
                                                <div class="mb-3 form-group">
                                                    <label for="no_hp" class="form-label">No. HP</label>
                                                    <input class="form-control" name="no_hp" type="text"
                                                        name="no_hp" id="no_hp" placeholder="Masukkan no. hp"
                                                        required>
                                                </div>

                                                <div class="mb-3 form-group">
                                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                    <input class="form-control" name="tanggal_lahir" type="date"
                                                        name="tanggal_lahir" id="tanggal_lahir"
                                                        placeholder="Pilih tanggal" required>
                                                </div>

                                                <div class="mb-3 form-group">
                                                    <label for="alamat" class="form-label">Alamat</label>
                                                    <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat" required></textarea>
                                                </div>

                                                <div class="mb-0 form-group row">
                                                    <div class="col-12">
                                                        <div class="d-grid">
                                                            <button class="btn btn-primary" type="submit">
                                                                Register</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="mb-4 text-center text-muted">
                                                <p class="mb-0">Sudah punya akun ?<a
                                                        class='text-primary ms-2 fw-medium'
                                                        href='{{ route('login') }}'>Login
                                                        disini</a></p>
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
