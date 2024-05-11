@extends('frontend.layouts.master')
@section('title')
    Recommended Car - {{config('app.name')}}
@endsection
@section('content')
    <div class="container-fluid md-shadow rounded-4 ">
        <div class="row">
            @include('frontend.dashboard.userSidebar')
            <div class="col-md-9">
                <h1>Recommended Car</h1>
                <div class="row">
                    @if(count($cars_data)>0)
                        @foreach($cars_data as $recommended)
                            <div class="col-md-4">
                                <div class="product main p-3 product-item shadow position-relative active"
                                     data-type="coupon"
                                     data-id="MQ==">


                                    <div class="pd-img text-center">
                                        @if($recommended->featuredImage()->image != null)
                                            <img
                                                    src="{{asset('images/media'.'/'.$recommended->featuredImage()->image)}}"
                                                    class="w-75" alt="">
                                        @endif
                                    </div>


                                    <div class="pd-content py-3">
                                        <p class="fs-6 fw-bold text-purp">
                                            {{$recommended->title}}
                                        </p>
                                        <p class="price mb-0">
                                            <span class="fs-6 fw-bold text-purp">

                            ${{$recommended->original_price}}
                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
