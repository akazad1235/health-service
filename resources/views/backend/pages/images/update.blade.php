@extends('backend.layouts.master')
@section('content')
    <div class="bg-white p-3 m-3">
        <h2 class="font-weight-bold my-2">Add Update Image</h2>
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
        <form action="{{route('imageGallery.update', base64_encode($getImageById->id))}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="blog-img">Blog Image<span class="text-danger">*</span></label>
                <input type="file" class="form-control" id="blog-img" name="image" required>
            </div> 
            <img style="width:300px; height:150px; border-radius:5px; margin:5px" src="{{asset('backend/img/gallery/'.$getImageById->image)}}" alt="post image"/><br>

            <button type="submit" class="btn btn-primary mt-3">Update Image</button>
          </form>


    </div>
@endsection