@extends('backend.layouts.master')
@section('content')
    <div class="bg-white p-3">
        <h2 class="font-weight-bold my-2">Update Blog Post</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ $message }}</strong>
            </div>
        @elseif($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <form action="{{route('blog.update', base64_encode($getPostById->id))}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="blog-name">Blog Titile</label>
              <input type="text" class="form-control" id="blog-name" name="blog_title" value="{{ $getPostById->title}}" placeholder="Enter Your Blog Title" >
            </div>
            <div class="form-group">
                
                <label for="blog-img">Blog Image 582×344px</label>
                <input type="file" class="form-control" id="blog-img" name="image"  >
                <img style="width:300px; height:150px; border-radius:5px; margin:5px" src="{{asset('public/backend/img/blog/'.$getPostById->image)}}" alt="post image"/>
            </div>
            <div class="form-group">
                <label for="blog-desc">Description</label>
                <textarea name="editor1">{!! $getPostById->desc !!}</textarea>
            </div>
            <div class="form-group">
                <label for="blog-img">Post Status<span class="text-danger">*</span></label><br/>
                <select name="status" class="form-control">
                    <option >Select One</option>
                    <option value="0" {{ $getPostById->status == 0 ? 'selected':''}}>Draft</option>
                    <option value="1" {{ $getPostById->status == 1 ? 'selected':''}} >Publish</option>
                </select>
            </div>
         
            <button type="submit" class="btn btn-primary">Update Post</button>
          </form>

    </div>
@endsection