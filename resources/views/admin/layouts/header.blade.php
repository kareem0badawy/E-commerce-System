<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ !empty($title)?$title : trans('admin.adminPanel') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminPanel/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('adminPanel/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('adminPanel/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('adminPanel/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
    @if (direction() == 'ltr')
      <link rel="stylesheet" href="{{ asset('adminPanel/dist/css/adminlte.min.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('adminPanel/RTL/css/adminlteRTL.min.css') }}">
        <link rel="stylesheet" href="{{ asset('adminPanel/RTL/css/customRTL.css') }}">
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
        <style>
          *,body,p,h1,h2,h3,h4,h5,h6,span{
            font-family: 'Cairo', sans-serif
          };
        </style>
    @endif
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('adminPanel/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('adminPanel/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('adminPanel/plugins/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('adminPanel/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
  <script src="{{ asset('adminPanel/js/myfunctions.js') }}"></script>

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">