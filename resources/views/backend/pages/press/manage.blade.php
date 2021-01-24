@extends('backend.layouts.master')
@section('content')
    <div class="bg-white p-3 m-3">
        <h2 class="font-weight-bold my-2">All Press Post</h2>
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
            <th>Titile</th>
            <th>Image</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
              @php
              $i = 1
              @endphp
              @foreach ($allPress as $item)
                <tr class="text-center">
                    <td>{{$i++}}</td>
                    <td>{{substr($item->title, 0,40)}}</td>
                    <td ><img style="width:100px; height:50px; border-radius:5px" src="{{asset('backend/img/press/'.$item->image)}}" /></td>
                    <td><span class="badge badge-{{$item->status == 0 ? 'danger':'success'}}">{{$item->status == 0 ? 'Draft':'Published'}}</span></td>
                    <td><a href="{{route('press.show', base64_encode($item->id))}}" class="btn btn-warning btn-sm">Info</a> <a href="{{route('press.edit', base64_encode($item->id))}}" class="btn btn-info btn-sm">Edit</a> <a href="{{route('press.delete', base64_encode($item->id))}}" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
              @endforeach
          </tfoot>
        </table>
            </div>
    </div>
@endsection
