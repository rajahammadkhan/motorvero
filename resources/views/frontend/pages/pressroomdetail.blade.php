@extends('frontend.layouts.master')
@section('title')
Press Room Detail
@endsection
@section('content')

<section class="used-car-top-banner">
    <div class="container h-100">
    </div>
</section>
<section class="sec-gsp-form py-5 bg-white">
    <div class="container">

        <div class="col-md-12">
            <h5 class="heading text-center">{{
    $pressRoomDetail->title
}}</h5>
            <div class="para fs-6 long-description-box">
                {!! $pressRoomDetail->long_description !!}
            </div>
    
        </div>
    </div>

</section>
@endsection
