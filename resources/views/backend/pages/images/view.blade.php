@extends('backend.layouts.master')
@section('content')
        <div class="bg-white p-3 m-3">
            <h2 class="font-weight-bold my-2">View Image</h2>
            <div class="row my-1">
                <div class="col-md-3 font-weight-bold  align-self-center text-dark">
                    Image
                </div>
                <div class="col-md-8 p-2"><img class="img-fluid w-100 rounded" src="{{asset('backend/img/gallery/'.$getImageViewById->image)}}" alt /></div>
            </div>

        </div>
@endsection