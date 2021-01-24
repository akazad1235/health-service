@extends('backend.layouts.master')
@section('content')
    <div class="bg-white p-3 m-3">
        <h2 class="font-weight-bold my-2">Add Image Gellary</h2>
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
                <button type="button" class="close" data-dismiss="alert"></button>	
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <form action="{{route('imageGallery.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="blog-img">Gellary Image<span class="text-danger">*</span></label>
                <input type="file" class="form-control" id="blog-img" name="image" required title="Image size 1400 × 1400">
            </div> 

            <button type="submit" class="btn btn-primary">Submit Image</button>
          </form>


    </div>
@endsection