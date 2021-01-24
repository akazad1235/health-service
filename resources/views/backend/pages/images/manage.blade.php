@extends('backend.layouts.master')
@section('content')
<style>
    .table td, .table th {
    vertical-align: baseline;
}
</style>
    <div class="bg-white p-3 m-3">
        <h2 class="font-weight-bold my-2">Image Gellary</h2>
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
        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
              @php
              $i = 1
              @endphp
              @foreach ($allImage as $item)
                <tr class="text-center ">
                    <td >{{$i++}}</td>
                    <td ><img style="width:200px; height:100px; border-radius:5px" src="{{asset('backend/img/gallery/'.$item->image)}}" /></td>
                    <td class=""><a href="{{route('imageGallery.show', base64_encode($item->id))}}" class="btn btn-warning btn-sm">View</a> <a href="{{route('imageGallery.edit', base64_encode($item->id))}}" class="btn btn-info btn-sm">Edit</a> <a href="{{route('imageGallery.delete', base64_encode($item->id))}}" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
              @endforeach
          </tfoot>
        </table>
            </div>
    </div>
@endsection