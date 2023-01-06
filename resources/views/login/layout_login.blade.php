<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo url('theme'); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo url('theme'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo url('theme'); ?>/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo title">
    <a href="/login"><b>Universidad de Guayaquil</b></a>
  </div>
  <!-- /.login-logo -->
  @yield('content')
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo url('theme'); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo url('theme'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo url('theme'); ?>/dist/js/adminlte.min.js"></script>
</body>
</html>
