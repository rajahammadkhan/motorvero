@extends('frontend.layouts.master')
@section('title')
    Saved Car - {{config('app.name')}}
@endsection
@section('content')
    <div class="container-fluid md-shadow rounded-4 ">
        <div class="row">
            @include('frontend.dashboard.userSidebar')
            <div class="col-md-9">
                <h1>Wishlisted Item</h1>
                <div class="row">
                    @foreach($reactions as $reaction)
                        <div class="col-md-4 my-3">
                            <div class="card position-relative">
                                <a class="position-absolute top-0 start-0 w-100 h-100"
                                   href="{{url('detail'.'/'.$reaction->property()->slug)}}"> </a>

                                <div class="card-body">
                                    <img class="card-img-top"
                                         src="{{asset('images/media/').'/'.$reaction->property()->featuredImage()->image}}"
                                         alt="">
                                    <div class="">
                                        <p class="Asayel">{{$reaction->property()->title}}</p>
                                    </div>
                                    <div class="">
                                        <p class="Asayel"></i>Location : {{$reaction->property()->location}}</p>
                                        <p class="Asayel"></i>Transmission : {{$reaction->property()->transmission}}</p>
                                        <p class="Asayel"></i>Vehicle Body : {{$reaction->property()->vehicle_body}}</p>
                                    </div>
                                </div>
                                <div class="card-footer">

                                    <h6>Deal Type {{$reaction->property()->deal_type}}</h6>
                                    <p class="m-0">$ {{$reaction->property()->dollar_price}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
