<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{!! asset('ks01_admin/backend/template/css/bootstrap.min.css') !!}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{!! asset('ks01_admin/backend/template/css/AdminLTE.min.css') !!}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{!! asset('ks01_admin/backend/template/css/skin-blue.min.css') !!}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

   <!--  <form action="#" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        
        <div class="col-xs-4">
          <button type="submit" name="btnSubmit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>

      </div>
    </form> -->

    {!! Form::open(['route' => 'login', 'role' => 'form', 'data-toggle' => 'validator']) !!}
      <div class="form-group has-feedback">
        {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) !!}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <label class="control-label" role="alert">{!! $errors->first('username') !!}</label>

      <div class="form-group has-feedback">
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <label class="control-label" role="alert">{!! $errors->first('password') !!}</label> 
      <br />

      <div class="col-xs-4">
        {!! Form::submit('Sign In', ['class' => 'btn btn-primary btn-block btn-flat']) !!}
      </div>

    {!! Form::close() !!}

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> -->
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3.1.1 -->
<script src="{!! asset('ks01_admin/backend/template/js/jquery-3.1.1.min.js') !!}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{!! asset('ks01_admin/backend/template/js/bootstrap.min.js') !!}"></script>
<!-- iCheck -->
<script src="{!! asset('ks01_admin/backend/template/js/icheck.min.js') !!}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
