@extends('backend.layouts.master')
@section('content')
        <div class="bg-white p-3 m-3">
            <h2 class="font-weight-bold my-2">Details Blog Post</h2>
            <div class="row my-1  border-bottom">
                <div class="col-md-3 font-weight-bold  align-self-center text-dark">Name</div>
                <div class="col-md-8 p-2">{{$Details->title}}</div>
            </div>
            <div class="row my-1  border-bottom">
                <div class="col-md-3 font-weight-bold  align-self-center text-dark">Status</div>
                <div class="col-md-8 p-2 "><span class="badge badge-{{$Details->status == 0 ? 'danger':'success'}}">{{$Details->status == 0 ? 'Draft':'Published'}}</span></div>
            </div>
            <div class="row my-1  border-bottom">
                <div class="col-md-3 font-weight-bold  align-self-center text-dark">
                    Image
                </div>
                <div class="col-md-8 p-2"><img class="img-fluid w-50 rounded" src="{{asset('public/backend/img/blog/'.$Details->image)}}" alt /></div>
            </div>
            <div class="row my-1">
                <div class="col-md-3 font-weight-bold  align-self-center text-dark">Description</div>
                <div class="col-md-8 p-2">{!! $Details->desc !!}</div>
            </div>
        </div>
@endsection