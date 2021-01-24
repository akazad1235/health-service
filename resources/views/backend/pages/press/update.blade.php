@extends('backend.layouts.master')
@section('content')
    <div class="bg-white p-3 m-3">
        <h2 class="font-weight-bold my-2">Update Press Post</h2>
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
        <form action="{{route('press.update', base64_encode($getPressById->id))}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="Title">Press Titile</label>
              <input type="text" class="form-control" id="blog-name" name="title" value="{{$getPressById->title }}" placeholder="Enter Your Press Title" required>
            </div>
            <div class="form-group">
                <label for="blog-name">Press URL</label>
                <input type="text" class="form-control" id="blog-name" name="url" value="{{$getPressById->url}}" placeholder="Enter Your Press URL" required>
              </div>
            <div class="form-group">
                <label for="img">Press Image 582×344px</label>
                <input type="file" class="form-control" id="img" name="image" ><br>
                <img src="{{asset('backend/img/press/'.$getPressById->image)}}" alt="">
            </div>
            <div class="form-group">
                <label for="blog-img">Description</label>
                <textarea name="editor1">{!!$getPressById->desc!!}</textarea>
            </div>
            <div class="form-group">
                <label for="status">Press Status</label><br/>
                <select name="status" class="form-control">
                    <option >Select One</option>
                    <option value="0" {{ $getPressById->status == 0 ? 'selected':''}}>Draft</option>
                    <option value="1" {{ $getPressById->status == 1 ? 'selected':''}} >Publish</option>
                </select>
            </div>
         
            <button type="submit" class="btn btn-primary">Update Press</button>
          </form>


    </div>
@endsection