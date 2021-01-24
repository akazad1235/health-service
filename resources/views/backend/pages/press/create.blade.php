@extends('backend.layouts.master')
@section('content')
    <div class="bg-white p-3 m-3">
        <h2 class="font-weight-bold my-2">Add Press Post</h2>
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
        <form action="{{route('press.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="Title">Press Titile<span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="blog-name" name="title" value="{{ old('title')}}" placeholder="Enter Your Press Title" required>
            </div>
            <div class="form-group">
                <label for="blog-name">Press URL<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="blog-name" name="url" value="{{ old('url')}}" placeholder="Enter Your Press URL" required>
              </div>
            <div class="form-group">
                <label for="img">Press Imge 582×344px<span class="text-danger">*</span></label>
                <input type="file" class="form-control" id="img" name="image"   required>
            </div>
            <div class="form-group">
                <label for="blog-img">Description<span class="text-danger">*</span></label>
                <textarea name="editor1" value="{{ old('editor1')}}"></textarea>
            </div>
            <div class="form-group">
                <label for="status">Post Status<span class="text-danger">*</span></label><br/>
                <select name="status" class="form-control" id="status">
                    <option >Select Choice</option>
                    <option value="0">Draft</option>
                    <option value="1">Publish</option>
                </select>
            </div>
         
            <button type="submit" class="btn btn-primary">Submit Press</button>
          </form>


    </div>
@endsection