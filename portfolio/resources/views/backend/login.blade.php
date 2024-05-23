<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | MAROOF</title>
    <meta charset="utf-8">
    <meta name="author" content="DexignZone">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('backend/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ url('backend/vendor/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/css/style.css') }}">
</head>

<body>
    <div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="login-aside text-center  d-flex flex-column flex-row-auto">
            <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                <div class="text-center mb-4 pt-5">
                    <a href="{{ route('dashboard.show') }}" class="brand-logo">
                        <img class="logo-abbr" src="{{ url('backend/images/logo/logo1.png') }}"></img>
                    </a>
                </div>
                <h3 class="mb-2">Welcome back!</h3>
                <p>You're going to Login<br>Maroof SUltan Portfolio</p>
            </div>
        </div>
        <div
            class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
            <div class="d-flex justify-content-center h-100 align-items-center">
                <div class="authincation-content style-2">
                    <div class="row no-gutters">
                        <div class="col-xl-12 tab-content">
                            @if (session()->has('success') || session()->has('error'))

                                @if (session()->has('success'))
                                    <div class="alert alert-block p-4 border-left-warning text-center"
                                        style="background-color:#fd712c; opacity:1">
                                        <strong>
                                            <h5 style="color: #ffffff">{{ session('success') }}</h5>
                                        </strong>
                                    </div>
                                @elseif (session()->has('error'))
                                    <div class="alert alert-block p-4 border-left-warning text-center"
                                        style="background-color:red; opacity:1">
                                        <strong>
                                            <h5 style="color: #ffffff">{{ session('error') }}</h5>
                                        </strong>
                                    </div>
                                @endif

                            @endif
                            <form id="dz_login_signup_form" class="form-validate" action="{{ route('login.valid') }}"
                                enctype="multipart/form-data" method="POST">
                                @csrf
                                <h3 class="text-center mb-4 text-black">Signin your account</h3>
                                <div class="form-group mb-3">
                                    <label class="mb-1 form-label text-black">Email</label>
                                    <div>
                                        <input type="email" class="form-control" value="{{ old('email') }}"
                                            placeholder="Email" name="email">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">
                                                {{ $errors->first('email') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-1 form-label text-black">Password</label>
                                    <div class="position-relative">
                                        <input type="password" id="dz-password" class="form-control"
                                            value="{{ old('password') }}" placeholder="Password" name="password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">
                                                {{ $errors->first('password') }}
                                            </span>
                                        @endif
                                        <span class="show-pass eye">
                                            <i class="fa fa-eye-slash"></i>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>
                            </form>
                            <div class="new-account mt-3">
                                <p>Don't have an account? <a class="text-primary"
                                        href="{{ route('signup.show') }}">Sign
                                        up</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('backend/vendor/global/global.min.js') }}"></script>
    <script src="{{ url('backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('backend/js/custom.min.js') }}"></script>
    <script src="{{ url('backend/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ url('backend/js/login-form.js') }}"></script>
    <script src="{{ url('backend/js/deznav-init.js') }}"></script>
    <script src="{{ url('backend/js/demo.js') }}"></script>
</body>

</html>
