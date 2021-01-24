@extends('backend.layouts.master')
@section('content')
        <div class="bg-white p-3 m-3">
            <h2 class="font-weight-bold my-2">Details Press Post</h2>
            <div class="row my-1  border-bottom">
                <div class="col-md-3 font-weight-bold  align-self-center text-dark">Name</div>
                <div class="col-md-8 p-2">{{$Details->title}}</div>
            </div>
            <div class="row my-1  border-bottom">
                <div class="col-md-3 font-weight-bold  align-self-center text-dark">Press URL</div>
                <div class="col-md-8 p-2"><a href="{{$Details->url}}" target="_blank">{{$Details->url}}</a></div>
            </div>
            <div class="row my-1  border-bottom">
                <div class="col-md-3 font-weight-bold  align-self-center text-dark">Status</div>
                <div class="col-md-8 p-2 "><span class="badge badge-{{$Details->status == 0 ? 'danger':'success'}}">{{$Details->status == 0 ? 'Draft':'Published'}}</span></div>
            </div>
            <div class="row my-1  border-bottom">
                <div class="col-md-3 font-weight-bold  align-self-center text-dark">
                    Image
                </div>
                <div class="col-md-8 p-2"><img class="img-fluid w-50 rounded" src="{{asset('backend/img/blog/'.$Details->press)}}" alt /></div>
            </div>
            <div class="row my-1">
                <div class="col-md-3 font-weight-bold  align-self-center text-dark">Description</div>
                <div class="col-md-8 p-2">{!! $Details->desc !!}</div>
            </div>
        </div>
@endsection
