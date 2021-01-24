<header class="main-header">
    <!-- Logo -->
    <a href="{{url('admin/dashboard')}}" class="logo blue-bg">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img class="img-fluid" src="{{asset('backend/img/logo/logo.png')}}" alt=""></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img class="img-fluid" src="{{asset('backend/img/logo/logo.png')}}" alt=""></span> </a>
    <!-- Header Navbar -->
    <nav class="navbar blue-bg navbar-static-top">
      <!-- Sidebar toggle button-->
      <ul class="nav navbar-nav pull-left">
        <li><a class="sidebar-toggle" data-toggle="push-menu" href="#"></a> </li>
      </ul>
      <div class="pull-left search-box">
        {{-- <form action="#" method="get" class="search-form">
          <div class="input-group">
            <input name="search" class="form-control" placeholder="" type="text">
            <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
            </span></div>
        </form> --}}
        <!-- search form --> </div>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages -->

          <!-- User Account  -->
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="{{asset('backend/img/img1.jpg')}}" class="user-image" alt="User Image"> <span class="hidden-xs">{{auth()->user()->name}}</span> </a>
            <ul class="dropdown-menu">
              {{-- <li><a href="#"><i class="icon-gears"></i> Account Setting</a></li> --}}
              <li role="separator" class="divider"></li>
              <li>

                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i>
                  <span>{{ __('Logout') }}</span>
              </a>
            </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
