@extends('backend.layouts.master')
@section('content')
        <!-- Content Header (Page header) -->
        
          
          <!-- Main content -->
          <div class="content"> 
            <div class="row">
              <div class="col-lg-3">
                <div class="tile-progress tile-pink">
                  <div class="tile-header">
                    <h5>Total Blog</h5>
                    <h3>{{$totalBlog}}</h3>
                  </div>
                  <div class="tile-progressbar"> <span data-fill="65.5%" style="width: {{$totalBlog}}%;"></span> </div>
                  <div class="tile-footer">
                    <h4> <span class="pct-counter"></span> </h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="tile-progress tile-red">
                  <div class="tile-header">
                    <h5>Draft Post</h5>
                    <h3>{{$pendingPost}}</h3>
                  </div>
                  <div class="tile-progressbar"> <span data-fill="70%" style="width: {{$pendingPost}}%;"></span> </div>
                  <div class="tile-footer">
                    <h4> <span class="pct-counter"></span> </h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="tile-progress tile-cyan">
                  <div class="tile-header">
                    <h5>Published Blogs</h5>
                    <h3>{{$DonePost}}</h3>
                  </div>
                  <div class="tile-progressbar"> <span data-fill="50%" style="width:{{$DonePost}}%;"></span> </div>
                  <div class="tile-footer">
                    <h4> <span class="pct-counter"></span> </h4>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="tile-progress tile-aqua">
                  <div class="tile-header">
                    <h5>Total Press</h5>
                    <h3>{{$totalPress}}</h3>
                  </div>
                  <div class="tile-progressbar"> <span data-fill="75.5%" style="width: {{$totalPress}}%;"></span> </div>
                  <div class="tile-footer">
                    <h4> <span class="pct-counter"></span> </h4>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.row -->
  
 
            <!-- /.row --> 
          </div>
@endsection