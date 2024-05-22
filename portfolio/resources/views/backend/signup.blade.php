<!DOCTYPE html>
<html lang="en">

<head>
    <title>Signup | MAROOF</title>
    <meta charset="utf-8">
    <meta name="author" content="DexignZone">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('backend/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ url('backend/vendor/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/css/style.css') }}">
</head>

<body class="vh-100">
    <div class="authincation">
        <div class="container">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="{{ route('dashboard.show') }}" class="brand-logo">
                                            <img class="logo-abbr"
                                                src="{{ url('backend/images/logo/logo1.png') }}"></img>
                                        </a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form action="{{ route('signup.register') }}" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label class="form-label">Fullname</label>
                                            <input type="text" class="form-control" placeholder="username"
                                                name="fullname" value="{{ old('fullname') }}">
                                            @if ($errors->has('fullname'))
                                                <span class="text-danger">
                                                    {{ $errors->first('fullname') }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" placeholder="abc@gmail.com"
                                                name="email" value="{{ old('email') }}">
                                            @if ($errors->has('email'))
                                                <span class="text-danger">
                                                    {{ $errors->first('email') }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="position-relative">
                                                <input type="password" id="dz-password" class="form-control"
                                                    name="password" value="{{ old('password') }}">
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
                                            <button type="submit" class="btn btn-primary btn-block w-100">Sign
                                                Up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary"
                                                href="{{ route('login') }}">Sign
                                                in</a></p>
                                    </div>
                                </div>
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
    <script src="{{ url('backend/js/deznav-init.js') }}"></script>
</body>

</html>
