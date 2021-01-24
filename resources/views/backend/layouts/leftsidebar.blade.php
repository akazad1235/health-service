  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar"> 
    <!-- sidebar -->
    <div class="sidebar"> 
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image text-center"><img src="{{asset('backend/img/img1.jpg')}}" class="img-circle" alt="User Image"> </div>
        <div class="info">
          <p>{{auth()->user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
      </div>
      
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">PERSONAL</li>
        <li class="{{request()->is('admin/blog/*')? 'active ': ''}} treeview"> <a href="#"> <i class="icon-grid"></i> <span>Blog</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class=" treeview-menu">
            <li class="{{request()->is('admin/blog/create','admin/blog/create/*')? 'active ': ''}}"><a href="{{route('blog.create')}}"><i class="fa fa-angle-right"></i>Add Blog</a></li>
            <li class="{{request()->is('admin/blog/manage','admin/blog/manage/*')? 'active ': ''}}"><a href="{{route('blog.manage')}}"><i class="fa fa-angle-right"></i>Manage Blog</a></li>
          </ul>
        </li>
        <li class="{{request()->is('admin/press/*')? 'active ': ''}} treeview"> <a href="#"> <i class="icon-grid"></i> <span>Press</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class=" treeview-menu">
            <li class="{{request()->is('admin/press/create','admin/press/create/*')? 'active ': ''}}"><a href="{{route('press.create')}}"><i class="fa fa-angle-right"></i>Add Press</a></li>
            <li class="{{request()->is('admin/press/manage','admin/press/manage/*')? 'active ': ''}}"><a href="{{route('press.manage')}}"><i class="fa fa-angle-right"></i>Manage Press</a></li>
          </ul>
        </li>
        <li class="{{request()->is('admin/imageGallery/*')? 'active ': ''}} treeview"> <a href="#"> <i class="icon-grid"></i> <span>Image Gallery</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class=" treeview-menu">
            <li class="{{request()->is('admin/imageGallery/create','admin/imageGallery/create/*')? 'active ': ''}}"><a href="{{route('imageGallery.create')}}"><i class="fa fa-angle-right"></i>Add Image</a></li>
            <li class="{{request()->is('admin/imageGallery/manage','admin/imageGallery/manage/*')? 'active ': ''}}"><a href="{{route('imageGallery.manage')}}"><i class="fa fa-angle-right"></i>Manage Image </a></li>
          </ul>
        </li>



 
     
      </ul>
    </div>
    <!-- /.sidebar --> 
  </aside>
  