@extends('frontend.layouts.master')
@section('title')
    Saved Search - {{config('app.name')}}
@endsection
@section('content')
    <div class="container-fluid md-shadow rounded-4 ">
        <div class="row">
            @include('frontend.dashboard.userSidebar')
            <div class="col-md-9">
                <h1>Saved Search</h1>
                <div class="row">
                    @foreach($searches as $reaction)
                        <div class="col-md-4 my-3">
                            <div class="card position-relative">
                                <a class="position-absolute top-0 start-0 w-100 h-100"
                                   href="{{$reaction->url}}"> </a>

                                <div class="card-body">

                                    <div class="">
                                        <p class="Asayel text-uppercase">Save Date: {{date('M-d-Y', strtotime($reaction->created_at))}}</p>
                                    </div>
                                    <div class="">
                                        <p class="Asayel"></i>Condition : {{$reaction->condition}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
