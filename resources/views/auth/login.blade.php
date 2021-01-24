<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uxliner.com/backendkit/demo/main/ltr/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jan 2021 11:05:30 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin Login | 1st Choice Family Service</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- v4.0.0-alpha.6 -->
<link rel="stylesheet" href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
<link rel="stylesheet" href="{{asset('backend/css/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/css/et-line-font/et-line-font.css')}}">
<link rel="stylesheet" href="{{asset('backend/css/themify-icons/themify-icons.css')}}">


</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-box-body">
    <h3 class="login-box-msg">Admin Login</h3>
    @if (session()->get('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session()->get('error')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
    @endif
    <form  action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group has-feedback">
          <input type="email" class="form-control sty1" placeholder="Email" name="email" required >
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control sty1" placeholder="Password" name="password" id="password" required>
        </div>
      <div>
        <div class="col-xs-8">
          <div class="checkbox icheck my-3">
            <input type="checkbox" onclick="showPass()"> Show Password</label>
            <a href="{{ route('password.request') }}" class="pull-right "><i class="fa fa-lock"></i> Forgot Password?</a> 
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4 m-t-1">
          <button type="submit" class="btn btn-primary btn-block btn-flat my-2">Login</button>
        </div>
        <!-- /.col --> 
      </div>
    </form>

  </div>
  <!-- /.login-box-body --> 
</div>
<!-- /.login-box --> 

<!-- jQuery 3 --> 
<script>
  const showPass = () => {
    console.log('checked');
    var pass = document.getElementById("password");
    if (pass.type === "password") {
        pass.type = "text";
      } else {
        pass.type = "password";
      }
}
</script>
</body>
 
</html>