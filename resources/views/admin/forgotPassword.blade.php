<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ trans('admin.login') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminPanel/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('adminPanel/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminPanel/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="/admin"><b>{{ trans('admin.forgotPasswordTitle') }}</b></a>
        </div>
        @if (session()->has('success'))
          <div class="alert alert-success">
            <h3>{{ session('success') }}</h3>
          </div>
        @elseif(session()->has('error'))
        <div class="alert alert-danger">
            <h3>{{ session('error') }}</h3>
        </div>
        @endif
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
      
            <form action="{{ aurl('reset/password') }}" method="post">
                {{ csrf_field() }}
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" autocomplete="" name="email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
      
            <p class="mt-3 mb-1">
              <a href="{{ aurl('login') }}">Login</a>
            </p>
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>

<!-- jQuery -->
<script src="{{ asset('adminPanel/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminPanel/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminPanel/dist/js/adminlte.min.js') }}"></script>

</body>
</html>
