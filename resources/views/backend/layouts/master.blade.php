<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uxliner.com/adminkit/demo/main/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jan 2021 11:03:03 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin | 1st Choice Family Service </title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- v4.0.0 -->
<link rel="stylesheet" href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicon-16x16.png">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
<link rel="stylesheet" href="{{asset('backend/css/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/css/et-line-font/et-line-font.css')}}">
<link rel="stylesheet" href="{{asset('backend/css/themify-icons/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('backend/css/simple-lineicon/simple-line-icons.css')}}">

<!-- DataTables -->
<link rel="stylesheet" href="{{asset('backend/plugins/datatables/css/dataTables.bootstrap.min.css')}}">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">

    @include('backend.layouts.headers')
    @include('backend.layouts.leftsidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header sty-one">
        <h1> Dashboard</h1>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><i class="fa fa-angle-right"></i> Dashboard</li>
        </ol>
      </div>
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs"></div>
    Copyright © 2021 <strong>1st choice family service</strong>. All rights reserved.</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('backend/js/jquery.min.js')}}"></script>

<!-- v4.0.0-alpha.6 -->
<script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- template -->
<script src="{{asset('backend/js/adminkit.js')}}"></script>

<!-- Morris JavaScript -->
<script src="{{asset('backend/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{asset('backend/plugins/morris/morris.js')}}"></script>
<script src="{{asset('backend/plugins/functions/dashboard1.js')}}"></script>

<!-- Chart Peity JavaScript -->
<script src="{{asset('backend/plugins/peity/jquery.peity.min.js')}}"></script>
<script src="{{asset('backend/plugins/functions/jquery.peity.init.js')}}"></script>
<!-- DataTable -->
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>

<!-- CK Editor -->
<script src="{{asset('backend/ck-editor/ckeditor/ckeditor.js')}}"></script>
<script>

   CKEDITOR.replace( 'editor1' );


</script>
<script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
</body>
</html>
