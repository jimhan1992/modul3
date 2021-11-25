<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin1/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('admin1/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin1/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <img src="{{asset('site/img/logo.png')}}" alt="">
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>

            <form action="{{ route('reset.password.post') }}" method="post">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                @if ($errors->has('password_confirmation'))
                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                @endif
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Change password</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <p class="mt-3 mb-1">
                <a href="{{route('login')}}">Login</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->


<script src="{{asset('admin1/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin1/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin1/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
