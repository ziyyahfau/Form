<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIMOMEN</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- <link href="{{ asset("/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" /> -->
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <!-- <link href="{{ asset("/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" /> -->
    <link href="{{ asset('assets/bower_components/adminlte/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
          <link href="{{ asset("/css/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
    -->
    <link href="{{ asset('assets/bower_components/adminlte/dist/css/skins/skin-blue.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('assets/bower_components/adminlte/plugins/iCheck/minimal/blue.css') }}" type="text/css"/>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="register-logo">
            <b>SISTEM MONITORING</b><br>DAN <b>MANAJEMEN</b><br><b>IT INFRASTRUCTURE</b>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Silahkan login menggunakan username dan password anda</p>

        <form method="POST" action="{{ route('login') }}">

            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }} has-feedback">
                <input id="username" type="text" class="form-control" placeholder="username" name="username"
                       value="{{ old('username') }}" required autofocus>

                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                <input id="password" type="password" placeholder="Password" class="form-control" name="password"
                       required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif

                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Ingat saya
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href="{{ route('password.request') }}">Lupa kata sandi</a><br>
        <!-- <a href="{{ route('register') }}" class="text-center">Register a new membership</a> -->

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.1.3 -->
<script src="{{ asset ('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('assets/bower_components/adminlte/dist/js/adminlte.min.js') }}" type="text/javascript"></script>

<!-- AdminLTE App -->
<script src="{{ asset ('assets/bower_components/adminlte/plugins/iCheck/icheck.js') }}" type="text/javascript"></script>

<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>
</html>
